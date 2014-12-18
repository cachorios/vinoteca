<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 17/12/2014
 * Time: 21:50
 */

namespace AppBundle\Servicios;

use Doctrine\ORM\EntityManager;

class Setting {
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    private $setting;

    public function __construct($em){
        $this->em = $em;
    }

    public function getSetting(){
        if($this->setting == null){
            $this->setting = $this->em->getRepository("AppBundle:Configuracion")->findAll()[0];
        }
        return $this->setting;
    }


} 