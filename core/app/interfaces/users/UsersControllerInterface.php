<?php

namespace App\core\app\interfaces\users;

use App\core\app\entities\ReturnApi;
use App\core\app\interfaces\ControllerInterface;

interface UsersControllerInterface extends ControllerInterface
{
    public function read(): ReturnApi;
}
