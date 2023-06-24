<?php
namespace  App\core\app;

abstract class Utils
{

    private static $regex = [
        "az" => "/^[a-z]+$/iu",
        "type_user" => "/^[\w,]*$/iu",
        "url_user" => "/^[\w\/]+$/iu",
        "phone_user" => "/^[\d ]{10,}$/iu",
        "phone_user_optional" => "/^([\d ]{10,})*$/iu",
        "az09" => "/^[\w\d]+$/iu",
        "text" => "/^.+$/iu",
        "text255" => "/^.{1,255}$/iu",
        "userlogin" => "/.*/i",
        "all" => "/^.|\s+$/",
        "password" => "/^.{8,}$/iu",
        "heure" => "/^[0-9][0-9]:[0-9][0-9]$/i",
        "datesql" => "/^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}(:[0-9]{2})?$/i",
        "optional" => "/.*/i",
        "text_optional" => "/.*/im",
        "09_optional" => "/^[0-9]*$/i",
        "creditcardnumber" => "/^[0-9]{16}$/i",
        "creditcardexpiration" => "/^[0-9]{2}\/[0-9]{2}$/i",
        "trueorfalse" => "/^(TRUE|FALSE)$/i",
        "paymenttype" => "/^(esp|vir|chq|cb)$/i",
        "statuspayment" => "/^(ATTENTE|ENCAISSE|ERREUR_PAIEMENT)$/",
        "day" => "/^(LUNDI|MARDI|MERCREDI|JEUDI|VENDREDI|SAMEDI|DIMANCHE)$/",
        "resource_type" => "/^(text\/plain|image\/jpeg|audio\/mpeg|video\/mp4|application\/pdf)$/",
        "hour" => "/^([\d]{2}:){2}([\d]{2})$/",
        "statuspayment" => "/^(ATTENTE|ENCAISSE|ERREUR_PAIEMENT|PAIEMENT_REFUSE|REMBOURSE)$/",
        "signature_key" => "/^(HETAB-DEFAULT|HETAB-URGENT|HETAB-PERSONALISED|DISTANT-PERSONALISED|DISTANT-URGENT|DISTANT-DEFAULT|DEFAULT|AFTER-PERIOD)$/",
        "document_type" => "/^(invoice|quote)$/",
        "cvc" => "/^[0-9]{3}$/",
        "catalogstatus" => "/^(ARCHIVED|ACTIVE|DRAFT)$/",
        "cataloggroup" => "/^(PRESTATION|PRODUCT)$/",
        "visibility" => "/^(SHOW|HIDDEN)$/",
        "address_number" => "/^[\d]+(\s?)(bis|ter|quater)?$/i",
    ];

    protected function validationRequest(array|object $indexAValide, bool $checkIfIsPresent = true): array
    {
        $invalid = [];
        $inexistent = [];
        $data = [];
        foreach ($indexAValide as $index => $regexName) {
            if (!isset($_REQUEST[$index])) {
                $inexistent[] = $index;
            } else {
                $validation = $this->getValidation($regexName);
                $this->checkFilter($_REQUEST, $validation, $index, $data, $invalid);
            }
        }
        if (!$checkIfIsPresent && empty($invalid)) {
            return ["valid" => true, "data" => $data];
        } else if (empty($invalid) && empty($inexistent)) {
            return ["valid" => true, "data" => $data];
        } else {
            return ["valid" => false, "invalid" => $invalid, "inexistent" => $inexistent];
        }
    }
    public static function getValidation($validationType)
    {
        $filter = FILTER_DEFAULT;
        $options = [];

        switch ($validationType) {
            case 'mail':
                $filter = FILTER_VALIDATE_EMAIL;
                break;
            case 'bool':
                $filter = FILTER_VALIDATE_BOOLEAN;
                break;
            case 'int':
                $filter = FILTER_VALIDATE_INT;
                break;
            case 'float':
                $filter = FILTER_VALIDATE_FLOAT;
                break;
            case 'array_mails':
                $filter = "array_mails";
                break;
            default:
                $filter = FILTER_VALIDATE_REGEXP;
                $options["options"] = [
                    "regexp" => self::$regex[$validationType]
                ];
        }
        return [
            'filter' => $filter,
            'options' => $options
        ];
    }
    public static function checkFilter($dataToValid, $validation, $index, &$data, &$nonValide)
    {
        if ($index == "mails") {
            self::validArrayMails($dataToValid, $data, $nonValide);
        } else {
            (gettype($dataToValid) === 'object') && $dataToValid = (array) $dataToValid;
            $options = empty($validation['options']) ? 0 : $validation['options'];
            if (filter_var($dataToValid[$index], $validation['filter'], $options) !== false) {
                $data[$index] = trim(html_entity_decode($dataToValid[$index], ENT_HTML5 | ENT_QUOTES));
            } else {
                $nonValide[] = $index;
            }
        }
    }
    public static function validArrayMails($dataToValid, &$data, &$nonValide)
    {
        $arrayMails = [];
        $result = false;


        if (isset($dataToValid->mails)) {
            $mails = json_decode($dataToValid->mails);
            if (is_array($mails)) {
                $result = true;
                foreach ($mails as  $mail) {

                    if (filter_var($mail, FILTER_VALIDATE_EMAIL) !== false) {
                        $arrayMails[] = trim(html_entity_decode($mail, ENT_HTML5 | ENT_QUOTES));
                    } else {
                        $result &= false;
                    }
                }
            }
        }
        if ($result == true) {
            $data["mails"] = json_encode($arrayMails);
        } else {
            $nonValide[] = "array_mails";
        }
    }
    protected static function cryptHash(string $STRING)
    {
        return HASH("SHA256", $STRING);
    }
    public static function snakeToCamel($input)
    {
        return  lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
    }
    public static function camelToSnake($input)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }
    public function char($text): string
    {
        $text = htmlentities($text, ENT_NOQUOTES, "UTF-8");
        $text = htmlspecialchars_decode($text);
        return $text;
    }
    public function charDecode($text): string
    {
        $text = htmlspecialchars($text);
        $text = html_entity_decode($text, ENT_NOQUOTES, "UTF-8");
        return $text;
    }
    public  function removeAccents($string)
    {
        $string = str_replace(
            array(
                'à', 'â', 'ä', 'á', 'ã', 'å',
                'î', 'ï', 'ì', 'í',
                'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
                'ù', 'û', 'ü', 'ú',
                'é', 'è', 'ê', 'ë',
                'ç', 'ÿ', 'ñ'
            ),
            array(
                'a', 'a', 'a', 'a', 'a', 'a',
                'i', 'i', 'i', 'i',
                'o', 'o', 'o', 'o', 'o', 'o',
                'u', 'u', 'u', 'u',
                'e', 'e', 'e', 'e',
                'c', 'y', 'n'
            ),
            $string
        );
        return $string;
    }
    public static function getArrayIndexFromArrayOfObject(string $index, array $array): array
    {
        $result = [];
        foreach ($array as  $value) {
            if ($value->$index) {
                array_push($result, $value->$index);
            }
        }
        return $result;
    }
    public static function getArrayIndexFromArrayOfArray(string $index, array $array): array
    {
        $result = [];
        foreach ($array as  $value) {
            if ($value[$index]) {
                array_push($result, $value[$index]);
            }
        }
        return $result;
    }
}
