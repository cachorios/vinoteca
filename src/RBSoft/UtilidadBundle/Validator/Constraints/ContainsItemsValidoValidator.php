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

class ContainsItemsValidoValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$this->verificarItems($value)) {
            $this->context->addViolation($constraint->message, array( array('%string%' => $value->count())));
        }

    }

    public static function verificarItems($value)
    {
        $esValid = false;
        if ($value->count() > 0) {
            $esValid = true;
        }
        return $esValid;
    }
}