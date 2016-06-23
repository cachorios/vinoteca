<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\Reposicion;
use AppBundle\Form\ReposicionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Form\ReposicionFilterType;

/**
 * Reposicion controller.
 *
 * @Route("/reposicion")
 */
class ReposicionController extends Controller
{
    /**
     * @Route("/", name="reposicion")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder, $request);

        return $this->render('AppBundle:admin/Reposicion:index.html.twig',array(
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
    private function getPager($q,  Request $request)
    {
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $q,
            $request->query->get('page', 1)/*page number*/,
            8,/*limit per page*/
            array('distinct' => false)
        );
        return $pagination;

    }

    private function filter(Request $request)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm(ReposicionFilterType::class);

        $queryBuilder = $this->get('reposicion.manager')->getList();

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ReposicionControllerFilter');
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
                $session->set('ReposicionControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ReposicionControllerFilter')) {
                $filterData = $session->get('ReposicionControllerFilter');
                $filterForm = $this->createForm(ReposicionFilterType::class, $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Categoria entity.
     *
     * @Route("/new", name="reposicion_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $entity = new Reposicion();
        $form = $this->createCreateForm($entity);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "La reposicion $entity se creó correctamente.");
            if ($request->request->get('save_mode') == 'save_and_close') {
               return $this->redirect($this->generateUrl('reposicion'));
            }
            return $this->redirect($this->generateUrl('reposicion_new'));

        }

        return $this->render('AppBundle:admin\Reposicion:new.html.twig',array(
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
    private function createCreateForm(Reposicion $entity)
    {
        $form = $this->createForm(ReposicionType::class, $entity, array(
            'action' => $this->generateUrl('reposicion_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Reposicion entity.
     *
     * @Route("/new", name="reposicion_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Reposicion();
        $entity->setFechaReposicion(new \DateTime('now', new \DateTimeZone('UTC')));

        $form = $this->createCreateForm($entity);

        return $this->render('AppBundle:admin\Reposicion:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reposicion entity.
     *
     * @Route("/{id}", name="reposicion_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Reposicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reposicion entity.');
        }

        return $this->render('AppBundle:admin\Reposicion:show.html.twig',array(
            'entity' => $entity,
        ));
    }


}
