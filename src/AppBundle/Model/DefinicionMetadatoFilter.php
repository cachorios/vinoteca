<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 15:09
 */

namespace AppBundle\Model;
/*
* Utilizado en la generacion del tipo metadato filter.
*
*/
class DefinicionMetadatoFilter {

    static function getMetadatoFilterType(){
        return array(
            0 => 'No',
            1 => 'Radio',
            2 => 'Check',
        );
    }
} 