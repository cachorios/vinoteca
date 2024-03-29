<?php

namespace AppBundle\Controller\admin;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Component\Pager\Paginator;

use AppBundle\Entity\Categoria;
use AppBundle\Form\CategoriaType;
use AppBundle\Form\CategoriaFilterType;

/**
 * Categoria controller.
 *
 * @Route("/categoria")
 */
class CategoriaController extends Controller
{

    /**
     * Lists all Categoria entities.
     *
     * @Route("/", name="categoria")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {

        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder, $request);

        return $this->render('AppBundle:admin/Categoria:index.html.twig',array(
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
    private function getPager($q, Request $request)
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
        $filterForm = $this->createForm(CategoriaFilterType::class);

        $queryBuilder = $this->get('categoria.manager')->getList();

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('CategoriaControllerFilter');
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
                $session->set('CategoriaControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CategoriaControllerFilter')) {
                $filterData = $session->get('CategoriaControllerFilter');
                $filterForm = $this->createForm( CategoriaFilterType::class, $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Categoria entity.
     *
     * @Route("/new", name="categoria_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $entity = new Categoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);

            $em->flush();
            $entity->upload("uploads/categorias/");
            $this->get('session')->getFlashBag()->add('success', "La Categoria $entity se creó correctamente.");
            if ($request->request->get('save_mode') == 'save_and_close') {
                return $this->redirect($this->generateUrl('categoria'));
            }
            return $this->redirect($this->generateUrl('categoria_new'));
        }

        return $this->render('AppBundle:admin\Categoria:new.html.twig',array(
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
    private function createCreateForm(Categoria $entity)
    {
        $form = $this->createForm( CategoriaType::class, $entity, array(
            'action' => $this->generateUrl('categoria_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Categoria entity.
     *
     * @Route("/new", name="categoria_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Categoria();
        $form = $this->createCreateForm($entity);

       return $this->render('AppBundle:admin\Categoria:new.html.twig',array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Categoria entity.
     *
     * @Route("/{id}", name="categoria_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin\Categoria:show.html.twig',array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Categoria entity.
     *
     * @Route("/{id}/edit", name="categoria_edit")
     * @Method("GET")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin\Categoria:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Categoria entity.
     *
     * @param Categoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Categoria $entity)
    {
        $form = $this->createForm( CategoriaType::class, $entity, array(
            'action' => $this->generateUrl('categoria_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Edits an existing Categoria entity.
     *
     * @Route("/{id}/edit", name="categoria_update")
     * @Method({"POST","PUT"})
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $originalMetadatos = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($entity->getMetadatos() as $metadato) {
            $originalMetadatos->add($metadato);
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $entity->upload("uploads/categorias/");

            // remove the relationship between the tag and the Task
            foreach ($originalMetadatos as $metadato) {
                if (false === $entity->getMetadatos()->contains($metadato)) {
                    $em->remove($metadato);
                }
            }

            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "El Categoria $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('categoria'));
        }

        return $this->render('AppBundle:admin\Categoria:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Categoria entity.
     *
     * @Route("/{id}", name="categoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Categoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoria'));
    }

    /**
     * Creates a form to delete a Categoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array(
                'label' => 'Delete',
                'attr' => array(
                    'class' => 'btn btn-danger btn-sm'
                )
            ))
            ->getForm();
    }

}
