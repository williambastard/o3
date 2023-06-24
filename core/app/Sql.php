<?php
namespace App\core\app;

use App\core\app\interfaces\DatabaseSQLInterface;
use PDO;

class Sql implements DatabaseSQLInterface
{
    private $dbPDO;
    protected $table;
    protected $colonnesDb;

    public function __construct(PDO $db)
    {
        $this->dbPDO = $db;
    }

    public function rollback()
    {
        $this->dbPDO->rollBack();
    }

    public function inTransaction()
    {
        return $this->dbPDO->inTransaction();
    }

    public function endTransaction()
    {
        $this->dbPDO->commit();
    }

    public function beginTransaction()
    {
        $this->dbPDO->beginTransaction();
    }

    public function query($sql, $data = array(), $id = "querySQLNoNamed", $typeArray = false): mixed
    {

        $req = $this->dbPDO->prepare($sql);
        if ($req !== false) {

            foreach ($data as $key => $value) {
                if ($typeArray)
                    $req->bindValue($key, $value, $typeArray[$key]);
                else {
                    if (is_int($value) || $key == "limit" || $key == "offset" || $key == "order")
                        $param = PDO::PARAM_INT;
                    elseif (is_bool($value))
                        $param = PDO::PARAM_BOOL;
                    elseif (is_null($value))
                        $param = PDO::PARAM_NULL;
                    elseif (is_string($value) || is_float($value))
                        $param = PDO::PARAM_STR;
                    else
                        $param = FALSE;

                    if ($param)
                        $req->bindValue($key, $value, $param);
                }
            }
            if ($id == "createQuoteInvoiceX")
                highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
            $req->execute();

            $lastID =  intval($this->dbPDO->lastInsertId());

            @$_SESSION["coreSQL"][$id] =
                array(
                    "code" => $req->errorCode(),
                    "msg" => $req->errorInfo(),
                    "methode" => strtolower($_SERVER['REQUEST_METHOD']),
                    "requete" => json_encode($req, JSON_HEX_QUOT | JSON_HEX_APOS | JSON_HEX_AMP),
                    "data" => json_encode($data, JSON_HEX_QUOT | JSON_HEX_APOS | JSON_HEX_AMP),
                    "lastID" => $lastID,
                );

            if (preg_match("/^SELECT/i", $sql) || preg_match("/^WITH/i", $sql)) {
                return $req->fetchAll(PDO::FETCH_OBJ);
            } else {
                return ["query" => $req, "lastInsert" => $lastID, "code" =>  $this->dbPDO->errorCode()];
            }
        }
        return null;
    }
}
