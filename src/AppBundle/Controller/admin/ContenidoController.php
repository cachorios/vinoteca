<?php

namespace AppBundle\Controller\admin;

use AppBundle\Entity\ContenidoDetalle;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;
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
        $pager = $this->getPager($queryBuilder, $request);

        return array(
            'pager'         => $pager,
            'filterform'    => $filterForm->createView(),
        );
    }

    /**
    * Crea el paginador
    * @param Request $request
    * @return SlidingPagination
    * @throws NotFoundHttpException
    */
    private function getPager($q, Request $request)
    {
        $paginator  = $this->get('knp_paginator');

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
        $filterForm = $this->createForm( ContenidoFilterType::class );

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
                $filterForm = $this->createForm(ContenidoFilterType::class, $filterData);
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
     * @Template("AppBundle:admin\Contenido:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Contenido();
        $form = $this->createCreateForm($entity);


        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload("uploads/banners/");
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
        $form = $this->createForm(ContenidoType::class, $entity, array(
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
//        $new1 = new ContenidoDetalle();
//        $new1->setOrden(1);
//        $new1->setLink("Hola");
//
//        $new2 = new ContenidoDetalle();
//        $new1->setOrden(2);
//        $new2->setLink("Hola 2");

        $entity = new Contenido();

//        $entity->addContenidoDetalle($new1);
//        $entity->addContenidoDetalle($new2);

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
        $form = $this->createForm(ContenidoType::class, $entity, array(
            'action' => $this->generateUrl('contenido_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        
        return $form;
    }
    /**
     * Edits an existing Contenido entity.
     *
     * @Route("/{id}/edit", name="contenido_update")
     * @Method({"PUT","POST"})
     * @Template("AppBundle:admin/Contenido:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Contenido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contenido entity.');
        }

        $contenidoDetalleOriginal= new ArrayCollection();

        foreach($entity->getContenidoDetalle() as $contenidoDet){
            $contenidoDetalleOriginal->add($contenidoDet);
        }


        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        //ld($contenidoDetalleOriginal, $entity->getContenidoDetalle());


        if ($editForm->isValid()) {

            $entity->upload("uploads/banners/");

//            // remove the relationship between the tag and the Task
//            foreach ($contenidoDetalleOriginal as $det) {
//                /** @var ContenidoDetalle $det */
//                if (false === $entity->getContenidoDetalle()->contains($det)) {
//
//                    // remove the Task from the Tag
//
//                    $em->remove($det);
//
//                }
//            }
//
//            $em->persist($entity);
//            $em->flush();


              $this->removerContenido($entity, $contenidoDetalleOriginal, $em);

              $em->persist($entity);
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

    private function removerContenido(Contenido $contenido, ArrayCollection $cdetalles, EntityManager $em){
        foreach( $cdetalles as $cd){
            if(false === $contenido->getContenidoDetalle()->contains($cd)){
                $em->remove($cd);
            }
        }
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
            ->add('submit', SubmitType::class, array(
                'label' => 'Delete',
                'attr'  => array(
                        'class' => 'btn btn-danger btn-sm'
                )
            ))
            ->getForm()
        ;
    }

}
