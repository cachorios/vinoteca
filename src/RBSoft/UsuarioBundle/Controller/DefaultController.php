<?php

namespace RBSoft\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class DefaultController extends Controller
{

    public function loginAction(Request $request)
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render("UsuarioBundle:Default:login.html.twig", array(
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ));

    }

}
