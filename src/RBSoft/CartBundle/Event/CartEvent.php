<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 18:13
 */

namespace RBSoft\CartBundle\Event;


use Symfony\Component\EventDispatcher\Event;

class CartEvent extends Event {
    protected $data = array();

    public function set($key, $val)
    {
        $this->data[$key] = $val;
    }

    public function get($key)
    {
        if (!array_key_exists($key, $this->data)) {
            return null;
        }
        return $this->data[$key];
    }
}