<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 17/12/2014
 * Time: 22:13
 */

namespace AppBundle\Controller\frontend;


use AppBundle\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
/**
 * Class ProductoController
 * @package AppBundle\Controller\frontend
 */
class ProductoController extends  Controller {

    /**
    * @Route("/productos/{id}", name="productos")
    * @Template()
    * @ParamConverter("categoria", class="AppBundle:Categoria")
    */
    public function getProductosAction(Categoria $categoria){
        return array("cat" => $categoria);
    }
} 