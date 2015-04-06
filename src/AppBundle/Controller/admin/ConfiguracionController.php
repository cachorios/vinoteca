<?php

namespace AppBundle\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Categoria controller.
 *
 * @Route("/configuracion")
 */
class ConfiguracionController extends Controller
{
    /**
     * @Route("/", name="admin_configuracion")
     * @Method({"GET","POST"})
     */
    public function indexAction()
    {
        return $this->render('AppBundle:admin/Configuracion:index.html.twig',array(
        ));
    }
}
