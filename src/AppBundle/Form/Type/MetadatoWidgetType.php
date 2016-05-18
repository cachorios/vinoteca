<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 1:18
 */

namespace AppBundle\Form\Type;

use AppBundle\Model\DefinicionMetadatoWidget;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class MetadatoWidgetType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => DefinicionMetadatoWidget::getWidget()
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getBlockPrefix()
    {
        return 'widget_filter';
    }
} 