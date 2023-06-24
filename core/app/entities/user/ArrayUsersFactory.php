<?php
namespace  App\core\app\entities\user;

use App\core\app\entities\Factory;

class ArrayUsersFactory extends Factory
{

    public static function create(array $users)
    {
        $newUsers = [];
        foreach ($users as  $value) {
            $oneUser = UserFactory::create($value);
            $oneUser != null &&  array_push($newUsers, $oneUser);
        }
        return  (new ArrayUsers($newUsers));
    }
    public static function createWithPermission(array $usersWithPermission)
    {
        $newUsers = [];
        foreach ($usersWithPermission as  $value) {
            $oneUser = UserFactory::create($value['user'],$value['permissions']);
            $oneUser != null &&  array_push($newUsers, $oneUser);
        }
        return (new ArrayUsers($newUsers));
    }
}
