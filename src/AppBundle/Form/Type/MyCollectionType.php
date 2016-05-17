<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class MyCollectionType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return CollectionType::class;
    }

     /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_collection';
    }
}
