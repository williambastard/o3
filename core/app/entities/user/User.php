<?php

namespace  App\core\app\entities\user;

use App\core\app\entities\permission\ArrayPermissions;
use App\core\app\entities\practiceArea\ArrayPracticeAreas;
use App\core\app\entities\userCalendar\UserCalendar;
use App\core\app\enums\Type;
use App\core\app\enums\TypeCompte;
use App\core\app\enums\StatusUser;
use App\core\app\interfaces\ClassToJsonInterface;
use App\core\app\Utils;
use DateTime;

class User  implements ClassToJsonInterface
{
    private ?int $id;
    private string $pseudo;
    private ?Type $type;
    private TypeCompte $accountType;
    private ArrayPracticeAreas $practiceAreas;
    private string $company;
    private string $lastname;
    private string $firstname;
    private string $phone;
    private string $mail;
    private string $url;
    private string $login;
    private ?float $latitude;
    private ?float $longitude;
    private ?StatusUser $status;
    private ?DateTime $lastLogin;
    private ?DateTime $createdAt;
    private string $creator;
    private ?int $contractId;
    private ArrayPermissions $permissions;
    private UserCalendar $userCalendar;


    public function __construct(
        $pseudo,
        $accountType,
        $practiceAreas,
        $company,
        $lastname,
        $firstname,
        $phone,
        $mail,
        $url,
        $login,
        $creator,
        $permissions,
        $createdAt,
        $status,
        $userCalendar,
        $type = null,
        $id = null,
        $latitude = null,
        $longitude = null,
        $lastLogin = null,
        $contractId = null
    ) {
        $this->id = $id;
        $this->userCalendar = $userCalendar;
        $this->pseudo = $pseudo;
        $this->type = $type;
        $this->accountType = $accountType;
        $this->practiceAreas = $practiceAreas;
        $this->company = $company;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->url = $url;
        $this->login = $login;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->status = $status;
        $this->lastLogin = $lastLogin;
        $this->createdAt = $createdAt;
        $this->creator = $creator;
        $this->contractId = $contractId;
        $this->permissions = $permissions;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getType()
    {
        return $this->type->value;
    }

    public function getAccountType()
    {
        return $this->accountType->value;
    }



    public function getCompany()
    {
        return $this->company;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function getStatus()
    {
        return $this->status;
    }



    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    public function getCreator()
    {
        return $this->creator;
    }
    public function getContractId()
    {
        return $this->contractId;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function toJson(): array
    {
        $arrayJSON = [];
        foreach ($this as $key => $value) {
            $key = Utils::camelToSnake($key);

            if (is_object($value)) {
                if ($value instanceof DateTime) {
                    $arrayJSON[$key] = $value->format('Y-m-d H:i:s');
                } else if ($value instanceof \UnitEnum) {
                    $arrayJSON[$key] = $value->value;
                } else {
                    $arrayJSON[$key] = $value->toJson();
                }
            } else {
                $arrayJSON[$key] = $value;
            }
        }
        return $arrayJSON;
    }

    public function getBindParameter()
    {
        $params = [];
        foreach ($this as $key => $value) {

            if (($this->$key instanceof \UnitEnum)) {
                $params[Utils::camelToSnake($key)] = $value->value;
            } else if (is_array($this->$key)) {
                $params[Utils::camelToSnake($key)] = json_encode($value, JSON_HEX_QUOT | JSON_HEX_APOS | JSON_HEX_AMP);
            } else if (!is_object($this->$key) && $value !== null) {
                $params[Utils::camelToSnake($key)] =  $value;
            }
        }
        return $params;
    }

    public function updateUser(array $data)
    {
        $clone = clone $this;
        foreach ($data as $key => $value) {
            $key = Utils::snakeToCamel($key);
            if (property_exists($clone, $key)) {
                if (is_object($clone->$key) && ($clone->$key instanceof \UnitEnum)) {
                    if ($value === "") {
                        $clone->$key = null;
                    } else {
                        $clone->$key = get_class($clone->$key)::from($value);
                    }
                } else {
                    $clone->$key = $value;
                }
            }
        }
        return $clone;
    }


    public function getPracticeAreas()
    {
        return $this->practiceAreas;
    }


    public function getUserCalendar()
    {
        return $this->userCalendar;
    }
}
