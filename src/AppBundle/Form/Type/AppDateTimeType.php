<?php

namespace  AppBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class AppDateTimeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['attr']['placeholder'] = $options['placeholder'];
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'model_timezone'   => 'UTC',
                'view_timezone'    => 'UTC',
                'format' => 'dd-MM-yyyy',
//                'format'           => 'dd/mm/yyyy',
//                'format'           => DateTimeType::HTML5_FORMAT,
                'widget'           => 'single_text',
                'placeholder'      => 'app.form.click_here_to_select',
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'datetime';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'app_datetime';
    }
}
