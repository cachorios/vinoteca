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


class ProductoImagen extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1050;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $arrs = array(
                array('producto' =>'01',),
                array('producto' =>'02',),
                array('producto' =>'03',),
                array('producto' =>'04',),
                array('producto' =>'05',),
                array('producto' =>'06',),
                array('producto' =>'07',),
                array('producto' =>'08',),
                array('producto' =>'09',),
                array('producto' =>'10',),
                array('producto' =>'11',),
                array('producto' =>'12',),
                array('producto' =>'13',),
                array('producto' =>'15',),

        );

        foreach ($arrs as $a) {
            $o = new \AppBundle\Entity\ProductoImagen();
            $o->setPrimario(true);
            $o->setProducto($manager->getRepository("AppBundle:Producto")->findOneByCodigo($a['producto']));

            $manager->persist($o);
            $manager->flush();
        }






    }
}
