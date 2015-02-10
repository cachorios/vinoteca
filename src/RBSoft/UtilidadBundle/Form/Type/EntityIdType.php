<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 02/02/2015
 * Time: 16:06
 */

namespace RBSoft\UtilidadBundle\Form\Type;

use AppBundle\Form\DataTransformer\EntityToIdTransformer;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormBuilderInterface;

class EntityIdType extends AbstractType
{

    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setOptional(array('class'));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new EntityToIdTransformer($this->om, $options['class']);
        $builder->addModelTransformer($transformer);
    }


    public function getName()
    {
        return 'entity_id';
    }
    public function getParent()
    {
        return 'text';
    }
}