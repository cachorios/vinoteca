<?php

namespace AppBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

class EntityToIntTransformer implements DataTransformerInterface
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
     * Transforms an object (issue) to a string (number).
     */
    public function transform($data)
    {
//        ld('transform');
//        ld($data);
        return $data;
    }

    /**
     * Transforms a string (number) to an object (issue).
     */
    public function reverseTransform($data)
    {
        ld('reverseTransform');
        ld($data);
        return $data;
    }
}