<?php

namespace AppBundle\Controller\admin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Component\Pager\Paginator;

use AppBundle\Entity\Proveedor;
use AppBundle\Form\ProveedorType;
use AppBundle\Form\ProveedorFilterType;

/**
 * Proveedor controller.
 *
 * @Route("/proveedor")
 */
class ProveedorController extends Controller
{

    /**
     * Lists all Proveedor entities.
     *
     * @Route("/", name="proveedor")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
    list($filterForm, $queryBuilder) = $this->filter($request);
    $pager = $this->getPager($queryBuilder);

        return $this->render('AppBundle:admin/Proveedor:index.html.twig', array(
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
        $paginator  = $this->get('knp_paginator');

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
        $filterForm = $this->createForm(new ProveedorFilterType());

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('AppBundle:Proveedor')->createQueryBuilder("q");

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ProveedorControllerFilter');
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
                $session->set('ProveedorControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ProveedorControllerFilter')) {
                $filterData = $session->get('ProveedorControllerFilter');
                $filterForm = $this->createForm(new ProveedorFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
           }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Proveedor entity.
     *
     * @Route("/new", name="proveedor_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $entity = new Proveedor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
//        ld($entity);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success',"El Proveedor $entity se creó correctamente.");
            if ($request->request->get('save_mode')== 'save_and_close') {
                    return $this->redirect($this->generateUrl('proveedor'));
                }
                return $this->redirect($this->generateUrl('proveedor_new'));
        }
        return $this->render('AppBundle:admin/Proveedor:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));

    }

    /**
    * Creates a form to create a Proveedor entity.
    *
    * @param Proveedor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Proveedor $entity)
    {
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action' => $this->generateUrl('proveedor_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Proveedor entity.
     *
     * @Route("/new", name="proveedor_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Proveedor();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:admin/Proveedor:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));

    }

    /**
     * Finds and displays a Proveedor entity.
     *
     * @Route("/{id}", name="proveedor_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Proveedor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Proveedor entity.
     *
     * @Route("/{id}/edit", name="proveedor_edit")
     * @Method("GET")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Proveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Proveedor entity.
    *
    * @param Proveedor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Proveedor $entity)
    {
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action' => $this->generateUrl('proveedor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        
        return $form;
    }
    /**
     * Edits an existing Proveedor entity.
     *
     * @Route("/{id}/edit", name="proveedor_update")
     * @Method("PUT")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Proveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('success',"El Proveedor $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('proveedor'));
        }

        return $this->render('AppBundle:admin/Proveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Proveedor entity.
     *
     * @Route("/{id}", name="proveedor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Proveedor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Proveedor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('proveedor'));
    }

    /**
     * Creates a form to delete a Proveedor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('proveedor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Delete',
                'attr'  => array(
                        'class' => 'btn btn-danger btn-sm'
                )
            ))
            ->getForm()
        ;
    }

    /**
     * @Route("/api/provincia", name="select_provincias")
     */
    public function provinciasAction(Request $request)
    {
        $provincia_id = $request->request->get('provincia_id');
        $em = $this->getDoctrine()->getManager();
        $localidades = $em->getRepository('UtilidadBundle:Localidad')->findByProvinciaId($provincia_id);
        return new JsonResponse($localidades);
    }
    /**
     * @Route("/api/pais", name="select_pais")
     */
    public function paisAction(Request $request)
    {
        $pais_id = $request->request->get('pais_id');
        $em = $this->getDoctrine()->getManager();
        $provincias = $em->getRepository('UtilidadBundle:Provincia')->findByPaisId($pais_id);
        return new JsonResponse($provincias);
    }

}
