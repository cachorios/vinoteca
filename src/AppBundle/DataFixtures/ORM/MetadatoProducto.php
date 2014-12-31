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
        $arrs = array(
            array('categoria' => 'Tinto', 'nombre' => 'Varietal',           'prederminado' => '',            'filtrable' => 1, 'orden' => 10, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Bodega',             'prederminado' => '',            'filtrable' => 1, 'orden' => 20, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Cata',               'prederminado' => '',            'filtrable' => 0, 'orden' => 30, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Maridaje',           'prederminado' => '',            'filtrable' => 0, 'orden' => 40, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Porcentaje Alcohol', 'prederminado' => '14.6',        'filtrable' => 0, 'orden' => 50, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Volumen',            'prederminado' => '750cc',       'filtrable' => 0, 'orden' => 60, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Pais de Origen',     'prederminado' => 'Argentina',   'filtrable' => 1, 'orden' => 70, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Tinto', 'nombre' => 'Ciudad Origen',      'prederminado' => 'Mendoza',     'filtrable' => 1, 'orden' => 80, 'lista' => '', 'widget' => 1 ),

            array('categoria' => 'Blanco', 'nombre' => 'Varietal',           'prederminado' => '',            'filtrable' => 1, 'orden' => 10, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Bodega',             'prederminado' => '',            'filtrable' => 1, 'orden' => 20, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Cata',               'prederminado' => '',            'filtrable' => 0, 'orden' => 30, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Maridaje',           'prederminado' => '',            'filtrable' => 0, 'orden' => 40, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Porcentaje Alcohol', 'prederminado' => '14.6',        'filtrable' => 0, 'orden' => 50, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Volumen',            'prederminado' => '750cc',       'filtrable' => 0, 'orden' => 60, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Pais de Origen',     'prederminado' => 'Argentina',   'filtrable' => 1, 'orden' => 70, 'lista' => '', 'widget'  => 1),
            array('categoria' => 'Blanco', 'nombre' => 'Ciudad Origen',      'prederminado' => 'Mendoza',     'filtrable' => 1, 'orden' => 80, 'lista' => '', 'widget' => 1),

            array('categoria' => 'Rubia', 'nombre' => 'Bodega',             'prederminado' => '',            'filtrable' => 1, 'orden' => 20, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Cata',               'prederminado' => '',            'filtrable' => 0, 'orden' => 30, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Maridaje',           'prederminado' => '',            'filtrable' => 0, 'orden' => 40, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Porcentaje Alcohol', 'prederminado' => '',             'filtrable' => 0, 'orden' => 50,'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Volumen',            'prederminado' => '650cc',       'filtrable' => 0, 'orden' => 60, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Pais de Origen',     'prederminado' => 'Argentina',   'filtrable' => 1, 'orden' => 70, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Rubia', 'nombre' => 'Ciudad Origen',      'prederminado' => '',             'filtrable' => 1, 'orden' => 80,'lista' => '', 'widget' => 1 ),

            array('categoria' => 'Negra', 'nombre' => 'Bodega',             'prederminado' => '',            'filtrable' => 1, 'orden' => 20, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Cata',               'prederminado' => '',            'filtrable' => 0, 'orden' => 30, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Maridaje',           'prederminado' => '',            'filtrable' => 0, 'orden' => 40, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Porcentaje Alcohol', 'prederminado' => '',             'filtrable' => 0, 'orden' => 50,'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Volumen',            'prederminado' => '650cc',       'filtrable' => 0, 'orden' => 60, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Pais de Origen',     'prederminado' => 'Argentina',   'filtrable' => 1, 'orden' => 70, 'lista' => '', 'widget' => 1 ),
            array('categoria' => 'Negra', 'nombre' => 'Ciudad Origen',      'prederminado' => '',             'filtrable' => 1, 'orden' => 80,'lista' => '', 'widget' => 1 ),

        );

        foreach ($arrs as $a) {
            $o = new \AppBundle\Entity\MetadatoProducto();
            
            //$o->setCategoria( $manager->getRepository("AppBundle:Categoria")->findOneByNombre($a['categoria']) );
            $o->setCategoria( $this->getReference($a['categoria']))            ;
            $o->setNombre($a['nombre']);
            $o->getPredeterminado($a['prederminado']);
            $o->setFiltrable($a['filtrable']);
            $o->setOrden($a['orden']);
            $o->setListaValores($a['lista']);
            $o->setWidget($a['widget']);

            $manager->persist($o);
            $manager->flush();
            $this->addReference($o->getCategoria()->getNombre().'-'.$o->getNombre(), $o);
        }






    }
}
