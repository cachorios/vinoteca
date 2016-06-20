<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 17:25
 */

namespace RBSoft\CartBundle\Model;


use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\UserInterface;
use RBSoft\CartBundle\Entity\Cupon;
use RBSoft\CartBundle\Event\CartEvent;
use RBSoft\CartBundle\RBSoftCartEvent;
use RBSoft\UsuarioBundle\Entity\Usuario;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class CartManager implements CartManagerInterface
{
    /** @var null|Session */
    protected $session = null;
    /** @var null|EventDispatcherInterface */
    protected $dispatcher = null;

    /** @@var null | Usuario */
    protected $user = null;
    /** @var null|EntityManager */
    protected $em = null;

    /**
     * Constructor del servicio
     * @param Session current session
     * @param CartInterface|null $cart
     */
    public function __construct(Session $session, EventDispatcherInterface $dispatcher, EntityManager $em, TokenStorage $ts, CartInterface $cart = null)
    {
        $this->dispatcher = $dispatcher;
        $this->session = $session;
        $this->em = $em;
        $this->user = $ts->getToken()->getUser();
        if ($cart === null) {
            $cart = $this->session->get('rbsoft_cart', new Cart());
        }


        if (!$this->session->get("rbsoft_cart")) {
            $event = new CartEvent();
            $event->set("cart", $cart);

            $this->dispatcher->dispatch(RBSoftCartEvent::AFTER_CART_INIT, $event);

        }

        $this->session->set('rbsoft_cart', $cart);
    }

    public function iniciar()
    {
        $cart = new Cart();
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
    public function getCarroSumaItem()
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
     * @return decimal
     */
    public function getCarroTotal()
    {

        return $this->getCarroSumaItem() - $this->getDescuentoCupon() + $this->getEnvio();

    }

    /**
     * Para volver a cargar los productos a la coleccion, ya que cuando serivaliza, no serializa lo que no utilice, y no dispongo de las imagenes.
     */
    public function refreshProductos()
    {
        $cart = $this->getCart();

        foreach ($cart->getItems() as $item) {
            $producto = $this->em->getRepository("AppBundle:Producto")->find($item->getProducto()->getId());
            $item->setProducto($producto);
        }
    }


    /**
     * Aplicar un cupon
     * @param $codigo
     * @return bool
     */
    public function aplicarCupon($codigo)
    {
        /**
         * @var Cupon $cupon
         */
        $cupon = $this->em->getRepository("RBSoftCartBundle:Cupon")->findOneBy(array('codigo' => $codigo, 'utilizado' => false));


        if ($cupon && $cupon->getVencimiento()->setTime(0, 0, 0) >= (new \DateTime('now'))->setTime(0, 0, 0)) {
            $this->getCart()->setCupon($cupon);
            return true;
        }

        return false;
    }

    public function refresacarCupon()
    {
        if ($this->tieneCupon()) {
            $this->getCart()->setCupon($this->em->getRepository("RBSoftCartBundle:Cupon")->find($this->getCart()->getCupon()->getId()));
        }

    }

    /**
     * @return bool
     */
    public function tieneCupon()
    {
        return $this->getCart()->tieneCupon();
    }

    public function quitarCupon()
    {
        $this->getCart()->setCupon(null);
        return $this;
    }


    public function getDescuentoCupon()
    {
        $descuento = 0;

        if ($this->tieneCupon()) {
            $cupon = $this->getCart()->getCupon();
            switch ($cupon->getTipo()) {
                case 1:
                    $descuento = $cupon->getValor1();
                    break;
                case 2:
                    $descuento = round($this->getCarroSumaItem() * $cupon->getValor1() / 100, 2);
                    break;
                case 3:
                case 4:
            }
        }
        return $descuento;

    }

    public function getEnvio()
    {
        return 0;
    }

    /**
     * @return UserInterface|null|Usuario
     */
    public function getUsuario()
    {
        return $this->user;
    }

    /**
     * @return EntityManager|null
     */
    public function getManager()
    {
        return $this->em;
    }

    /**
     * @throws \Exception
     */
    public function comprar()
    {
        try {
            $orden = new OrdenModel();
            $orden->saveOrder($this);
        } catch (\Exception $e) {
            throw  $e;
        }


    }

}