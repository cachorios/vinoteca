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

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class MetadatoProducto extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1020;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $cats = array(
            array('categoria' => 'vino', 'nombre' => 'Varietal',           'prederminado' => '',            'filtrable' => 1, 'orden' => 10, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Bodega',             'prederminado' => '',            'filtrable' => 1, 'orden' => 20, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Cata',               'prederminado' => '',            'filtrable' => 0, 'orden' => 30, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Maridaje',           'prederminado' => '',            'filtrable' => 0, 'orden' => 40, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Porcentaje Alcohol', 'prederminado' => '14.6',        'filtrable' => 0, 'orden' => 50, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Volumen',            'prederminado' => '750cc',       'filtrable' => 0, 'orden' => 60, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Pais de Origen',     'prederminado' => 'Argentina',   'filtrable' => 1, 'orden' => 70, 'lista' => '' ),
            array('categoria' => 'vino', 'nombre' => 'Ciudad Origen',      'prederminado' => 'Mendoza',     'filtrable' => 1, 'orden' => 80, 'lista' => '' ),

        );

        foreach ($cats as $catArr) {
            $cat = new Categoria();


            $cat->setNombre($catArr['nombre']);
            $cat->setOrden($catArr['orden']);
            $cat->setActivo(1);
            $cat->setVisible(1);
            $cat->setDescripcion($catArr['descripcion']);
            $cat->setImagen($catArr['imagen']);


            if(isset($catArr['parent_id']))
                $cat->setParent($manager->getRepository("AppBundle:Categoria")->findOneBy(array("nombre" =>$catArr['parent_id'])));


            $manager->persist($cat);
            $manager->flush();
        }






    }
}
