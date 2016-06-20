<?php

namespace AppBundle\Controller\frontend;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class MiCuentaController extends Controller
{

    /**
     * @Route("/micuenta", name="mi_cuenta")
     * Template()
     */
    public function indexAction()
    {
        /**
         * @var \Doctrine\ORM\EntityManager $em
         */
        $em = $this->getDoctrine()->getManager();


        return $this->render("@App/mi_cuenta/mi_cuenta.html.twig");
    }



}
