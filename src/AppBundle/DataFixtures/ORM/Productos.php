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


class Productos extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1015;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $cats = array(
            array('codigo' =>'01', 'nombre' => 'Bonarda Lote Especial', 'desc' => 'Colomé elabora desde 1831 los afamados vinos de altura.
En los últimos años hemos sumado la Estancia y el Museo James Turrel para ofrecer una experiencia única e inesperada en la inmensidad del Valle Calchaquí.
El silencio mágico, el cielo estrellado y un sol radiante e intenso llenan de energía y sentido místico la experiencia Colomé.', 'precio' => 15.25, 'iva' => 0.21 ),

            array('codigo' =>'02', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'03', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'04', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'05', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'06', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'07', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'08', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'09', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'10', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'11', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'12', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'13', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'14', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'15', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'16', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'17', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'18', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'19', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'20', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'21', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'22', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'23', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'24', 'nombre' => '',  'desc' => '', 'precio' => 15.25, 'iva' => 0.21 )

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
