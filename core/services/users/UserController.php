<?php
namespace App\core\services\users;

use App\core\app\Controller;
use App\core\app\entities\ReturnApi;
use App\core\app\interfaces\ModelInterface;
use App\core\app\interfaces\users\UsersControllerInterface;
use App\core\app\interfaces\users\UsersModelInterface;
use App\core\app\Utils;

class UsersController extends Controller implements UsersControllerInterface
{
    protected UsersModelInterface $model;

    public function __construct(UsersModelInterface $userModel)
    {
        $this->model = $userModel;
    }
    public function read(): ReturnApi
    {
        return new ReturnApi(code: 200, msg: "", data: [], requete: static::class . "\\" . __FUNCTION__);
    }

    private static function passwordValidation(string $password, ModelInterface $model): bool
    {
        $result = false;
        if (isset($_SESSION["USER"])) {
            $queryBuilder = $model->queryBuilder([
                "SELECT" => "users.password",
                "FROM" => "users",

                "WHERE" => "id=:id"
            ]);
            $userPassword = $model->find($queryBuilder, ["id" => $_SESSION["USER"]["id"]]);
            $result = Utils::cryptHash($password) == $userPassword[0]->password;
        }

        return $result;
    }
}
