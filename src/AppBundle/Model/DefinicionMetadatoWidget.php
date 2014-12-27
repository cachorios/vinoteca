<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 15:09
 */

namespace AppBundle\Model;

/*
* no utilizado por el momento.
*/

class DefinicionMetadatoWidget {

    static function getMetadatoFilterWidget(){
        return array(
            0 => 'Textos',
            1 => 'Numeros',
        );
    }
} 