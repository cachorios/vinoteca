<?php

namespace AppBundle\Controller\admin;

use AppBundle\Form\CuponFilterType;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use RBSoft\CartBundle\Entity\Cupon;
use AppBundle\Form\CuponType;

/**
 * Cupon controller.
 *
 * @Route("/cupon")
 */
class CuponController extends Controller
{

    /**
     * Lists all Producto entities.
     *
     * @Route("/", name="cupon")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {

        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder, $request);

        return $this->render('AppBundle:admin/Cupon:index.html.twig', array(
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

    private function filter(Request $request, $ajax = false)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm(CuponFilterType::class);

        $queryBuilder = $this->get('cupon.manager')->getList();

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('CuponControllerFilter' . $ajax ? 'Ajax' : '');
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
                $session->set('CuponControllerFilter' . $ajax ? 'Ajax' : '', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CuponControllerFilter')) {
                $filterData = $session->get('CuponControllerFilter' . $ajax ? 'Ajax' : '');
                $filterForm = $this->createForm(CuponFilterType::class, $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Producto entity.
     *
     * @Route("/new", name="cupon_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Cupon();

//        $temp = $request->request->get('appbundle_cupon');
//        $categoria_id = $temp['categoria'];
//        $categoria = $em->getRepository('AppBundle:Categoria')->find($categoria_id);
//        $entity->setCategoria($categoria);
//
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//
//            foreach($entity->getImagenes() as $imagen){
//                if(true == $imagen->getDelete()){
//                    $entity->removeImagene($imagen);
//                }
//            }
//
//            $em->persist($entity);
//            $em->flush();
//
//            $this->get('session')->getFlashBag()->add('success', "El Cupon $entity se creó correctamente.");
//            if ($request->request->get('save_mode') == 'save_and_close') {
//                return $this->redirect($this->generateUrl('cupon'));
//            }
//            return $this->redirect($this->generateUrl('cupon_new'));
//        }

        return $this->render('AppBundle:admin/Cupon:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Cupon entity.
     *
     * @param Cupon $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cupon $entity)
    {
        $form = $this->createForm(CuponType::class, $entity, array(
            'action' => $this->generateUrl('cupon_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Cupon entity.
     *
     * @Route("/new", name="cupon_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Cupon();
        $form = $this->createCreateForm($entity);
        
        return $this->render('AppBundle:admin/Cupon:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cupon entity.
     *
     * @Route("/{id}", name="cupon_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RBSoftCartBundle:Cupon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cupon entity.');
        }


        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Cupon:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cupon entity.
     *
     * @Route("/{id}/edit", name="cupon_edit")
     * @Method("GET")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RBSoftCartBundle:Cupon')->find($id);


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cupon entity.');
        }


        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Cupon:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Cupon entity.
     *
     * @param Cupon $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Cupon $entity)
    {
        $form = $this->createForm(CuponType::class, $entity, array(
            'action' => $this->generateUrl('cupon_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Edits an existing Cupon entity.
     *
     * @Route("/{id}/edit", name="cupon_update")
     * @Method({"POST","PUT"})
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RBSoftCartBundle:Cupon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cupon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "El Cupon $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('cupon'));
        }

        return $this->render('AppBundle:admin/Cupon:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cupon entity.
     *
     * @Route("/{id}", name="cupon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RBSoftCartBundle:Cupon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cupon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cupon'));
    }

    /**
     * Creates a form to delete a Cupon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cupon_delete', array('id' => $id)))
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
