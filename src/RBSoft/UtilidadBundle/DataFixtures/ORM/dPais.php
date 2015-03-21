<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace RBSoft\UtilidadBundle\DataFixtures\ORM;

use RBSoft\UtilidadBundle\Entity\Pais;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class dPais extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $prods = array(
            array('nombre' => 'Argentina' ),
            array('nombre' => 'Brasil' ),
            array('nombre' => 'Paraguay' ),
        );

        foreach ($prods as $prodArr) {
            $prod = new pais();

            $prod->setNombre($prodArr['nombre']);
            $manager->persist($prod);
            $manager->flush();

            if(!$this->hasReference('parametro-pais-'.$prodArr['nombre'] )){
                $this->addReference('parametro-pais-'.$prodArr['nombre'], $prod);
            }
        }

    }
}
