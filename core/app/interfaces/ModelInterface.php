<?php

namespace App\core\app\interfaces;

interface ModelInterface
{
    public function beginTransaction();
    public function endTransaction();
    public function inTransaction();
    public function rollback();
    public function getTable();
    public function findAllIn(string $searchKey, array $valuesForKey);
    public function create(array $bindParameter): int;
    public function update(array $bindParameter);
    public function delete(int $id);
    public function queryBuilder(array $query): string;
    public function find(string &$requestQuery = "", array $parameters = []);
}
