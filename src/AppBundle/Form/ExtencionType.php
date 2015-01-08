<?php

namespace AppBundle\Form;

use AppBundle\Form\EventListener\AddProductoExtencionListener;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\CategoriaRepository;
use RBSoft\UtilidadBundle\Form\DataTransformer\FileToStringTransformer;

class ExtencionType extends ProductoType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->addEventSubscriber(new AddProductoExtencionListener($builder->getFormFactory(), $this->em));

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => 'AppBundle\Entity\Producto',
                'csrf_protection' => false,
            ));
    }
}
