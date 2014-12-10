<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class MetadatoCollectionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->addEventSubscriber(
//            new MetadataCollectionTypeSubscriber()
//        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'collection';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'metadato_collection';
    }
}
