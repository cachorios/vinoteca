<?php

namespace AppBundle\Controller\frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Config\ConfigCache;

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
        $dir = $this->container->get('kernel')->getCacheDir();
        $file = $dir . DIRECTORY_SEPARATOR . 'RBSoft'.DIRECTORY_SEPARATOR.  'menu.html';

        if (!file_exists($dir)) {
            mkdir($dir);
        }

        $cache = new ConfigCache($file, false); // $this->container->get('kernel')->isDebug());

        if (!$cache->isFresh()) {
            $menu = $this->get("menu.service")->makeMenu();
            $cache->write($menu);
        } else {
            $menu = file_get_contents((string) $cache);
        }

        return $this->render("AppBundle:frontend/Menu:menufrontend.html.twig", array(
                "menu" => $menu
            )
        );


    }
}
