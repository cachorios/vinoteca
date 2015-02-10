<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 03/02/2015
 * Time: 14:22
 */

namespace RBSoft\UtilidadBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class NumericoMinimoValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (null === $value) {
            return;
        }

        if (!is_numeric($value)) {
            $this->buildViolation($constraint->invalidMessage)
                ->setParameter('{{ value }}', $this->formatValue($value, self::PRETTY_DATE))
                ->setCode(NumericoMinimo::INVALID_VALUE_ERROR)
                ->addViolation();

            return;
        }

        $min = $constraint->min;

        if (null !== $constraint->min && $value < $min) {
            $this->buildViolation($constraint->minMessage)
                ->setParameter('{{ value }}', $this->formatValue($value, self::PRETTY_DATE))
                ->setParameter('{{ limit }}', $this->formatValue($min, self::PRETTY_DATE))
                ->setCode(NumericoMinimo::BELOW_RANGE_ERROR)
                ->addViolation();
        }


    }

}