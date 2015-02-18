<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\Compra;
use AppBundle\Form\CompraType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Form\CompraFilterType;

/**
 * Categoria controller.
 *
 * @Route("/compra")
 */
class CompraController extends Controller
{
    /**
     * @Route("/", name="compra")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder);

        return $this->render('AppBundle:admin/Compra:index.html.twig',array(
            'pager' => $pager,
            'filterform' => $filterForm->createView(),
        ));
    }

    /**
     * Crea el paginador Pagerfanta
     * @param Request $request
     * @return SlidingPagination
     * @throws NotFoundHttpException
     */
    private function getPager($q)
    {
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
            $q,
            $this->get('request')->query->get('page', 1)/*page number*/,
            8,/*limit per page*/
            array('distinct' => false)
        );
        return $pagination;

    }

    private function filter(Request $request)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm(new CompraFilterType());

        $queryBuilder = $this->get('compra.manager')->getList();

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('CompraControllerFilter');
        }

        // Filter action
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'Aplicar') {
            // Bind values from the request
            //$filterForm->bind($request);
            $filterForm->handleRequest($request);

            if ($filterForm->isValid()) {
                // Build the query from the given form object
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
                // Save filter to session
                $filterData = $filterForm->getData();
                $session->set('CompraControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CompraControllerFilter')) {
                $filterData = $session->get('CompraControllerFilter');
                $filterForm = $this->createForm(new CategoriaFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Categoria entity.
     *
     * @Route("/new", name="compra_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $entity = new Compra();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "La compra $entity se creó correctamente.");
            if ($request->request->get('save_mode') == 'save_and_close') {
               return $this->redirect($this->generateUrl('compra'));
            }
            return $this->redirect($this->generateUrl('compra_new'));

        }

        return $this->render('AppBundle:admin\Compra:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Categoria entity.
     *
     * @param Categoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Compra $entity)
    {
        $form = $this->createForm(new CompraType(), $entity, array(
            'action' => $this->generateUrl('compra_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Compra entity.
     *
     * @Route("/new", name="compra_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Compra();
        $entity->setFechaCompra(new \DateTime('now', new \DateTimeZone('UTC')));

        $form = $this->createCreateForm($entity);

        return $this->render('AppBundle:admin\Compra:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a compra entity.
     *
     * @Route("/{id}", name="compra_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        return $this->render('AppBundle:admin\Compra:show.html.twig',array(
            'entity' => $entity,
        ));
    }


}
