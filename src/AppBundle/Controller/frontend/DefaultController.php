<?php

namespace AppBundle\Controller\frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {

        //ladybug_dump_die($this->get("menu.service")->getMenuFrontendItems());
//        ladybug_dump($this->get("menu.service")->makeMenu());
//        $this->get("menu.service")->makeMenu();
        return array();
    }


    /**
     * @Route("/getmenu", name="menu_frontend")
     */
    public function menufrontendAction()
    {


        return $this->render("AppBundle:frontend/Menu:menufrontend.html.twig", array(
                "menu" =>$this->get("menu.service")->makeMenu()
            )
        );
        //return array("items" =>$this->get("menu.service")->getMenuFrontendItems());

    }
}
