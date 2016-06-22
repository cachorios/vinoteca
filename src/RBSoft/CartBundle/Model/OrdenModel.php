<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 17/06/2016
 * Time: 17:02
 */

namespace RBSoft\CartBundle\Model;


use Doctrine\ORM\EntityManager;
use RBSoft\CartBundle\Entity\Orden;
use RBSoft\CartBundle\Entity\OrdenDetalle;
use RBSoft\CartBundle\Entity\OrdenEstado;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class OrdenModel
{

    private $dispacher;
    private $em;

    /**
     * Constructor del servicio
     * @param Session current session
     * @param CartInterface|null $cart
     */
    public function __construct(EventDispatcherInterface $dispatcher = null, EntityManager $em = null)
    {
        $this->dispatcher = $dispatcher;
        $this->em = $em;

        //$this->dispatcher->dispatch(RBSoftCartEvent::AFTER_CART_INIT, $event);

    }

    /**
     * @param CartManagerInterface $cartManager
     * @throws \Exception
     */
    public function saveOrder(CartManagerInterface $cartManager)
    {


        if (count($cartManager->getCart()->getItems()) == 0) {
            throw new \Exception("El Carro esta vacio.");
        }

        $estado = new OrdenEstado();
        $estado->setFecha(new \DateTime('now'));
        $estado->setEstado(0);

        $cupon = null;
        if ($cartManager->tieneCupon()) {
            $cartManager->refresacarCupon();

            if ($cartManager->getCart()->getCupon()->getUtilizado()) {
                throw new \Exception("El cupon ya fue utilizado ");
            }

            $cupon = $cartManager->getCart()->getCupon();
            $cupon->setUtilizado(true)
                ->setValor( $cartManager->getDescuentoCupon() );
        }

        $orden = new Orden();



        $orden
            ->setFecha(new \DateTime('now'))
            ->setCliente($cartManager->getUsuario())
            ->setCupon($cupon)
        ;


        /**
         * @var CartItem $item
         */
        foreach ($cartManager->getCart()->getItems() as $item) {
            $detalle = new OrdenDetalle();
            $detalle
                ->setOrden($orden)
                ->setProducto($item->getProducto())
                ->setCantidad($item->getCantidad())
                ->setPrecio($item->getProducto()->getPrecio() )
            ;
            $orden->addDetalle($detalle);
        }
        
         $em = $cartManager->getManager();



        $em->persist($orden);

        $estado->setOrden($orden);
        $em->persist($estado);

        $em->flush();

    }


}