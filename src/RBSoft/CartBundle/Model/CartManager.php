<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 17:25
 */

namespace RBSoft\CartBundle\Model;


use Doctrine\ORM\EntityManager;
use RBSoft\CartBundle\Event\CartEvent;
use RBSoft\CartBundle\RBSoftCartEvent;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class CartManager {
    /** @var null|Session */
    protected $session = null;
    /** @var null|EventDispatcherInterface */
    protected $dispatcher = null;

    /** @var null|EntityManager */
    protected $em = null;


    /**
     * Constructor del servicio
     * @param Session current session
     * @param CartInterface|null $cart
     */
    public function __construct( Session $session, EventDispatcherInterface $dispatcher, EntityManager $em, CartInterface $cart = null)
    {
        $this->dispatcher = $dispatcher;
        $this->session = $session;
        $this->em = $em;
        if ($cart === null) {
            $cart = $this->session->get('rbsoft_cart', new Cart());
        }


        if (! $this->session->get("rbsoft_cart")) {
            $event = new CartEvent();
            $event->set("cart", $cart);

            $this->dispatcher->dispatch(RBSoftCartEvent::AFTER_CART_INIT, $event);

        }

        $this->session->set('rbsoft_cart', $cart);
    }

    /**
     * @return Cart
     */
    public function getCart()
    {
        return $this->session->get("rbsoft_cart");
    }

    /**
     * Cantidad de productos en el carrito
     * @return int
     */
    public function getCantidad()
    {
        $items = $this->getCart()->getItems();
        $itemCount = 0;

        /** @var CartItem $item */
        foreach ($items as $item) {
            $itemCount += $item->getCantidad();
        }
        return $itemCount;
    }

    /**
     * @return decimal
     */
    public function getCarroTotal()
    {
        $items = $this->getCart()->getItems();
        $total = 0;

        /** @var CartItem $item */
        foreach ($items as $item) {
            $total += $item->getProducto()->getPrecio() * $item->getCantidad();
        }

        return $total;

    }

    /**
     * Para volver a cargar los productos a la coleccion, ya que cuando serivaliza, no serializa lo que no utilice, y no dispongo de las imagenes.
     */
    public function refreshProductos(){
        $cart = $this->getCart();

        foreach($cart->getItems() as $item ){
            $producto = $this->em->getRepository("AppBundle:Producto")->find($item->getProducto()->getId());
            $item->setProducto($producto);
        }
    }


}