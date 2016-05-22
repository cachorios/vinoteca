<?php

namespace AppBundle\Controller\frontend;

use AppBundle\Entity\Categoria;
use AppBundle\Entity\Contenido;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Config\ConfigCache;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        /**
         * @var \Doctrine\ORM\EntityManager $em
         */
        $em = $this->getDoctrine()->getEntityManager();

        $c = $em->getRepository("AppBundle:Contenido")->getContenido();

        $html = $this->makeContent($c);
        $this->get("menu.service")->makeMenu();
        return array("myContent" => $html);
    }

    private function makeContent($cs)
    {

        $html = "";

        foreach ($cs as $c) {

            switch ($c->getTipo()) {
                case 0:
                    $html .= $this->crearCarrusel($c);
                    break;
                case 1: //1 Imagen
                case 2: // 2 Imagen
                case 4: // 3 Imagen
                case 5: // 3 Imagen
                    $html .= $this->crearBanner($c);
                    break;
                case 6:
                    switch (strtolower($c->getNombre())) {

                        case "ultimos-productos":
                            $html .= $this->ultimosProductos();

                            break;
                    }
                    break;
                default:
                    $html .= "Tipo de contenido>6 no existe";
            }
        }

        return $html;


    }

    private function crearCarrusel($c)
    {

        $html = $this->renderView("@App/frontend/includes/carrusel.html.twig", array("contenido" => $c)) . "\n";
        return $html;
    }

    private function crearBanner(Contenido $c)
    {
        $html = $this->renderView("@App/frontend/includes/banner.html.twig", array("contenido" => $c)) . "\n";
        return $html;
    }

    /**
     * @Route("/getmenu", name="menu_frontend")
     */
    public function menufrontendAction()
    {
        $dir = $this->container->get('kernel')->getCacheDir();

        $file = $dir . DIRECTORY_SEPARATOR . 'RBSoft' . DIRECTORY_SEPARATOR . 'menu.html';


        if (!file_exists($dir)) {
            mkdir($dir);
        }


        $cache = new ConfigCache($file, false); // $this->container->get('kernel')->isDebug());


        if (!$cache->isFresh()) {
            $menu = $this->get("menu.service")->makeMenu();
            $cache->write($menu);
        } else {

            $menu = file_get_contents($cache->getPath());
        }


        return $this->render("AppBundle:frontend/Menu:menufrontend.html.twig", array(
                "menu" => $menu
            )
        );


    }


    private function ultimosProductos()
    {

        $em = $this->getDoctrine()->getManager();
        $prods = $em->getRepository("AppBundle:Producto")->getUltimos();
        $html = $this->renderView("@App/frontend/Default/ultimosProductos.html.twig", array("prods" => $prods));
//        ld("--->",$html);
        return $html;
    }

    /**
     * @Route("/ultimosproductos", name="ultimosproductos")
     *
     * @Template()
     */
    public function ultimosProductosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $prods = $em->getRepository("AppBundle:Producto")->getUltimos();

        return array("prods" => $prods);
    }

    /**
     * @Route("/slideproducto/{id}", name="slideproducto")
     * @ParamConverter("categoria", class="AppBundle:Categoria")
     * @return Response
     */
    public function filtroProducto(Categoria $categoria)
    {
        $dir = $this->container->get('kernel')->getCacheDir();
        $file = $dir . DIRECTORY_SEPARATOR . 'RBSoft' . DIRECTORY_SEPARATOR . 'filtroproducto_' . $categoria->getId() . '.html';

        if (!file_exists($dir)) {
            mkdir($dir);
        }

        $cache = new ConfigCache($file, false);

        if (!$cache->isFresh()) {
            /**
             * @var Doctrine/EntityManager
             */
            $em = $this->getDoctrine()->getEntityManager();
            $hijos = $em->getRepository("AppBundle:Categoria")->getDescendientes($categoria);

            $res = $em->createQuery("
                SELECT m.id,m.nombre,e.valor,count(e.valor) as cant
                FROM  AppBundle:ProductoExtension e
                  JOIN e.producto p
                  JOIN e.metadatoProducto m
                WHERE m.filtrable = TRUE and not e.valor = '' and p.categoria in(:cats)
                GROUP BY m.nombre,e.valor
                ORDER BY m.nombre ASC
            ")
                ->setParameter('cats', $hijos)
                ->getArrayResult();

            $slidebar = $this->renderView("AppBundle:frontend/Producto:slidebar_filtro.html.twig", array(
                "datos" => $this->arrToStrSlider($res)));
            $cache->write($slidebar);
        } else {
            $slidebar = file_get_contents((string)$cache);
        }

        return new Response($slidebar);

    }

    private function arrToStrSlider($dato)
    {
        $slider = array();
        $id = 'ninguno';
        $nombre = 'ninguno';
        foreach ($dato as $d) {
            if ($nombre != $d['nombre']) {
                $nombre = $d['nombre'];
                $id = $d['id'];
            }
            $slider[$d['nombre']][] = array('id' => $id, 'valor' => $d['valor'], 'cant' => $d['cant']);
        }
        return $slider;
    }


}
