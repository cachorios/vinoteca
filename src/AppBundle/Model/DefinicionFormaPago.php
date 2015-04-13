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
class DefinicionFormaPago {

    static function getDefType(){
        return array(
            0 => 'Cheque',
            1 => 'Contra Reembolso',
            2 => 'Efectivo',
            3 => 'Ninguna',
            4 => 'Pago combinado',
            5 => 'PayPal',
            6 => 'Tarjeta de Crédito',
            7 => 'Transferencia Bancaria',
            8 => 'Vale reposicion',
            9 => 'Otra',
        );
    }

    static function getDef($tipo)
    {
        $tipos = self::getDefType();
        return $tipos[$tipo];
    }

} 