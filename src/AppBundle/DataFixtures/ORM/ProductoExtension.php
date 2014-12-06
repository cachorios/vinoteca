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
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Varietal',           'valor' => 'Bonarda'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Bodega',             'valor' => 'Colome'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Cata',               'valor' => 'ista: Intenso rubí con matiz violeta. Aroma: Fruta negra y roja, especiado, mentolado y carnoso. Concentrado y complejo. Sabor: Concentrado y con buen volumen. De gran cuerpo y taninos redondos. Se destaca las frutas negras, especias y mentol.'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Maridaje',           'valor' => 'Ideal para acompañar platos de carnes rojas, pastas con salsas intensas, empanadas y picadas.'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Porcentaje Alcohol', 'valor' => '14,6%'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Colome Bonarda Lote Especial', 'nombre' => 'Ciudad Origen',      'valor' => 'Salta'),


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
