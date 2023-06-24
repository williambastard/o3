<?php

namespace  App\core\app\entities\user;

use App\core\app\entities\Factory;
use App\core\app\entities\permission\ArrayPermissionsFactory;
use App\core\app\entities\practiceArea\ArrayPracticeAreasFactory;
use App\core\app\entities\userCalendar\UserCalendarFactory;
use App\core\app\enums\StatusUser;
use App\core\app\enums\Type;
use App\core\app\enums\TypeCompte;
use DateTime;

class UserFactory extends Factory
{
    private static array $colonnes = [
        'id' => [
            'type' => 'int',
            'isRequired' => false
        ],
        'pseudo' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'type' => [
            'type' => 'text',
            'isRequired' => false
        ],
        'account_type' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'company' => [
            'type' => 'text_optional',
            'isRequired' => true
        ],
        'lastname' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'firstname' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'phone' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'mail' => [
            'type' => 'mail',
            'isRequired' => true
        ],
        'url' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'login' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'latitude' => [
            'type' => 'float',
            'isRequired' => false
        ],
        'longitude' => [
            'type' => 'float',
            'isRequired' => false
        ],
        'status' => [
            'type' => 'text',
            'isRequired' => false
        ],
        'last_login' => [
            'type' => 'datesql',
            'isRequired' => false
        ],
        'created_at' => [
            'type' => 'datesql',
            'isRequired' => false
        ],
        'creator' => [
            'type' => 'text',
            'isRequired' => true
        ],
        'contract_id' => [
            'type' => 'int',
            'isRequired' => false
        ]

    ];

    public static function create(object $user, array $permissions = [])
    {

        if (self::isValidFormat($user, self::$colonnes)) {
            return new User(
                pseudo: $user->pseudo,
                type: $user->type ? Type::from($user->type) : null,
                accountType: TypeCompte::from($user->account_type),
                practiceAreas: ArrayPracticeAreasFactory::create($user->practice_areas ?? []),
                company: $user->company,
                lastname: strtoupper($user->lastname),
                firstname: ucwords($user->firstname),
                phone: $user->phone,
                mail: $user->mail,
                url: $user->url,
                login: $user->login,
                latitude: $user->latitude,
                longitude: $user->longitude,
                status: StatusUser::from($user->status),
                lastLogin: new DateTime($user->last_login),
                createdAt: new DateTime($user->created_at),
                creator: $user->creator,
                permissions: ArrayPermissionsFactory::create($permissions),
                id: $user->id,
                userCalendar: UserCalendarFactory::create($user->calendars ?? []),
                contractId: $user->contract_id ?? null
            );
        }
        return null;
    }
    public static function createNewUser(object $user, array $permissions = [])
    {
        if (self::isValidFormat($user, self::$colonnes)) {
            return new User(
                pseudo: $user->pseudo,
                type: $user->type ? Type::from($user->type) : null,
                accountType: TypeCompte::from($user->account_type),
                practiceAreas: ArrayPracticeAreasFactory::create($user->practice_areas ?? []),
                company: $user->company,
                lastname: $user->lastname,
                firstname: $user->firstname,
                phone: $user->phone,
                mail: $user->mail,
                url: $user->url,
                login: $user->login,
                status: StatusUser::from($user->status ?? "SHOW"),
                creator: $user->creator,
                createdAt: new DateTime($user->created_at ?? ''),
                userCalendar: UserCalendarFactory::create($user->calendars ?? []),
                permissions: ArrayPermissionsFactory::create($permissions),
            );
        }
        return null;
    }
}
