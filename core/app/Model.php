<?php

namespace  App\core\app;

use App\core\app\enums\Visibility;
use App\core\app\interfaces\DatabaseInterface;
use App\core\app\interfaces\ModelInterface;

abstract class Model implements ModelInterface
{
    protected  $instanceDb;
    public  $firestoreDB;
    protected $table;

    protected function __construct(DatabaseInterface $instanceDb)
    {
        $this->instanceDb = $instanceDb->sql;
        $this->firestoreDB = $instanceDb->firestore;
    }


    public function getTable()
    {
        return $this->table;
    }
    public function find(string &$requestQuery = "", array $parameters = [])
    {
        return $this->instanceDb->query($requestQuery, $parameters);
    }

    /**
     * Find rows on the target table where the value of $searchKey are in $valuesForKey
     * 
     * @param string $searchKey - specific search key
     * @param array $valuesForKey - values to look for must be non empty
     * @return array - the search result
     */
    public function findAllIn(string $searchKey, array $valuesForKey)
    {
        $keys = '';
        $params = [];
        $i = 0;
        foreach ($valuesForKey as $value) {
            $i++;
            $keys .= ":{$searchKey}{$i},";
            $params["{$searchKey}{$i}"] = $value;
        }
        $keys = trim($keys, ',');
        $result = $this->instanceDb->query("SELECT * FROM {$this->table} WHERE {$searchKey} IN ($keys)", $params);
        return $result;
    }

    public function create(array $bindParameter): int
    {
        $keys = '';
        $values = '';
        $sql = "INSERT INTO {$this->table}";
        foreach ($bindParameter as $key => $value) {
            $keys .= "{$key},";
            $values .= ":{$key},";
        }
        $keys = "(" . trim($keys, ',') . ")";
        $values = "(" . trim($values, ',') . ")";
        $sql .= "{$keys} VALUES {$values}";

        $result = $this->instanceDb->query($sql, $bindParameter)["lastInsert"];
        return $result;
    }

    public function update(array $bindParameter)
    {
        $set = "";
        $where = "";
        foreach ($bindParameter as $key => $value) {
            if ($value == null || $key == "created_at") {
                unset($bindParameter[$key]);
            } else {
                if ($key === 'id') {
                    $where .= "$key = :$key";
                } else {
                    $set .= "$key = :$key,";
                }
            }
        }
        $set = substr($set, 0, -1);

        $req = "UPDATE  $this->table SET $set WHERE $where ";
        $sql = $this->instanceDb->query($req, $bindParameter);
        return $sql;
    }

    protected function getInterval($debut = '', $fin = '')
    {
        if ($debut !== '' && $fin !== '') {
            $debut .= " 00:00";
            $fin .= " 23:59";
            return ['prev' => $debut, 'curr' => $fin];
        }
        $curr_date = date('Y-m-d');
        $current_year = intval(explode('-', $curr_date)[0]);
        return ['prev' => "$current_year-01-01 00:00:00", 'curr' => "$curr_date 23:59:59"];
    }

    protected function getIntervalForDashboard($debut = '', $fin = '')
    {
        if ($debut !== '' && $fin !== '') {
            $debut .= " 00:00";
            $fin .= " 23:59";
            return ['prev' => $debut, 'curr' => $fin];
        }
        return [];
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $this->instanceDb->query($sql, ['id' => $id]);
    }

    public function beginTransaction()
    {
        $this->instanceDb->beginTransaction();
    }

    public function endTransaction()
    {
        $this->instanceDb->endTransaction();
    }
    public function inTransaction()
    {
        return  $this->instanceDb->inTransaction();
    }

    public function rollback()
    {
        $this->instanceDb->rollBack();
    }

    public function queryBuilder(array $query): string
    {
        $queryBuilder = "";
        foreach ($query as $queryKey => $queryValue) {
            if (is_array($query)) {
                if (!is_numeric($queryKey) && !empty($queryValue))
                    $queryBuilder .= $queryKey . " ";
            }
            if (!empty($queryValue)) {
                if (is_array($queryValue)) {
                    $queryBuilder .=  self::queryBuilder($queryValue);
                } else {
                    if (preg_match("/^([A-z-0-9=!%*:;,><_.&.\(\)\|\[\]\{\} ]+)$/", $queryValue)) {
                        $queryBuilder .=  $queryValue . " ";
                    } else
                        throw new \Exception('La requête SQL doit être de l\'interval /^([A-z-0-9=!%*:;,><_.&.\(\)\|\[\]\{\} ]+)$/ passer un paramètre sans bind est aussi interdit !', 500);
                }
                if (preg_match("/AND|OR$/", $queryKey))
                    $queryBuilder = "( " . $queryBuilder . " ) ";
            }
        }
        return $queryBuilder;
    }
}