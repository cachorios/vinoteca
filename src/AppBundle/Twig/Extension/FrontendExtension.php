<?php

namespace AppBundle\Twig\Extension;
class FrontendExtension extends \Twig_Extension
{
    private $container ;
    public function __construct($container)
    {
        $this->container = $container;
    }
    public function getName()
    {
        return 'frontent.func';
    }

//    public function getFunctions()
//    {
//        return array(
////            'esCajero' => new \Twig_Function_Method($this, 'esCajero'),
//            'liquidacionActiva' => new \Twig_Function_Method($this, 'liquidacionActiva'),
//            'liquidacionActivaMsg' => new \Twig_Function_Method($this, 'liquidacionActivaMsg'),
//        );
//    }
//
//
////    public function esCajero(){
////        return $this->container->get("caja.manager")->esCajero() ;
////    }
//
//    public function liquidacionActivaMsg(){
//        $liq = $this->container->get("dejos")->getLiquidacionActiva() ;
//
//        return $liq ? $liq->__toString() :  "No establecida" ;
//        // return  "No establecida" ;
//    }
//
//    public function liquidacionActiva(){
//        $liq = $this->container->get("dejos")->getLiquidacionActiva() ;
//
//
//        return $liq? $liq->getId() : null;
//    }

}