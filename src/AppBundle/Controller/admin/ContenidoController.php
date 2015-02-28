<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\ContenidoDetalle;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Component\Pager\Paginator;

use AppBundle\Entity\Contenido;
use AppBundle\Form\ContenidoType;
use AppBundle\Form\ContenidoFilterType;




/**
 * Contenido controller.
 *
 * @Route("/contenido")
 */
class ContenidoController extends Controller
{

    /**
     * Lists all Contenido entities.
     *
     * @Route("/", name="contenido")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
    list($filterForm, $queryBuilder) = $this->filter($request);
    $pager = $this->getPager($queryBuilder);

        return array(
            'pager'         => $pager,
            'filterform'    => $filterForm->createView(),
        );
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
        $filterForm = $this->createForm(new ContenidoFilterType());

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('AppBundle:Contenido')->createQueryBuilder("q");

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ContenidoControllerFilter');
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
                $session->set('ContenidoControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ContenidoControllerFilter')) {
                $filterData = $session->get('ContenidoControllerFilter');
                $filterForm = $this->createForm(new ContenidoFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
           }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Contenido entity.
     *
     * @Route("/new", name="contenido_create")
     * @Method("POST")
     * @Template("AppBundle:Admin\Contenido:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Contenido();
        $form = $this->createCreateForm($entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success',"El Contenido se creó correctamente.");
            if ($request->request->get('save_mode')== 'save_and_close') {
                    return $this->redirect($this->generateUrl('contenido'));
                }
                return $this->redirect($this->generateUrl('contenido_new'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Contenido entity.
    *
    * @param Contenido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contenido $entity)
    {
        $form = $this->createForm(new ContenidoType(), $entity, array(
            'action' => $this->generateUrl('contenido_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Contenido entity.
     *
     * @Route("/new/{tipo}", name="contenido_new", defaults={"tipo" = "carrusel"})
     * @Method("GET")
     * @ Template()
     */
    public function newAction($tipo)
    {
//        $newd = new ContenidoDetalle();

        $entity = new Contenido();
//        $entity->addContenidoDetalle($newd);
//        $arr = new ArrayCollection();
//        $arr->add($newd);
//        $entity->setContenidoDetalle($arr);

        $form   = $this->createCreateForm($entity);

        return $this->render(
            "@App/admin/Contenido/new.html.twig",
            array(
                'entity' => $entity,
                'form'   => $form->createView(),
            ));
    }

    /**
     * Finds and displays a Contenido entity.
     *
     * @Route("/{id}", name="contenido_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Contenido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Contenido entity.
     *
     * @Route("/{id}/edit", name="contenido_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Contenido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenido entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Contenido entity.
    *
    * @param Contenido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contenido $entity)
    {
        $form = $this->createForm(new ContenidoType(), $entity, array(
            'action' => $this->generateUrl('contenido_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        
        return $form;
    }
    /**
     * Edits an existing Contenido entity.
     *
     * @Route("/{id}/edit", name="contenido_update")
     * @Method("PUT")
     * @Template("AppBundle:Admin/Contenido:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Contenido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('success',"El Contenido $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('contenido'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Contenido entity.
     *
     * @Route("/{id}", name="contenido_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Contenido')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contenido entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contenido'));
    }

    /**
     * Creates a form to delete a Contenido entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contenido_delete', array('id' => $id)))
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

}
