<?php
/**
 * Created by PhpStorm.
 * User: cacho
 * Date: 24/05/14
 * Time: 22:21
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\ProductoExtension;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class ProductoExtensions extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
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
        $exts = array(
            //Tinto
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Varietal',           'valor' => 'Bonarda'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Bodega',             'valor' => 'Colome'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Cata',               'valor' => 'Vista: Intenso rubí con matiz violeta. Aroma: Fruta negra y roja, especiado, mentolado y carnoso. Concentrado y complejo. Sabor: Concentrado y con buen volumen. De gran cuerpo y taninos redondos. Se destaca las frutas negras, especias y mentol.'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Maridaje',           'valor' => 'Ideal para acompañar platos de carnes rojas, pastas con salsas intensas, empanadas y picadas.'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Porcentaje Alcohol', 'valor' => '14,6%'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Bonarda Lote Especial', 'nombre' => 'Ciudad Origen',      'valor' => 'Salta'),

            array('producto' => 'Ciclos Tardio', 'nombre' => 'Varietal',           'valor' => 'Malbec'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Bodega',             'valor' => 'El Esteco'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Cata',               'valor' => 'Vista: Rojo con tonos violáceos, fondo negro profundo, con leves tonalidades tejas y pardas. Aroma: Complejos aromas de frutas confitadas, cándidos, mermelada de ciruelas, nueces, vainilla y roble. Sabor: Taninos dulces y suaves. Con buen balance entre su acidez y final dulce. Cáscaras de naranja confitadas, cacao, licoroso.'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Porcentaje Alcohol', 'valor' => '13,35'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Volumen',            'valor' => '500 cc'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Ciclos Tardio', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Emma Zuccardi', 'nombre' => 'Varietal',           'valor' => 'Bonarda'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Bodega',             'valor' => 'Familia Zuccardi'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Cata',               'valor' => 'Vista: Color profundo y matices purpuras violáceos. Aroma: Aromas típicos de frutas rojas y negras maduras -como frutillas, frambuesas, moras y cerezas negras. Sabor: En boca su entrada es voluminosa, con buen desarrollo, cuerpo intenso y sedoso, donde se destacan la suavidad de los taninos y su redondez.'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Porcentaje Alcohol', 'valor' => '14.00'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Emma Zuccardi', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Varietal',           'valor' => 'Malbec Merlot Cabernet Sauvignon Cabernet Franc'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Bodega',             'valor' => 'Rutini'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Cata',               'valor' => 'Vista: Rojo granate muy intenso y profundo. Aroma: La nariz descubre una gama híper expresiva y compleja de aromas. Hay acentos de fruta roja (cerezas, guindas) bien madura, junto a notas que recuerdan a violetas (Malbec) y flores de lavanda, y a los vahos mentolados del Petit Verdot donde también sobresale algún dejo especiado de raíz de regaliz y tomillo. Sabor: Voluptuoso y de impactante carácter, este tinto extraordinario sorprende por su desarrollo y estructura, en que relucen redondez, equilibrio, acidez perfecta y taninos bien integrados. El final de boca muestra un rastro sutil y aterciopelado que se disfruta largamente.'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Maridaje',           'valor' => 'Carnes rojas horneadas, piezas de caza (jabalí, ciervo), cordero asado, platos de cacerola muy condimentados, aves de corral y silvestres en salsa de vino, goulash con arroz o gnocchi, llama, ñandú.'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Porcentaje Alcohol', 'valor' => '14.00'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Encuentro 7 Vineyards', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Varietal',           'valor' => 'Cabernet Sauvignon'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Bodega',             'valor' => 'Rutini'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Cata',               'valor' => 'Vista: Rojo rubí medio, con matiz violáceo. Aroma: La nariz descubre una tenue fragancia frutal, amena y matizada con vahos de especias y ahumados. Sabor: En el paladar, este vino derrama sus distintos tonos de sabor, en los que prevalece una carga de taninos que tapizan largamente la boca y aseguran un retrogusto firme y fresco.'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Maridaje',           'valor' => 'Carnes vacunas grilladas, carne al horno, guisos de ave y legumbres, platos con verduras y cereales condimentados, cocina criolla, cordero asado, cochinillo, quesos duros de vaca afinados (Sardo).'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Porcentaje Alcohol', 'valor' => '14.00'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Encuentro Cabernet', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            //Blanco
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Varietal',           'valor' => 'Sauvignon Blanc'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Bodega',             'valor' => 'Las Perdices'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Cata',               'valor' => 'A la vista presenta un color amarillo verdoso muy sutil. En nariz ofrece intensos aromas de frutos de la pasión, mango y pomelo rosado, los cuales se combinan con delicadas notas minerales. En boca se percibe una acidez bien balanceada. Sobresalen las notas de frutos tropicales. De final prolongado.'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Porcentaje Alcohol', 'valor' => '13.5'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Las Perdices Sauvignon Blanc', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Varietal',           'valor' => 'Albariño'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Bodega',             'valor' => 'Las Perdices'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Cata',               'valor' => 'Vista: Color amarillo pálido con reflejos verdosos. Nariz: Complejo, notas florales, frutales y herbáceas. Frutas blancas y cítricas, flores blancas como jazmines, hierba fresca e hinojo. Boca: En boca, fresco, frutado y floral. Persistencia media.'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Maridaje',           'valor' => 'Pescados y Mariscos'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Porcentaje Alcohol', 'valor' => '12.5'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Las Perdices Albariño', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Varietal',           'valor' => 'Chardonnay'),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Bodega',             'valor' => 'Salentein'),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Cata',               'valor' => ''),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Porcentaje Alcohol', 'valor' => '13.5'),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Volumen',            'valor' => '750 cc'),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Salentein Single Vineyard Chardonnay', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Varietal',           'valor' => 'Sauvignon Blanc'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Bodega',             'valor' => 'Salentein'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Cata',               'valor' => 'A la vista, presenta un color dorado, límpido y brillante. En nariz, despliega complejos aromas que recuerdan a durazno, membrillo y cáscara de mandarina con sutiles notas de anís y flor de lima. En boca es un vino amplio y untuoso con notas de damasco, manzana, miel y vainilla, otorgadas por su añejamiento en barricas de roble francés. Presenta un equilibrio perfecto entre dulzura y acidez, así como también un prolongado y elegante final.'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Porcentaje Alcohol', 'valor' => '12.7'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Volumen',            'valor' => '500 cc'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Salentein Single Vineyard Late Harvest Sauvignon Blanc', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Varietal',           'valor' => ''),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Bodega',             'valor' => 'Nieto Senetiner'),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Cata',               'valor' => 'Ideal para acompañar cócteles de frutos de mar y otros mariscos. Quesos suaves y fondues de queso, pastas con salsas cremosas y a base de tomates. Carnes blancas, rissottos , y platos sutiles a base de conejo'),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Porcentaje Alcohol', 'valor' => ''),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Volumen',            'valor' => '750cc'),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Nieto Senetiner Reserva Semillon D.O.C.', 'nombre' => 'Ciudad Origen',      'valor' => 'Mendoza'),

            //Cerveza
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Bodega',             'valor' => ''),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Cata',               'valor' => ''),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Maridaje',           'valor' => 'Ensaladas frescas. Platos peruanos, mexicanos y Thai. Postres de masas secas y frutos cítricos. Sushi.'),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Porcentaje Alcohol', 'valor' => ''),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Volumen',            'valor' => '650cc'),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Patagonia Weisse', 'nombre' => 'Ciudad Origen',      'valor' => ''),

            array('producto' => 'Grolsch 330cc', 'nombre' => 'Bodega',             'valor' => 'Grolsch'),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Cata',               'valor' => 'Vista: Dorado bastante profundo con una cabeza blanca. Aroma: Hay presencia de lúpulo, notas vegetales picantes y un toque de pan tostado. Sabor: En el paladar hay un bonito juego entre lúpulo amargo y una cierta dulzura en el acabado, hay un buen apoyo a la nota de malta que añade peso.'),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Porcentaje Alcohol', 'valor' => '5%'),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Volumen',            'valor' => '330cc'),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Pais de Origen',     'valor' => 'Holanda'),
            array('producto' => 'Grolsch 330cc', 'nombre' => 'Ciudad Origen',      'valor' => ''),

            array('producto' => 'Amstel', 'nombre' => 'Bodega',             'valor' => ''),
            array('producto' => 'Amstel', 'nombre' => 'Cata',               'valor' => 'Vista: Dorado intenso. Sabor: Fácil de tomar, y con un rico tinte a lúpulo que le otorga un sabor refrescante y balanceado con carácter.'),
            array('producto' => 'Amstel', 'nombre' => 'Maridaje',           'valor' => 'Ideal para acompañar pescados, mariscos, sushi, carnes blancas y quesos.'),
            array('producto' => 'Amstel', 'nombre' => 'Porcentaje Alcohol', 'valor' => '5%'),
            array('producto' => 'Amstel', 'nombre' => 'Volumen',            'valor' => '330cc'),
            array('producto' => 'Amstel', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Amstel', 'nombre' => 'Ciudad Origen',      'valor' => 'Santa Fe'),

            array('producto' => 'Amstel', 'nombre' => 'Bodega',             'valor' => ''),
            array('producto' => 'Amstel', 'nombre' => 'Cata',               'valor' => 'Vista: Dorado intenso. Sabor: Fácil de tomar, y con un rico tinte a lúpulo que le otorga un sabor refrescante y balanceado con carácter.'),
            array('producto' => 'Amstel', 'nombre' => 'Maridaje',           'valor' => 'Ideal para acompañar pescados, mariscos, sushi, carnes blancas y quesos.'),
            array('producto' => 'Amstel', 'nombre' => 'Porcentaje Alcohol', 'valor' => '5%'),
            array('producto' => 'Amstel', 'nombre' => 'Volumen',            'valor' => '330cc'),
            array('producto' => 'Amstel', 'nombre' => 'Pais de Origen',     'valor' => 'Argentina'),
            array('producto' => 'Amstel', 'nombre' => 'Ciudad Origen',      'valor' => 'Santa Fe'),

            array('producto' => 'Negra Modelo', 'nombre' => 'Bodega',             'valor' => 'Negra Modelo'),
            array('producto' => 'Negra Modelo', 'nombre' => 'Cata',               'valor' => 'Vista: Ambar profundo, que se engalana con una abundante, blanca y compacta espuma Aroma: Malta oscura, caramelo y lúpulo. Sabor: Es la cerveza ideal para ocasiones especiales por su sabor único y equilibrado.'),
            array('producto' => 'Negra Modelo', 'nombre' => 'Maridaje',           'valor' => ''),
            array('producto' => 'Negra Modelo', 'nombre' => 'Porcentaje Alcohol', 'valor' => '5%'),
            array('producto' => 'Negra Modelo', 'nombre' => 'Volumen',            'valor' => '330cc'),
            array('producto' => 'Negra Modelo', 'nombre' => 'Pais de Origen',     'valor' => 'México'),
            array('producto' => 'Negra Modelo', 'nombre' => 'Ciudad Origen',      'valor' => ''),


        );

        foreach ($exts as $aExt) {
            $ext = new ProductoExtension();

            $ext->setProducto($manager->getRepository('AppBundle:Producto')->findOneByNombre($aExt['producto']));
            $ext->getMetadatoProducto($manager->getRepository('AppBundle:MetadatoProducto')->findOneByNombre($aExt['nombre']));

            $ext->setValor($aExt['valor']);

            $manager->persist($ext);
            $manager->flush();
        }






    }
}
