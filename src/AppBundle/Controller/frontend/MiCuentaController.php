<?php

namespace AppBundle\Controller\frontend;


use RBSoft\UsuarioBundle\Entity\Usuario;
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


    /**
     * @Route("/compras_pendiente", name="compras_pendiente")
     *
     */
    public function compras_pendienteAction()
    {
        /**
         * @var Usuario $usuario
         */
        $usuario = $this->getUser();

        if(!$usuario instanceof Usuario) {
            throw new \Exception("Falta un usuario registrado.");
        }

        $em = $this->getDoctrine()->getManager();
        $compras = $em->getRepository("RBSoftCartBundle:Orden")->getComprasPendientesByUser($usuario);

        return $this->render("@App/mi_cuenta/compras_pendiente.html.twig",
            array(
                'compras' => $compras
            )

        );

    }



}
