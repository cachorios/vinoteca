<?php

namespace AppBundle\Controller\admin;

use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Categoria;
use AppBundle\Entity\Producto;
use AppBundle\Entity\ProductoImagen;
use AppBundle\Form\ExtencionType;
use AppBundle\Form\ProductoFilterType;
use AppBundle\Form\ProductoType;

/**
 * Producto controller.
 *
 * @Route("/producto")
 */
class ProductoController extends Controller
{

    /**
     * Lists all Producto entities.
     *
     * @Route("/", name="producto")
     * @Method({"GET","POST"})
     */
    public function indexAction(Request $request)
    {
        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder);

        return $this->render('AppBundle:admin/Producto:index.html.twig', array(
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

    private function filter(Request $request, $ajax = false)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm(new ProductoFilterType());

        $queryBuilder = $this->get('producto.manager')->getList();

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ProductoControllerFilter' . $ajax ? 'Ajax' : '');
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
                $session->set('ProductoControllerFilter' . $ajax ? 'Ajax' : '', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ProductoControllerFilter')) {
                $filterData = $session->get('ProductoControllerFilter' . $ajax ? 'Ajax' : '');
                $filterForm = $this->createForm(new ProductoFilterType(), $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }
        return array($filterForm, $queryBuilder);
    }

    /**
     * Creates a new Producto entity.
     *
     * @Route("/new", name="producto_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Producto();

        $temp = $request->request->get('appbundle_producto');
        $categoria_id = $temp['categoria'];
        $categoria = $em->getRepository('AppBundle:Categoria')->find($categoria_id);
        $entity->setCategoria($categoria);

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            foreach($entity->getImagenes() as $imagen){
                if(true == $imagen->getDelete()){
                    $entity->removeImagene($imagen);
                }
            }

            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "El Producto $entity se creó correctamente.");
            if ($request->request->get('save_mode') == 'save_and_close') {
                return $this->redirect($this->generateUrl('producto'));
            }
            return $this->redirect($this->generateUrl('producto_new'));
        }

        return $this->render('AppBundle:admin/Producto:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Producto entity.
     *
     * @param Producto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Producto $entity)
    {
        $form = $this->createForm(new ProductoType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('producto_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Producto entity.
     *
     * @Route("/new", name="producto_new")
     * @Method("GET")
     */
    public function newAction()
    {
        $entity = new Producto();
        $form = $this->createCreateForm($entity);

        return $this->render('AppBundle:admin/Producto:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Producto entity.
     *
     * @Route("/{id}", name="producto_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Producto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Producto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Producto:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Producto entity.
     *
     * @Route("/{id}/edit", name="producto_edit")
     * @Method("GET")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Producto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Producto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:admin/Producto:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Producto entity.
     *
     * @param Producto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Producto $entity)
    {
        $form = $this->createForm(new ProductoType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('producto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));


        return $form;
    }

    /**
     * Edits an existing Producto entity.
     *
     * @Route("/{id}/edit", name="producto_update")
     * @Method({"PUT","POST"})
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Producto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Producto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            foreach($entity->getImagenes() as $imagen){
                if(true == $imagen->getDelete()){
                    $entity->removeImagene($imagen);
                }
            }

            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "El Producto $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('producto'));
        }

        return $this->render('AppBundle:admin/Producto:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Producto entity.
     *
     * @Route("/{id}", name="producto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Producto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Producto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('producto'));
    }

    /**
     * Creates a form to delete a Producto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Delete',
                'attr' => array(
                    'class' => 'btn btn-danger btn-sm'
                )
            ))
            ->getForm();
    }

    /**
     * Displays a form to edit an existing Producto entity.
     *
     * @Route("/api/form", name="producto_extencion")
     * @Method("GET")
     */
    public function formExtencionAction(Request $request)
    {
        $id = $this->get('request')->query->get('categoria');

        $em = $this->container->get('doctrine.orm.entity_manager');
        $categoria = $em->getRepository('AppBundle:Categoria')->find($id);

        if (!$categoria) {
            $html = 'Categoria no encontrada';
        } else {
            $entity = new Producto();
            $entity->setCategoria($categoria);

            $form = $this->createForm(new ExtencionType($this->getDoctrine()->getManager()), $entity, array());
            $html = $this->renderView('AppBundle:admin/Producto/ajax:extencionForm.html.twig', array('form' => $form->createView()));
        }

        // create a simple Response with a 200 status code (the default)
        $response = new Response($html, Response::HTTP_OK);
        return $response;
    }

     /**
     * Lists all Producto entities.
     *
     * @Route("/api/list", name="producto_ajax_list")
     * @Method({"GET","POST"})
     */
    public function listAjaxAction(Request $request)
    {
        list($filterForm, $queryBuilder) = $this->filter($request, true);
        $pager = $this->getPager($queryBuilder);

        $html = $this->renderView('AppBundle:admin/Producto/ajax:list.html.twig', array(
            'pager' => $pager,
            'filterform' => $filterForm->createView(),
        ));

        // create a simple Response with a 200 status code (the default)
        $response = new Response($html, Response::HTTP_OK);
        return $response;
    }


    /**
     * @Route("/api/imagen/upload", name="producto_imagen_ajax")
     *
     */
    public function apiImagenUpdateAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {
            $data = $request->request->all();
            $file = $request->files->get('file');

            if (!isset($file)) {
                return new Response('Invalid file.', Response::HTTP_BAD_REQUEST);
            }
            $em = $this->getDoctrine()->getManager();

            $f = new ProductoImagen();
            $f->setFile($file);
            $em->persist($f);
            $em->flush();

            $imagenMin = $this->get('image.handling')->open($f->getWebPath())->resize(90, 160)->__toString();

            return new JsonResponse(array(
                'id' => $f->getId(),
                'URLmax' => $this->getAssetUrl($f->getWebPath()),
                'URLmin' => $imagenMin,
            ), Response::HTTP_OK);

        }

        return new Response('This is not ajax!', Response::HTTP_BAD_REQUEST);
    }

    public function getAssetUrl($path, $packageName = null)
    {
        return $this->container->get('templating.helper.assets')->getUrl($path, $packageName);
    }
}
