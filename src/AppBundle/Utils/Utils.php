<?php
/**
 * Created by PhpStorm.
 * User: Beto
 * Date: 21/06/2016
 * Time: 18:56
 */

namespace AppBundle\Utils;


class Utils
{
    /**
     * Crea un codigo aleatorio.
     *
     * @param $length
     *
     * @return string
     */
    public static function getUniqueCode($length = 10){
        $code = md5(uniqid(rand(), true));
        if ($length != "") return substr($code, 0, $length);
        else return $code;
    }
}