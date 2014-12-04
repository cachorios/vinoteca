<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 02/12/2014
 * Time: 11:53
 */

namespace AppBundle\Servicios;

use AppBundle\Entity\Categoria;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DependencyInjection\Container;

class MenuService
{
    CONST MENU_STR = '
    <nav id="main-menu" class="navbar" role="navigation">
        <!-- Nav Header Starts -->
        <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- Nav Header Ends -->
        <!-- Navbar Cat collapse Starts -->
        <div class="collapse navbar-collapse navbar-cat-collapse">
            <ul class="nav navbar-nav">
                ###MENU###
            </ul>
        </div>
        <!-- Navbar Cat collapse Ends -->
    </nav>';
    CONST MENU_NAVBAR_ITEM = '<li><a href="###URL###">###LABEL###</a></li>';
    CONST MENU_NAVBAR_SUBMENU = '
        <li class="dropdown">
            <a href="###URL###" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                ###LABEL###
            </a>
            <ul class="dropdown-menu" role="menu">
                ###SUBMENU###
            </ul>
        </li>';

    CONST MENU_SUBMENU_SIMPLE = '
        <ul class="dropdown-menu" role="menu">
            ###MENU###
        </ul>';
    CONST MENU_SUBMENU_COMPUESTO = '
	<div class="dropdown-menu">
		<div class="dropdown-inner">
			###SUBMENU###
		</div>
	</div>
    ';
    CONST MENU_ITEM_CON_TITULO = '
        <ul class="list-unstyled">
            <li class="dropdown-header">###TITULO###</li>
            ###MENU###
        </ul>
    ';
    private $contenedor;

    public function __construct(Container $contenedor)
    {
        $this->contenedor = $contenedor;
    }

    public function makeMenu()
    {

        $menu = "";
        $em = $this->contenedor->get("doctrine.orm.entity_manager");

        // 1ro la barra
        $cats = $em->getRepository("AppBundle:Categoria")->getBarraMenu();
        foreach ($cats as $cat) {
            $menu .= $this->makeBarra($em, $cat[0], $cat[1]);
        }
        $menuFull = str_replace("###MENU###", $menu, self::MENU_STR);

        return $menuFull;
    }

    private function makeBarra(EntityManager $em, Categoria $CatBarra, $maxLevel)
    {

        if ($maxLevel == 0) {
            $menu = str_replace("###URL###", '#', self::MENU_NAVBAR_ITEM);
            $menu = str_replace("###LABEL###", $CatBarra->getNombre(), $menu);

        } else {
            $menu = str_replace("###URL###", "#", self::MENU_NAVBAR_SUBMENU);
            $menu = str_replace("###LABEL###", $CatBarra->getNombre(), $menu);

            $menu = str_replace("###SUBMENU###", $this->makeSubmenu($em, $CatBarra, $maxLevel), $menu);

        }

        return $menu;
    }

    private function makeSubmenu(EntityManager $em, Categoria $CatBarra, $maxLevel)
    {

        $cats = $em->getRepository("AppBundle:Categoria")->getCategoriaItem($CatBarra->getId());
        $menu = "";
        $submenu1 = "";
        $submenu2 = "";
        foreach ($cats as $cat) {
            if ($maxLevel == 1) {
                $item = str_replace("###URL###", '#', self::MENU_NAVBAR_ITEM);
                $item = str_replace("###LABEL###", $cat->getNombre(), $item);
                $menu .= $item;
            } else { //nivel = 2
                $menu = "";

                //Si tiene hijo se agrega subtitulo
                if ($em->getRepository("AppBundle:Categoria")->tieneHijo($cat->getId())) {
                    $subAux = str_replace("###TITULO###", $cat->getNombre(), self::MENU_ITEM_CON_TITULO);
                    $catHijos = $em->getRepository("AppBundle:Categoria")->getCategoriaItem($cat->getId());
                    $itemHijo = "";
                    foreach ($catHijos as $hijo) {
                        $item = str_replace("###URL###", '#', self::MENU_NAVBAR_ITEM);
                        $item = str_replace("###LABEL###", $cat->getNombre(), $item);
                        $itemHijo .= $item;
                    }
                    $submenu2 .= str_replace('###MENU###', $itemHijo, $subAux);
                } else {
                    $item = str_replace("###URL###", '#', self::MENU_NAVBAR_ITEM);
                    $item = str_replace("###LABEL###", $cat->getNombre(), $item);
                    $submenu1 .= $item;
                }
            }
        }
        if ($maxLevel > 1) {
            if (!$submenu1 == '') {
                $subAux = str_replace("###TITULO###", "&nbsp;", self::MENU_ITEM_CON_TITULO);
                $submenu1 = str_replace("###MENU###", $submenu1, $subAux);
            }
            $menu = str_replace("###LABEL###", $submenu1.' '.$submenu2, self::MENU_SUBMENU_COMPUESTO);
        }
        return $menu;
    }


}