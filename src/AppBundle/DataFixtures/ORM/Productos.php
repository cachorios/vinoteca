<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Producto;
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
        $prods = array(
            array('codigo' =>'01','cat' => 'Vino Tinto', 'nombre' => 'Bonarda Lote Especial', 'desc' => 'Colomé elabora desde 1831 los afamados vinos de altura.
En los últimos años hemos sumado la Estancia y el Museo James Turrel para ofrecer una experiencia única e inesperada en la inmensidad del Valle Calchaquí.
El silencio mágico, el cielo estrellado y un sol radiante e intenso llenan de energía y sentido místico la experiencia Colomé.', 'precio' => 15.25, 'iva' => 0.21 ),

            array('codigo' =>'02','cat' => 'Vino Tinto','nombre' => 'Ciclos Tardio',  'desc' => 'El Valle de Cafayate, localizado a 1700 msnm, nos ofrece características incomparables para la elaboración de vinos únicos. Encuentra su máxima expresión en El Esteco que nos entrega una marcada tipicidad en sus vinos, con aromas y colores intensos que invitan a descubrir sus característicos sabores.', 'precio' => 112.00, 'iva' => 0.21 ),
            array('codigo' =>'03','cat' => 'Vino Tinto','nombre' => 'Emma Zuccardi',  'desc' => 'Vista: Color profundo y matices purpuras violáceos. Aroma: Aromas típicos de frutas rojas y negras maduras -como frutillas, frambuesas, moras y cerezas negras. Sabor: En boca su entrada es voluminosa, con buen desarrollo, cuerpo intenso y sedoso, donde se destacan la suavidad de los taninos y su redondez.', 'precio' => 15.25, 'iva' => 0.21 ),
            array('codigo' =>'04','cat' => 'Vino Tinto','nombre' => 'Encuentro 7 Vineyards',  'desc' => 'El savoir faire y lealtad al clasicismo francés en la elaboración artesanal de cada uno de los varietales, bivarietales, espumantes y dulce le han dado a esta marca un lugar de preferencia entre los consumidores que aprecian la complejidad aromática de un estilo aristocrático.', 'precio' => 85.63, 'iva' => 0.21 ),
            array('codigo' =>'05','cat' => 'Vino Tinto','nombre' => 'Encuentro Cabernet',  'desc' => 'El savoir faire y lealtad al clasicismo francés en la elaboración artesanal de cada uno de los varietales, bivarietales, espumantes y dulce le han dado a esta marca un lugar de preferencia entre los consumidores que aprecian la complejidad aromática de un estilo aristocrático.', 'precio' => 523.20, 'iva' => 0.21 ),

            array('codigo' =>'06','cat' => 'Vino Blanco','nombre' => 'Las Perdices Sauvignon Blanc',  'desc' => 'La cosecha se llevó a cabo manualmente durante el mes de febrero, en cajas de 17 kilogramos. Obtención del jugo por prensado neumático. Enfriado del mosto a 4 °C, decantación de borras, trasiego y posterior siembra de levaduras seleccionadas. Fermentación alcohólica controlada entre 14°C y 16°C, durante 20 días.', 'precio' => 82.00, 'iva' => 0.21 ),
            array('codigo' =>'07','cat' => 'Vino Blanco','nombre' => 'Las Perdices Albariño',  'desc' => 'Está elaborado con uvas provenientes de viñedos propios ubicados en Agrelo, Luján de Cuyo, Mendoza. Es un vino de color amarillo pálido con reflejos verdosos y dorados. La complejidad de este vino fluctúa entre las notas frutales de damasco, manzana y cítricos; florales: flores blancas y jazmín suave; y herbáceas: hierba fresca, hinojo. Un vino untuoso en boca, voluminoso, de sensación aterciopelada aunque fresca y con amplitud de matices. Ideal para acompañar todo tipo de pescados y mariscos en sus diferentes presentaciones.', 'precio' => 125.25, 'iva' => 0.21 ),
            array('codigo' =>'08','cat' => 'Vino Blanco','nombre' => 'Salentein Single Vineyard Chardonnay',  'desc' => 'Se destaca por la intensidad y complejidad de sus aromas, el carácter mineral y untuosidad en boca y por la excelente acidez natural que lo hacen un vino único como el terruño que le dio origen.', 'precio' => 420.12, 'iva' => 0.21 ),
            array('codigo' =>'09','cat' => 'Vino Blanco','nombre' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc',  'desc' => 'A la vista, presenta un color dorado, límpido y brillante. En nariz, despliega complejos aromas que recuerdan a durazno, membrillo y cáscara de mandarina con sutiles notas de anís y or de lima. En boca es un vino amplio y untuoso con notas de damasco, manzana, miel y vainilla, otorgadas por su añejamiento en barricas de roble francés. Presenta un equilibrio perfecto entre dulzura y acidez, así como también un prolongado y elegante final.', 'precio' => 140, 'iva' => 0.21 ),
            array('codigo' =>'10','cat' => 'Vino Blanco','nombre' => 'Nieto Senetiner Reserva Semillon D.O.C.',  'desc' => 'Vino de aspecto limpio y cristalino, color amarillo medio con matices dorados, en nariz es llamativamente aromático, sus notas recuerdan a frutas con carozo como el durazno y damasco, miel y banana, prolijamente combinados con aromas avainillados y de otras especias dulces, debido a su paso por roble.', 'precio' => 15.25, 'iva' => 0.21 ),


            array('codigo' =>'11','cat' => 'Rubia','nombre' => 'Patagonia Weisse',  'desc' => 'Los encantos de las Witbier\'s o Weisse bier son fáciles de entender. La cerveza es atractiva, dorada pálida opalescente, cubierta de una blanca y cremosa espuma formada por las proteínas del trigo y su elevada carbonatación.
    El aroma es brillante, cítrico, ligeramente especiado, con notas de naranja y manzana. Se puede distinguir el clavo de olor. El aroma y sabor es como una brisa fresca de verano en un día tranquilo.
    En el paladar, el cohibido amargor da lugar a un cuerpo muy ligero. La combinación de la naranja, con una fina y seca acidez, acompaña al liso cuerpo proporcionado por el trigo. La cerveza termina con un borde tartárico, suave y definido.', 'precio' => 40.25, 'iva' => 0.21 ),
            array('codigo' =>'12','cat' => 'Rubia','nombre' => 'Grolsch 330cc',  'desc' => 'Grolsch debe su alta calidad a la más fina selección de ingredientes naturales, al tradicional proceso de baja fermentación y a la combinación de dos tipos de Lúpulo. Grolsch Premium Lager se degusta mejor a una temperatura de 6-8 °C.', 'precio' => 22, 'iva' => 0.21 ),
            array('codigo' =>'13','cat' => 'Rubia','nombre' => 'Amstel',  'desc' => '', 'precio' => 250.50, 'iva' => 0.21 ),
            array('codigo' =>'15','cat' => 'Negra','nombre' => 'Negra Modelo',  'desc' => '', 'precio' => 35.12, 'iva' => 0.21 ),

          

        );

        foreach ($prods as $prodArr) {
            $prod = new Producto();


            $prod->setCodigo($prodArr['codigo']);

            $prod->setNombre($prodArr['nombre']);
//            $prod->setCategoria($this->getReference($prodArr['cat']));
            $prod->setCategoria($manager->getRepository("AppBundle:Categoria")->findOneByNombre($prodArr['cat']));

            $prod->setDescripcion($prodArr['desc']);
            $prod->setPrecio($prodArr['precio']);
            $prod->setIva($prodArr['iva']);
            $prod->setActivo(1);
            $prod->setCreatedAt(new \DateTime('now'));
            $prod->setUpdatedAt(new \DateTime('now'));
            $manager->persist($prod);
            $manager->flush();

            if(!$this->hasReference('prod-'.$prodArr['codigo'] )){
                $this->addReference('prod-'.$prodArr['codigo'], $prod);
            }

        }

    }
}
