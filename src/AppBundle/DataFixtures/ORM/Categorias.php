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
            array('nombre' => 'Vino',     'orden' => 1,     'descripcion' =>'<p>El vino (del latín <strong><i>vinum</i></strong>) es una bebida obtenida de la uva (especie <strong><i>Vitis vinifera</i></strong>) mediante la fermentación alcohólica de su mosto o zumo. La fermentación se produce por la acción metabólica de levaduras que transforman los azúcares del fruto en alcohol etílico y gas en forma de dióxido de carbono. El azúcar y los ácidos que posee la fruta Vitis vinifera hace que sean suficientes para el desarrollo de la fermentación. No obstante, el vino es una suma de un conjunto de factores ambientales: clima, latitud, altitud, horas de luz, temperatura...etc. Aproximadamente un 66% de la recolección mundial de la uva se dedica a la producción vinícola; el resto es para su consumo como fruta. A pesar de ello el cultivo de la vid cubre tan sólo un 0,5% del suelo cultivable en el mundo. El cultivo de la vid se ha asociado a lugares con un clima mediterráneo.</p>
<p>Se da el nombre de «vino» únicamente al líquido resultante de la fermentación alcohólica, total o parcial, del zumo de uvas, sin adición de ninguna sustancia. En muchas legislaciones se considera sólo como vino a la bebida fermentada obtenida de Vitis vinifera, pese a que se obtienen bebidas semejantes de otras especies como la Vitis labrusca, Vitis rupestris, etc. El conocimiento de la ciencia particular de la elaboración del vino se denomina enología (sin considerar los procesos de cultivo de la vid). La ciencia que trata tan sólo de la biología de la vid, así como de su cultivo, se denomina <strong>ampelología</strong></p>', 'imagen' => 'vino.jpg' ),
            array('nombre' => 'Vino Blanco',   'orden' => 3,     'descripcion' =>'<p>El vino blanco es un tipo de vino obtenido por la fermentación de mosto sin cascarillas ni semillas, elaborado a partir de variedades de uvas blancas (blanco de blancos) o de negros de pulpa blanca (blanco de negros).</p>
<p>Si el mosto tiene más de 272 gramos de azúcar por litro, se obtendrá un vino dulce natural (con un mínimo de 8 grados). Si tiene menos de 5 y el dulce no se nota en el paladar, entonces se trata de un blanco seco.</p>
<p>No se debe utilizar nunca a menos de 8 grados, ya que si la temperatura fuera inferior, la copa se empaña fácilmente y no se pueden apreciar bien la transparencia y los matices del color.</p>
<p>Se cultiva al menos desde los últimos 2500 años. Ha acompañado el desarrollo económico y colonizado todo el mundo cuyos habitantes son bebedores de vino: Europa, América, Oceanía, y en menor medida Asia y África por razones religiosas y climáticas.</p>', 'imagen' => 'blanco.jpg','parent_id' => 'Vino'),
            array('nombre' => 'Vino Tinto',    'orden' => 2,     'descripcion' =>'<p>El vino tinto es un tipo de vino procedente mayormente de mostos de uvas tintas, con la elaboración pertinente para conseguir la difusión de la materia colorante que contienen los hollejos de la uva.</p><p> En función del tiempo de envejecimiento que se realice en la barrica y en la botella, pueden obtenerse vinos jóvenes, crianzas, reservas o grandes reservas.</p>', 'imagen' => 'tinto.jpg','parent_id' => 'Vino'),
            array('nombre' => 'Cerveza',  'orden' => 1000,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg' ),
            array('nombre' => 'Rubia',    'orden' => 1005,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Cerveza'),
            array('nombre' => 'Negra',    'orden' => 1015,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Cerveza'),
            array('nombre' => 'Malbec',   'orden' => 105,   'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Tinto'),
            array('nombre' => 'Sirah',    'orden' => 115,   'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Tinto'),
            array('nombre' => 'Tabaco',   'orden' => 2000,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg' ),
            array('nombre' => 'Burley',   'orden' => 2005,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Tabaco'),
            array('nombre' => 'Criollo',  'orden' => 2015,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg','parent_id' => 'Tabaco'),
            array('nombre' => 'Solo Menu','orden' => 3000,  'descripcion' =>'Descripcion de la categoria', 'imagen' => 'img1.jpg' ),


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
            $this->addReference($cat->getNombre(), $cat);
        }






    }
}
