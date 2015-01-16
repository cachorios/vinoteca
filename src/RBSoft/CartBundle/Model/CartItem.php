<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 17:41
 */

namespace RBSoft\CartBundle\Model;


use AppBundle\Entity\Producto;

class CartItem {
    ////
    // variables
    ////
    protected $cantidad = 0;
    protected $producto = null;
    protected $lineId = null;

    /**
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param int $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
        return $this;
    }

    /**
     * @return null | Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * @param null $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
        return $this;
    }

    /**
     * @return null
     */
    public function getLineId()
    {
        return $this->lineId;
    }

    /**
     * @param null $lineId
     */
    public function setLineId($lineId)
    {
        $this->lineId = $lineId;
        return $this;
    }


}