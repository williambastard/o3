<?php

namespace  App\core\app;

use App\core\app\interfaces\ControllerInterface;
use App\core\app\interfaces\ModelInterface;

abstract class Controller extends Utils implements ControllerInterface
{

    public function getClassName(): string
    {
        return static::class;
    }

    public function getQueryFromRequest(): array
    {
        return $_REQUEST["query"] ?? $_REQUEST;
    }

    public function getParametersForSQLFromRequest(): array
    {
        return $_REQUEST["parameters"] ?? [];
    }

    public function queryQueryArrayFromRequest(string $table): array
    {
        $queryRequest = self::getQueryFromRequest();
        return array(
            $queryRequest["selector"] ?? ["SELECT" => "*"],
            "FROM" => $table,
            $queryRequest["conditions"] ?? "",
            $queryRequest["options"] ?? ""
        );
    }

    public function queryBindingIsValid(string $queryBuilder, array $parameters, array &$callback = array()): bool
    {
        $return = true;
        foreach ($parameters as $keyParameter => $valueParameter) {
            if (preg_match("/(:" . $keyParameter . " )/", $queryBuilder) == false) {
                $return &= false;
                array_push($callback, "La requête ne contient pas :" . $keyParameter);
            }
        }
        return $return;
    }
    public function checkIfExists(ModelInterface $model, array $conditions = [], array $params = []): ?object
    {
        $queryBuilder = $model->queryBuilder([
            "SELECT" => "*",
            "FROM" => $model->getTable(),
            "WHERE" => $conditions
        ]);
        $result = $model->find($queryBuilder, $params);
        return $result[0] ?? null;
    }
}
