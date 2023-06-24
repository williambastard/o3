<?php

namespace App\core\app\entities;

class ReturnApi
{
    private int $code;
    private array $msg;
    private array $data;
    private string $requete;
    private array $callback;

    public function __construct($msg = array("Erreur serveur"), $code = 500,  $data = array(), $requete = "", $callback = array())
    {
        $this->msg = $msg;
        $this->code = $code;
        $this->data = $data;
        $this->requete = $requete;
        $this->callback = $callback;
    }

    public function returnJson()
    {
        echo (json_encode([
            'code' => $this->code,
            'msg' => $this->msg,
            'requete' => $this->requete,
            'data' => $this->data,
            'callback' => $this->callback
        ]));
    }

    public function returnObject()
    {
        return (object)$this->returnArray();
    }

    public function returnArray()
    {
        return [
            'code' => $this->code,
            'msg' => $this->msg,
            'requete' => $this->requete,
            'data' => $this->data,
            'callback' => $this->callback
        ];
    }


    public function getCode()
    {
        return $this->code;
    }


    public function getMsg()
    {
        return $this->msg;
    }


    public function getData()
    {
        return $this->data;
    }
}
