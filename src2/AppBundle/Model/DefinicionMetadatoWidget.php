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

    static function getWidget(){
        return array(
            1 => 'Text',
            2 => 'Textarea',
//            3 => 'Integer',
//            4 => 'Lista',
//            5 => 'Lista predefinida',
        );
    }

    static function getTipo($tipo){

        $tipos =  array(
            1 => 'text',
            2 => 'textarea',
//            3 => 'integer',
//            4 => 'choice',
//            5 => 'choice',
        );

        return $tipos[$tipo];
    }

} 