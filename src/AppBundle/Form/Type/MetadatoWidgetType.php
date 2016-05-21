<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 1:18
 */

namespace AppBundle\Form\Type;

use AppBundle\Model\DefinicionMetadatoWidget;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
        return ChoiceType::class;
    }

    public function getBlockPrefix()
    {
        return 'widget_filter';
    }
} 