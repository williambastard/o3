<?php

namespace App\core\app\interfaces;

interface ControllerInterface
{
    public function getClassName(): string;
    public function getQueryFromRequest(): array;
    public function getParametersForSQLFromRequest(): array;
    public function queryQueryArrayFromRequest(string $table): array;
    public function queryBindingIsValid(string $queryBuilder, array $parameters, array &$callback = array()): bool;
}
