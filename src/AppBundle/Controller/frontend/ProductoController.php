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
    * @Route("/productos/{id}/vista/{vista}",
     *  requirements={"id" = "\d+"},
     *  defaults={"vista" = "lista"},
     *  name="productos",
     *  options={"expose"=true} )
    * @ParamConverter("categoria", class="AppBundle:Categoria")
    */
    public function getProductosAction(Request $request, Categoria $categoria, $vista){

        /**
         * @var Doctrine/EntityManager
         */
        $em = $this->getDoctrine()->getManager();
        $hijos = $em->getRepository("AppBundle:Categoria")->getDescendientes($categoria);
        $queryBuilder = $this->filter($request, $hijos);
        $pager = $this->getPager($queryBuilder,$vista);


        if($request->isXmlHttpRequest()){
            return $this->render("@App/frontend/Producto/productosAjax.html.twig",array(
                    "cat" => $categoria,
                    'pager' => $pager,
                    'setting' => $this->get("setting.service")->getSetting(),
                    'vista' => $vista
                ));
        }else{
            return $this->render("@App/frontend/Producto/getProductos.html.twig",array(
                "cat" => $categoria,
                'pager' => $pager,
                'setting' => $this->get("setting.service")->getSetting(),
                'vista' => $vista
            ));
        }
    }

    /**
     * Crea el paginador Pagerfanta
     * @param Request $request
     * @return SlidingPagination
     * @throws NotFoundHttpException
     */
    private function getPager($q,$vista)
    {
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $q,
            $this->get('request')->query->get('page', 1)/*page number*/,
            ($vista == 'lista' ? 4 : 6),
            array(
                'distinct' => false,
                'pagination' => 'twitter_bootstrap_v3_pagination.html.twig'

            )
        );
        $pagination->setTemplate('KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig');

        return $pagination;

    }

    private function filter(Request $request, $hijos)
    {
        $session = $request->getSession();
        //$filterForm = $this->createForm(new CategoriaFilterType());

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('AppBundle:Producto')->createQueryBuilder("q")
            ->where('q.categoria IN( :ids ) ' )
            ->orderBy('q.nombre', 'ASC')
            ->setParameter('ids' , $hijos)
        ;

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