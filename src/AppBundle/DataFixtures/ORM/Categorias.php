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
            array('id' => 1, 'nombre' => 'Vino',     'orden' => 1,    'level' => 0, 'root' => 0, 'activo' => 1, 'visible' => 1),
            array('id' => 2, 'nombre' => 'Blanco',   'orden' => 3,    'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 1),
            array('id' => 3, 'nombre' => 'Tinto',    'orden' => 2,    'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 1),
            array('id' => 4, 'nombre' => 'Cerveza',  'orden' => 1000, 'level' => 0, 'root' => 0, 'activo' => 1, 'visible' => 1),
            array('id' => 5, 'nombre' => 'Rubia',    'orden' => 1005, 'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 4),
            array('id' => 6, 'nombre' => 'Negra',    'orden' => 1015, 'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 4),
            array('id' => 7, 'nombre' => 'Malbec',   'orden' => 105,  'level' => 2, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 3),
            array('id' => 8, 'nombre' => 'Sirah',    'orden' => 115,  'level' => 2, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 3),
            array('id' => 100,'nombre' => 'Cigarro', 'orden' => 2000, 'level' => 0, 'root' => 0, 'activo' => 1, 'visible' => 1),
            array('id' => 105, 'nombre' => 'Burley',  'orden' => 2005, 'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 100),
            array('id' => 115, 'nombre' => 'Criollo', 'orden' => 2015, 'level' => 1, 'root' => 0, 'activo' => 1, 'visible' => 1, 'parent_id' => 100),


        );

        foreach ($cats as $catArr) {
            $cat = new Categoria();

            $cat->setId($catArr['id']);
            $cat->setNombre($catArr['nombre']);
            $cat->setOrden($catArr['nombre']);
            $cat->setLevel($catArr['level']);
            $cat->setRoot($catArr['root']);
            $cat->setActivo($catArr['activo']);
            $cat->setVisible($catArr['visible']);
            if(isset($catArr['parent_id']))
                $cat->setParent(  $manager->getRepository("AppBundle:Categoria")->find($catArr['parent_id']));

            $manager->persist($cat);
        }


        $manager->flush();



    }
}
