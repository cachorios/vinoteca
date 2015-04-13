<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ReposicionItemsCollectionType extends AbstractType
{

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
        return 'reposicion_items_collection';
    }
}
