<?php

namespace App\core\app\entities;


class FactoryException extends ApiException
{
    private array $invalid;
    private array $inexistent;

    public function __construct(array $invalid, array $inexistent)
    {
        parent::__construct(message: 'Données invalides', code: 400);
        $this->inexistent = $inexistent;
        $this->invalid = $invalid;
    }



    public function getLastFile()
    {
        $res = $this->getTrace()[0]['file'];
        $res = explode('/', $res);
        $res = end($res);
        $res = str_replace('.php', '', $res);
        return $res;
    }


    public function getInvalid()
    {
        return $this->invalid;
    }


    public function getInexistent()
    {
        return $this->inexistent;
    }
}
