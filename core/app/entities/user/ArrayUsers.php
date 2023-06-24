<?php
namespace  App\core\app\entities\user;

use App\core\app\interfaces\ClassArrayToJsonInterface;

class ArrayUsers implements ClassArrayToJsonInterface
{
    private array $users;

    public function __construct($users)
    {
        $this->users = $users;
    }
    
    public function getUsers()
    {
        return $this->users;
    }
    
    public function toJson()
    {
        $arrayJSON = [];
        foreach ($this->users as $value) {
            array_push($arrayJSON,$value->toJson());
        }
        return $arrayJSON;
    }
}
