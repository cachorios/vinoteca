<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\Categoria;
use AppBundle\Entity\ProductoImagen;
use AppBundle\Form\ExtencionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
use Knp\Component\Pager\Paginator;

use AppBundle\Entity\Producto;
use AppBundle\Form\ProductoType;
use AppBundle\Form\ProductoFilterType;


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
     * @Template()
     */
    public function indexAction(Request $request)
    {
        list($filterForm, $queryBuilder) = $this->filter($request);
        $pager = $this->getPager($queryBuilder);

        return array(
            'pager' => $pager,
            'filterform' => $filterForm->createView(),
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
        $filterForm = $this->createForm(new ProductoFilterType());

        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('AppBundle:Producto')->createQueryBuilder("q");

        // Reset filter
        if ($request->getMethod() == 'POST' && $request->get('submit-filter') == 'reset') {
            $session->remove('ProductoControllerFilter');
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
                $session->set('ProductoControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ProductoControllerFilter')) {
                $filterData = $session->get('ProductoControllerFilter');
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
     * @Template("AppBundle:admin\Producto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Producto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', "El Producto $entity se creó correctamente.");
            if ($request->request->get('save_mode') == 'save_and_close') {
//                return $this->redirect($this->generateUrl('producto'));
            }
//            return $this->redirect($this->generateUrl('producto_new'));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
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
     * @Template()
     */
    public function newAction()
    {
        $entity = new Producto();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Producto entity.
     *
     * @Route("/{id}", name="producto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Producto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Producto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Producto entity.
     *
     * @Route("/{id}/edit", name="producto_edit")
     * @Method("GET")
     * @Template()
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

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
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
     * @Method("PUT")
     * @Template("AppBundle:admin\Producto:edit.html.twig")
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
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', "El Producto $entity se actualizó correctamente.");
            return $this->redirect($this->generateUrl('producto'));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
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
     * @Route("/api/imagen/{id}/{status}",
     * name="producto_imagen",
     * requirements = { "status" = "delete|primario", "id" = "\d+" },
     *
     * )
     * @Method("GET")
     *
     */
    public function apiImagenAction(Request $request)
    {
//        // is it an Ajax request?
//        $isAjax = $request->isXmlHttpRequest();

        if ($request->isXMLHttpRequest()) {
            $id = $request->get('id');
            $status = $request->get('status');

            $em = $this->container->get('doctrine.orm.entity_manager');
            $imagen = $em->getRepository('AppBundle:ProductoImagen')->find($id);

            if (!$imagen) {
                $response = new Response('error. ', Response::HTTP_NOT_FOUND);
                return $response;
            }

            if ($status == 'delete') {
                //Si la imagen a borrar es primaria selecciona la primera de la lista.
                if ($imagen->getPrimario() == true){
                    $producto = $imagen->getProducto();
                    $imagenes = $producto->getImagenes();
                    $temp = $imagenes[0];
                    $temp->setPrimario(true);
                    $em->persist($temp);
                }

                $em->remove($imagen);
                $em->flush();
                $response = new Response('Borrado. ', Response::HTTP_OK);
                return $response;
            }elseif($status == 'primario'){
                $producto = $imagen->getProducto();
                //Recorro la colleccion y marco como primario la imagen seleccionada.
                foreach ($producto->getImagenes() as $img) {
                    if ($img->getId()== $imagen->getId()) {
                        $img->setPrimario(true);
                    }else{
                        $img->setPrimario(false);
                    }
                    $em->persist($img);
                }
                $em->flush();
                $response = new Response('primario. ', Response::HTTP_OK);
                return $response;
            }

//        new Response($imagen, is_object($imagen) ? Response::HTTP_OK : Response::HTTP_NOT_FOUND)
        }

        return new Response('This is not ajax!', Response::HTTP_BAD_REQUEST);

    }

}
