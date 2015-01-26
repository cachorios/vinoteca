<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 23/12/2014
 * Time: 1:18
 */

namespace AppBundle\Form\Type;

use AppBundle\Model\DefinicionMetadatoFilter;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class MetadatoFilterType extends AbstractType
{

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => DefinicionMetadatoFilter::getMetadatoFilterType()
        ));
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'metadato_filter';
    }
} 