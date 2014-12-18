<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Configuracion;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class Configuraciones extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $Arrs = array(
            array('descuento' =>10, 'productosPorPagina' => '2,3,4' ),
        );

        foreach ($Arrs as $a) {
            $o = new Configuracion();

            $o->setDescuentoGlobal($a['descuento']);
            $o->setProductosPorPagina($a['productosPorPagina']);

            $manager->persist($o);
            $manager->flush();
        }






    }
}
