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

class MenuService {
    CONST MENU_STR='
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
            ###MENU###
        </div>
        <!-- Navbar Cat collapse Ends -->
    </nav>

        ';

    private $contenedor;

    public function __construct(Container $contenedor)
    {
        $this->contenedor = $contenedor;
    }

    public function getMenuFrontendItems()
    {
        $menuFull = self::MENU_STR;
        $em = $this->contenedor->get("doctrine.orm.entity_manager");
        $menu = $this->genMenu($em);



        return $menuFull;
    }


    private function genMenu(EntityManager $em,  Categoria $padre = null,&$nivel = 0, &$ac = 0)
    {
        $menu = array();

        if($padre === null){
            $cats = $em->getRepository("AppBundle:Categoria")->findBy(array('activo' => 1 , 'visible' => 1,'level' =>0),array('level' => 'asc', 'orden' => 'asc'));
        }else{
            $cats = $em->getRepository("AppBundle:Categoria")->findBy(array('activo' => 1 , 'visible' => 1,'parent' => $padre->getId()),array('level' => 'asc', 'orden' => 'asc'));
        }

        foreach($cats as $cat) {

            $nivel = max($cat->getLevel(), $nivel);
            //$nivel2 = $cat->getLevel();
            $menu[$cat->getId()] = array('item' =>$cat, 'hijos' => $this->genMenu($em,$cat, $nivel, $ac));
            $menu[$cat->getId()]['nivel'] = $nivel;

        }



        return $menu;

    }

    public function makeMenu(){
        $menuFull = self::MENU_STR;
        $menu = "";
        $em = $this->contenedor->get("doctrine.orm.entity_manager");
        // 1ro la barra
        $cats = $em->getRepository("AppBundle:Categoria")->findBy(array('activo' => 1 , 'visible' => 1,'level' =>0),array('level' => 'asc', 'orden' => 'asc'));

        foreach($cats as $cat) {
            $menu .= $this->makeBarra($em, $cat);
        }
        $menuFull = str_replace("###MENU###",$menu,$menuFull);
        return $menuFull;
    }

    private function makeBarra(EntityManager $em,Categoria $CatBarra){
        return "";
    }




} 