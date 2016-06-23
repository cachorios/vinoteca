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
class DefinicionFormaPago
{

    static function getDefType()
    {
        return array(
            'Efectivo' => 0,
            'Cheque' => 1,
            'Contra Reembolso' => 2,
            'Ninguna' => 3,
            'Pago combinado' => 4,
            'PayPal' => 5,
            'Tarjeta de Crédito' => 6,
            'Transferencia Bancaria' => 7,
            'Vale reposicion' => 8,
            'Otra' => 9,
        );
    }

    static function getDef($tipo)
    {

        $tipos = self::getDefType();
        return $tipos[$tipo];
    }

} 