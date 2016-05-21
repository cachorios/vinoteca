<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 06/05/2015
 * Time: 9:12
 */

namespace AppBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\PersistentCollection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;


class ManyToEntityTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $manager;

    /**
     * @var string
     */
    private $class;

    /**
     * @param EntityManager $em
     */
    public function __construct(ObjectManager $manager, $class)
    {
        $this->manager = $manager;
        $this->class = $class;
    }

    /**
     * Transforms an object (use) to a string (id).
     *
     * @param  array           $array
     * @return ArrayCollection
     */
    public function transform($array)
    {
        $newArray = array();



        if (!($array instanceof PersistentCollection)) {
            return new ArrayCollection();
        }

        foreach ($array as $key => $value) {
            $newArray[] = $value;
        }

        return new ArrayCollection($newArray);
    }

    /**
     * Transforms a string (id) to an object (item).
     *
     * @param  string $id
     * @return PersistentCollection|ArrayCollection
     */
    public function reverseTransform($array)
    {
        $newArray = array();

        if (!$array) {
            return new ArrayCollection();
        }

        foreach ($array as $key => $value) {
            $item = $this->manager
                ->getRepository($this->class)
                ->findOneBy(array('id' => $value))
            ;

            if (!is_null($item)) {
                $newArray[$key] = $item;
            }
        }

        return new PersistentCollection( $this->manager, $this->class, new ArrayCollection($newArray));
    }
}