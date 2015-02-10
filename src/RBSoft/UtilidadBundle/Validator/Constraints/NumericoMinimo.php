<?php
/**
 * Created by PhpStorm.
 * User: beto
 * Date: 03/02/2015
 * Time: 14:25
 */

namespace RBSoft\UtilidadBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;
/**
 * @Annotation
 */
class NumericoMinimo extends Constraint
{

    const INVALID_VALUE_ERROR = 1;
    const BEYOND_RANGE_ERROR = 2;
    const BELOW_RANGE_ERROR = 3;

    protected static $errorNames = array(
        self::INVALID_VALUE_ERROR => 'INVALID_VALUE_ERROR',
        self::BEYOND_RANGE_ERROR => 'BEYOND_RANGE_ERROR',
        self::BELOW_RANGE_ERROR => 'BELOW_RANGE_ERROR',
    );

    public $minMessage = 'This value should be {{ limit }} or more.';
    public $invalidMessage = 'This value should be a valid number.';
    public $min;

    public function __construct($options = null)
    {
        parent::__construct($options);

        if (null === $this->min ) {
            throw new MissingOptionsException(sprintf('Either option "min" must be given for constraint %s', __CLASS__), array('min', 'max'));
        }
    }
}