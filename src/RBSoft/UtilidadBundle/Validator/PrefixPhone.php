<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */

namespace Ideup\ExtraValidatorBundle\Validator;

use RBSoft\UtilidadBundle\Constraint;

/**
 * @Annotation
 */
class Phone extends Constraint
{
    public $message = "It is not a valid phone number";
    public $format  = '/(\+\d{2,3})?\s+(\d{2,3}\s)+|(\d+)/';

    public function requiredOptions()
    {
        return array();
    }

    public function defaultOption()
    {
        return '';
    }

    public function validatedBy()
    {
        return __NAMESPACE__.'\PhoneValidator';
    }
}

