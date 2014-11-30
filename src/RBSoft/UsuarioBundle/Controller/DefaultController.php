<?php

namespace RBSoft\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UsuarioBundle:Default:deftxt.html.twig', array('name' => $name));
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // obtener, si existe, el error producido en el último intento de login
        if( $request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR )){
            $error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);

        }else{
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }


        return $this->render("UsuarioBundle:Default:login.html.twig", array(
                'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
                'error' => $error ));
    }

}
