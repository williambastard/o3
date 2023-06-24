<?php

namespace App\core\app\interfaces;

interface DatabaseInterface
{
    public static function getDbInstance(string $base);
}
interface FirestoreInterface
{
    public function getAllFirestoreDocuments(string $documentName);
}
interface DatabaseSQLInterface
{
    public function rollback();
    public function inTransaction();
    public function endTransaction();
    public function beginTransaction();
    public function query(string $sql, array $data = array(), string $id = "querySQLNoNamed", bool $typeArray = false): mixed;
}
