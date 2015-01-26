<?php

namespace AppBundle\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Categoria controller.
 *
 * @Route("/")
 */
class InicioController extends Controller
{
    /**
     * @Route("/", name="homepage_admin")
     * @Method({"GET","POST"})
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Admin/Inicio:index.html.twig',array(
        ));
    }
}
