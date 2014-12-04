<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Categoria;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
//use Symfony\Component\Finder\Finder;

class Categorias extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1000;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $cats = array(
            array('nombre' => 'Vino',     'orden' => 1,    'activo' => 1, 'visible' => 1),
            array('nombre' => 'Blanco',   'orden' => 3,    'activo' => 1, 'visible' => 1, 'parent_id' => 'Vino'),
            array('nombre' => 'Tinto',    'orden' => 2,    'activo' => 1, 'visible' => 1, 'parent_id' => 'Vino'),
            array('nombre' => 'Cerveza',  'orden' => 1000, 'activo' => 1, 'visible' => 1),
            array('nombre' => 'Rubia',    'orden' => 1005, 'activo' => 1, 'visible' => 1, 'parent_id' => 'Cerveza'),
            array('nombre' => 'Negra',    'orden' => 1015, 'activo' => 1, 'visible' => 1, 'parent_id' => 'Cerveza'),
            array('nombre' => 'Malbec',   'orden' => 105,  'activo' => 1, 'visible' => 1, 'parent_id' => 'Tinto'),
            array('nombre' => 'Sirah',    'orden' => 115,  'activo' => 1, 'visible' => 1, 'parent_id' => 'Tinto'),
            array('nombre' => 'Tabaco',   'orden' => 2000, 'activo' => 1, 'visible' => 1),
            array('nombre' => 'Burley',   'orden' => 2005,'activo' => 1, 'visible' => 1, 'parent_id' => 'Tabaco'),
            array('nombre' => 'Criollo',  'orden' => 2015,'activo' => 1, 'visible' => 1, 'parent_id' => 'Tabaco'),

            array('nombre' => 'Solo Menu',  'orden' => 3000,'activo' => 1, 'visible' => 1)


        );

        foreach ($cats as $catArr) {
            $cat = new Categoria();


            $cat->setNombre($catArr['nombre']);
            $cat->setOrden($catArr['orden']);
            $cat->setActivo($catArr['activo']);
            $cat->setVisible($catArr['visible']);


            if(isset($catArr['parent_id']))
                $cat->setParent($manager->getRepository("AppBundle:Categoria")->findOneBy(array("nombre" =>$catArr['parent_id'])));


            $manager->persist($cat);
            $manager->flush();
        }






    }
}
