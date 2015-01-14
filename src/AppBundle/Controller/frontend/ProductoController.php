<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 17/12/2014
 * Time: 22:13
 */

namespace AppBundle\Controller\frontend;


use AppBundle\Entity\Categoria;
use AppBundle\Entity\Producto;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class ProductoController
 * @package AppBundle\Controller\frontend
 */
class ProductoController extends  Controller {


    /**
    * @Route("/productos/{id}/vista/{vista}/orden/{orden}/ver/{ver}",
     *  requirements={"id" = "\d+"},
     *  defaults={"vista" = "lista", "orden" = "0", "ver" = 3},
     *  name="productos",
     *  options={"expose"=true} )
    * @ParamConverter("categoria", class="AppBundle:Categoria")
    */
    public function getProductosAction(Request $request, Categoria $categoria, $vista, $orden, $ver){


        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $node = $categoria;
        while ($node) {
            $breadcrumbs->prependItem($node->getNombre(), $this->generateUrl("productos",array('id' => $node->getId())) );
            $node = $node->getParent();
        }
        $breadcrumbs->prependItem("Inicio", $this->get("router")->generate("homepage"));

        $toFilter = $request->get('filtro') ;

        /**
         * @var Doctrine/EntityManager
         */
        $em = $this->getDoctrine()->getManager();

        $hijos = $em->getRepository("AppBundle:Categoria")->getDescendientes($categoria);

        $queryBuilder = $this->filter($request, $hijos, $orden,$toFilter);
        $pager = $this->getPager($queryBuilder, $ver);


        if($request->isXmlHttpRequest()){
            $template = "@App/frontend/Producto/productosAjax.html.twig";
        }else{
            $template = "@App/frontend/Producto/getProductos.html.twig";
        }

        return $this->render($template,array(
                "cat" => $categoria,
                'pager' => $pager,
                'setting' => $this->get("setting.service")->getSetting(),
                'vista' => $vista,
                'filtro' => $toFilter
            ));
    }

    /**
     * Crea el paginador Pagerfanta
     * @param Request $request
     * @return SlidingPagination
     * @throws NotFoundHttpException
     */
    private function getPager($q,$ver)
    {
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $q,
            $this->get('request')->query->get('page', 1)/*page number*/,
            $ver,
            array(
                'distinct' => false,
                'pagination' => 'twitter_bootstrap_v3_pagination.html.twig'

            )
        );
        $pagination->setTemplate('KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig');

        return $pagination;

    }

    private function filter(Request $request, $hijos, $orden, $tofilter)
    {
        $session = $request->getSession();
        //$filterForm = $this->createForm(new CategoriaFilterType());
        /**
         * @var Doctrine/EntityManager
         */
        $em = $this->getDoctrine()->getManager();

        $queryBuilder = $em->getRepository('AppBundle:Producto')->createQueryBuilder("q")
            ->where('q.categoria IN( :ids ) ' )
            ->setParameter('ids' , $hijos)
        ;
        if($orden == 1){
            $queryBuilder->orderBy('q.nombre', 'ASC');
        }elseif($orden == 2){
            $queryBuilder->orderBy('q.nombre', 'DESC');
        }else{
            $queryBuilder->orderBy('q.id', 'ASC');
        }

        if(count($tofilter)>0) {
            $tofilter = $this->prepareFilter($tofilter);
            foreach ($tofilter as $key => $filter) {

                if ($key == 'precio' ) {
                    $precio = $filter;
                    $porc = $this->get("setting.service")->getSetting()->getDescuentoGlobal();
                    $coef = 1 +  $porc/100;
                    if ($precio >= 0 && $precio <= 10) {
                        $queryBuilder
                            ->andWhere("q.precio   between :p1 and :p2  ")
                            ->setParameter('p1', 100 * $precio * $coef)
                            ->setParameter('p2', (100 * $precio + 99.99) * $coef);
                    }
                }else{
                    $subquery = $this->createSubQuery( substr($key,2) );
                    $queryBuilder
                        ->andWhere($queryBuilder->expr()->exists($subquery->getDql()))
                        ->setParameter('clave'.substr($key,2), $filter[0])
                        ->setParameter('valores'.substr($key,2), $filter[1]);
                }
            }
        }

        return  $queryBuilder;
    }

    private function createSubQuery($key){
        $em = $this->getDoctrine()->getManager();
        $subquery = $em->createQuery("
                      SELECT 1 FROM AppBundle:ProductoExtension e$key JOIN e$key.metadatoProducto m$key
                      where m$key.nombre = :clave$key AND
                            e$key.valor in(:valores$key ) AND
                            e$key.producto = q.id");
        return $subquery;
    }

    private function prepareFilter($filter)
    {
        $f = array();

        foreach($filter as $key => $valores){
            if($key == 'precio')
                $f[$key] = $valores;
            elseif(substr($key,0,1)=='g')
                $name = $valores;
            else
               $f['m_'.substr($key,2)] = array($name, $valores);
        }

        return $f;
    }

    /**
     * @Route("/productofull/{id}",
     *  requirements={"id" = "\d+"},
     *  name="productofull",
     *  options={"expose"=true} )
     * @ParamConverter("producto", class="AppBundle:Producto")
     */
    public function productofullAction(Producto $producto){

        $breadcrumbs = $this->get("white_october_breadcrumbs");

        $node = $producto->getCategoria();
        while ($node) {
            $breadcrumbs->prependItem($node->getNombre(), $this->generateUrl("productos",array('id' => $node->getId())) );
            $node = $node->getParent();
        }
        $breadcrumbs->prependItem("Inicio", $this->get("router")->generate("homepage"));
        $breadcrumbs->addItem($producto->getNombre());

        return $this->render("@App/frontend/Producto/producto_full.html.twig",
            array(
                "producto" => $producto,
                'setting' => $this->get("setting.service")->getSetting(),
            ));
    }

} 