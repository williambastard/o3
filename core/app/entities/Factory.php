<?php


namespace  App\core\app\entities;

use App\core\app\Utils;
use Exception;

abstract class Factory
{



    protected static function isValidFormat(object $object, array $colonnes): bool
    {
        $invalid = [];
        $inexistent = [];
        $data = [];
        foreach ($colonnes as $index => $value) {
            if ($value["isRequired"] && !isset($object->$index)) {
                array_push($inexistent, $index);
            } else if (isset($object->$index)) {
                $validation = Utils::getValidation($value['type']);
                Utils::checkFilter($object, $validation, $index, $data, $invalid);
            }
        }
        // NE PAS EFFACER. NECESSAIRE EN DEVELOPPEMENT.
        if (!empty($invalid) || !empty($inexistent)) {
            throw new FactoryException($invalid, $inexistent);
        }
        return empty($invalid) && empty($inexistent) ? true : false;
    }
}
