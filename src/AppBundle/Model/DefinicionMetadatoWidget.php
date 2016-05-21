<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 15:09
 */

namespace AppBundle\Model;

/*
*/

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefinicionMetadatoWidget
{
    const TEXT = "Texto";
    const TEXTAREA = 'Area de Texto';
    const LISTA = 'Lista';

    static function getWidget()
    {
        return array(
            self::TEXT =>1,
            self::TEXTAREA => 2,
            self::LISTA =>3,
        );
    }

    static function getTipo($tipo)
    {

        $tipos = array(
            1 => TextType::class,
            2 => TextareaType::class,
            3 => ChoiceType::class,
        );

        return $tipos[$tipo];
    }

} 