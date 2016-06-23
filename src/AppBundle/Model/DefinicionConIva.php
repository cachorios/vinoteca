<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 15:09
 */

namespace AppBundle\Model;
/*
*
*/
class DefinicionConIva
{

    static function getDefType()
    {
        return array(
            'Consumidor Final' => 0,
            'Responsable Inscripto' => 1,
            'Responsable No Inscripto' => 2,
            'No responsable' => 3,
            'Exento' => 4,
            'Responsable No Identificado' => 5,
            'Responsable Monotributo' => 6,
            'Responsable Incripto RG' => 7,
        );
    }

    static function getDef($tipo)
    {
        $tipos = self::getDefType();
        return $tipos[$tipo];
    }

} 