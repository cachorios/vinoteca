<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 17/12/2014
 * Time: 22:13
 */

namespace AppBundle\Controller\frontend;


use AppBundle\Entity\Categoria;
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

        /**
         * @var Doctrine/EntityManager
         */
        $em = $this->getDoctrine()->getManager();

        $hijos = $em->getRepository("AppBundle:Categoria")->getDescendientes($categoria);
        $queryBuilder = $this->filter($request, $hijos, $orden);
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
                'vista' => $vista
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

    private function filter(Request $request, $hijos, $orden)
    {
        $session = $request->getSession();
        //$filterForm = $this->createForm(new CategoriaFilterType());

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


        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ProductoEndControllerFilter');
        }

        // Filter action
        /*
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'Aplicar') {
            // Bind values from the request
          //  $filterForm->handleRequest($request);

            if ($filterForm->isValid()) {
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
                // Save filter to session
                $filterData = $filterForm->getData();
                $session->set('ProductoEndControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CategoriaControllerFilter')) {
                $filterData = $session->get('CategoriaControllerFilter');
                $filterForm = $this->createForm(new CategoriaFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        */
        return  $queryBuilder;
        //return array($filterForm, $queryBuilder);
    }


} 