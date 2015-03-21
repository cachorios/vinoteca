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
class DefinicionConIva {

    static function getDefType(){
        return array(
            0 => 'Consumidor Final',
            1 => 'Responsable Inscripto',
            2 => 'Responsable No Inscripto',
            3 => 'No responsable',
            4 => 'Exento',
            5 => 'Responsable No Identificado',
            6 => 'Responsable Monotributo',
            7 => 'Responsable Incripto RG',
        );
    }

    static function getDef($tipo)
    {
        $tipos = self::getDefType();
        return $tipos[$tipo];
    }

} 