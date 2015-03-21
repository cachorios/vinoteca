<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace RBSoft\UtilidadBundle\DataFixtures\ORM;

use RBSoft\UtilidadBundle\Entity\pais;
use RBSoft\UtilidadBundle\Entity\Provincia;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class dProvincia extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    private $container;

    public function getOrder()
    {
        return 1051;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $prods = array(
            array('pais' => 'Argentina', 'nombre' => 'Buenos Aires', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Buenos Aires-GBA', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Capital Federal', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Catamarca', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Chaco', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Chubut', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Córdoba', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Corrientes', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Entre Ríos', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Formosa', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Jujuy', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'La Pampa', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'La Rioja', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Mendoza', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Misiones', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Neuquén', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Río Negro', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Salta', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'San Juan', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'San Luis', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Santa Cruz', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Santa Fe', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Santiago del Estero', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Tierra del Fuego', 'activo' => 'true' ),
            array('pais' => 'Argentina', 'nombre' => 'Tucumán', 'activo' => 'true' ),
        );

        foreach ($prods as $prodArr) {
            $prod = new Provincia();

            $prod->setPais($this->getReference('parametro-pais-'.$prodArr['pais']));
            $prod->setNombre($prodArr['nombre']);

            $manager->persist($prod);
            $manager->flush();

            if(!$this->hasReference('parametro-provincia-'.$prodArr['nombre'] )){
                $this->addReference('parametro-provincia-'.$prodArr['nombre'], $prod);
            }
        }

    }
}
