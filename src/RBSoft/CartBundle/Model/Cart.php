<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 17:39
 */

namespace RBSoft\CartBundle\Model;


use AppBundle\Entity\Producto;

class Cart implements CartInterface
{
    ////
    // variables
    ////
    protected $items = array();
    protected $itemsecuencia = 1;

    /**
     * @param Producto $producto
     * @param int $cantidad
     * @return CartItem
     */
    public function addItem( Producto $producto, $cantidad = 1)
    {
        $item = new CartItem();
        $item
            ->setProducto($producto)
            ->setCantidad($cantidad)
            ->setLineId($this->itemsecuencia)
        ;
        $this->items[$this->itemsecuencia] = $item;
        $this->itemsecuencia ++;
        return $item;

    }

    /**
     * @param $lineId
     */
    public function deleteItem($lineId)
    {
//        foreach($this->items as $item){
//            if($item->getLineId() === $lineId){
//
//            }
//        }

        if (array_key_exists($lineId, $this->items) ) {
            unset($this->items[$lineId]);
        }
    }

    /**
     * Limpiar el carrito
     */
    public function emptyCart()
    {
        $this->items = array();
    }

    /**
     * @param $lineId
     * @return null | CartItem
     */
    public function getItem($lineId)
    {
        if (array_key_exists($lineId, $this->items) ) {
            return $this->items[$lineId];
        }
        return null;
    }

    /**
     * Retorna todos los item del carrito
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }


}