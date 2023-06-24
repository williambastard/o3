<?php

namespace  App\core\services\users;

use App\core\app\enums\StatusUser;
use App\core\app\interfaces\DatabaseInterface;
use App\core\app\interfaces\users\UsersModelInterface;
use App\core\app\enums\Visibility;
use App\core\app\Model;
use DateTime;

class UsersModel extends Model implements UsersModelInterface
{

    public function __construct(DatabaseInterface $instanceDb)
    {
        parent::__construct($instanceDb);
        $this->table = 'users';
    }
}
