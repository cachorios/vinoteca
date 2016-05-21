<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 10/12/2014
 * Time: 23:16
 */

namespace AppBundle\Form\EventListener;

use AppBundle\Entity\Categoria;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\ExpressionLanguage\Tests\Node\Obj;
use Symfony\Component\Form\FormFactoryInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use RBSoft\UtilidadBundle\Libs\Util;
use AppBundle\Model\DefinicionMetadatoWidget;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddProductoExtencionListener implements EventSubscriberInterface
{
    /**
     * @var FormFactoryInterface
     */
    private $factory;

    /**
     * @var ObjectManager
     */
    private $manager;

    /**
     * @param factory FormFactoryInterface
     */
    public function __construct(FormFactoryInterface $factory, ObjectManager $manager = null)
    {
        $this->factory = $factory;
        $this->manager = $manager;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SUBMIT => 'postSubmit',
            FormEvents::PRE_SET_DATA => 'preSetData',

        );
    }


    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();


        // check if the product object is "new"
        // If you didn't pass any data to the form, the data is "null".
        // This should be considered a new "Product"
        if (null === $data) {
            return;
        }

        if (null == $data->getCategoria()) {
            return;
        } else {
            $categoria = $data->getCategoria();
        }

        /**
         * @var Categoria $categoria
         */


        $metadatos = $categoria->getMetadatos();


        foreach ($metadatos as $metadato) {

            $valor = null;
            $requerido = is_bool($metadato->getRequerido()) ? $metadato->getRequerido() : false;
            $extencions = $data->getExtencion();

            // Busca Valores cargados.
            foreach ($extencions as $extencion) {

                if ($extencion->getMetadatoProducto()->getId() == $metadato->getId()) {
                    $valor = $extencion->getValor() == null ? null : $extencion->getValor();
                }
            }

            // Si no encuentra valores cargados, busca valores predeterminados.
            if ($extencions->count() < 1) {
                $valor = $metadato->getPredeterminado() != null ? $metadato->getPredeterminado() : null;
            }

            // Genera los campor dinamicos y los validadores.
            $form->add($this->factory->createNamed(Util::getSlug($metadato->getNombre()), DefinicionMetadatoWidget::getTipo($metadato->getWidget()), null, array(
                'label' => $metadato->getNombre(),
                'mapped' => false,
                'auto_initialize' => false,
                'required' => $requerido,
                'constraints' => $requerido ? array(new NotBlank()) : array(),
                'data' => $valor
            )));
        }
    }

    public function postSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();

        if (!$form->isValid()) {
            return;
        }

        $categoria = $data->getCategoria();
        $metadatos = $categoria->getMetadatos();

        foreach ($metadatos as $metadato) {
            $data->procesarMetadato($metadato, $form->get(Util::getSlug($metadato->getNombre()))->getData());
        }
    }
}