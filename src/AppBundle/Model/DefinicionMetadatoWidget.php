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

class DefinicionMetadatoWidget
{
    const TEXT = 'Text';
    const TEXTAREA = 'Textarea';
    const LISTA = 'Lista';

    static function getWidget()
    {
        return array(
            1 => self::TEXT,
            2 => self::TEXTAREA,
            3 => self::LISTA,
        );
    }

    static function getTipo($tipo)
    {

        $tipos = array(
            1 => 'text',
            2 => 'textarea',
            3 => 'choice',
        );

        return $tipos[$tipo];
    }

} 