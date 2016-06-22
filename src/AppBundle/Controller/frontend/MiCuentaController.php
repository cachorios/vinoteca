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
        //$em = $this->getDoctrine()->getManager();


        //return $this->render("@App/mi_cuenta/mi_cuenta.html.twig");

        return $this->redirect($this->generateUrl("fos_user_profile_show"      ));
    }


    /**
     * @Route("/compras_{modo}", name="compras")
     *
     */
    public function comprasAction($modo)
    {
        $aModoss = array('pendiente','transito','terminado');
        if(! in_array($modo,$aModoss))
            throw new \Exception("Accion invalida");
        /**
         * @var Usuario $usuario
         */
        $usuario = $this->getUser();

        if(!$usuario instanceof Usuario) {
            throw new \Exception("Falta un usuario registrado.");
        }

        
        
        $em = $this->getDoctrine()->getManager();
        $compras = $em->getRepository("RBSoftCartBundle:Orden")->getComprasByUserAndEstado($usuario, array_search($modo,$aModoss));

        return $this->render("@App/mi_cuenta/compras.html.twig",
            array(
                'modo' => $modo,
                'compras' => $compras
            )

        );

    }



}
