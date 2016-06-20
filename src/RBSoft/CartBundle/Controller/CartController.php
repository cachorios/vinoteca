<?php

namespace RBSoft\CartBundle\Controller;

use AppBundle\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RBSoft\CartBundle\Model\CartManagerInterface;
use RBSoft\CartBundle\Model\CartInterface;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CartController extends Controller
{

    /**
     * @param Producto $producto
     * @Route("/addcart/{id}", name="addtocart")
     * @ParamConverter("producto",class="AppBundle:Producto")
     */
    public function addToCartAction(Producto $producto)
    {
        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();
        $cart->addItem($producto);


        return $this->displayCartAction('small');

    }

    /**
     * Mostrar carro
     * @param string $size ('big'|'medium'|'small')
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     * @Route("/cartdisplay/{size}", name="cartdisplay")
     */
    public function displayCartAction($size = "big")
    {
        $size = strtolower($size);
        if (!in_array($size, array('big', 'medium', 'small'))) {
            $size = "big";
        }
        $size = ucfirst($size);

        if ($size == 'big') {
            $breadcrumbs = $this->get("white_october_breadcrumbs");
            $breadcrumbs->addItem("Inicio", $this->get("router")->generate("homepage"));
            $breadcrumbs->addItem("Carro de Compra");

        }

        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();

        //preciso recargar los productos para que se vean las iamagenes
        $cartManager->refreshProductos();

//        $logger = $this->get('logger');
//        $logger->debug("display cart : cart=".print_r($cart,true));

        // build view object
        $displayCart = array(
            "total" => $cartManager->getCarroSumaItem(),
            "cantidad" => $cartManager->getCantidad(),
            'items' => array()
        );


        //if( $size == 'Big' ) {
        return $this->render(
            'RBSoftCartBundle:Cart:display' . $size . 'Cart.html.twig',
            array(
                'cart' => $displayCart,
                'cartModel' => $cart,
                'cartManagerModel' => $cartManager
            )
        );
//        }else{
//           return $this->renderView('RBSoftCartBundle:Cart:display' . $size . 'Cart.html.twig',
//               array(
//                   'cart' => $displayCart,
//                   'cartModel' => $cart,
//                   'cartManagerModel' => $cartManager
//               )
//           );
//        }
    }

    /**
     * remove a line from the cart and redirect to the target URL
     *
     * @Route(
     *  "/cartremoveitem/{lineId}",
     *  name="cartremoveitem",
     *  options={"expose"=true} )
     *
     * @param int $lineId
     */
    public function deleteLineAction($lineId)
    {

        //$targetUrl = $request->query->get('rbsoft_cart_target_url');
        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();
        $cart->deleteItem($lineId);

        $displayCart = array(
            "total" => $cartManager->getCarroTotal(),
            "cantidad" => $cartManager->getCantidad(),
            'items' => array()
        );
        $contenido = array(
            '#cart' => $this->renderView('RBSoftCartBundle:Cart:displaySmallCart.html.twig',
                array(
                    'cart' => $displayCart,
                    'cartModel' => $cart,
                    'cartManagerModel' => $cartManager
                )),
            "#subtotal" => sprintf(' $ %10.2f', $cartManager->getCarroTotal()),
            //"#total" => $this->displayCartAction('big',true),
        );

        $response = new Response(json_encode($contenido));
        return $response;

//        return $this->redirect($targetUrl);
    }

    /**
     * @Route(
     *  "/cartupdateitem/{lineId}/{cantidad}",
     *  name="cartupdateitem",
     *  options={"expose"=true} )
     *
     * @param $lineId
     * @param int $cantidad
     * @return mixed
     */
    public function UpdateLineAction($lineId, $cantidad = 0)
    {

        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();
        $cart->UdateItemCantidad($lineId, $cantidad);

        //preciso recargar los productos para que se vean las iamagenes
        $cartManager->refreshProductos();

        // build view object
        $displayCart = array(
            "total" => $cartManager->getCarroSumaItem(),
            "cantidad" => $cartManager->getCantidad(),
            'items' => array()
        );

        $contenido = array(
            '#shopping-cart-table' => $this->renderView('RBSoftCartBundle:Cart:cartdisplay.html.twig',
                array(
                    'cart' => $displayCart,
                    'cartModel' => $cart,
                    'cartManagerModel' => $cartManager
                )),
            '#cart' => $this->renderView('RBSoftCartBundle:Cart:displaySmallCart.html.twig',
                array(
                    'cart' => $displayCart,
                    'cartModel' => $cart,
                    'cartManagerModel' => $cartManager
                )),
            "#subtotal" => sprintf(' $ %10.2f', $cartManager->getCarroSumaItem()),
            '#cupon-total' => $this->getTotalView($cartManager)

        );

        $response = new Response(json_encode($contenido));
        return $response;
    }

    /**
     * @Route(
     *  "/cartcuponapply/{codigo}",
     *  name="cartcuponaplly",
     *  options={"expose"=true} )
     * @param Request $request
     * @param $codigo
     */
    public function aplicarCuponAction(Request $request, $codigo)
    {

        $cartManager = $this->get('rbsoft.cartManager');

        $displayCart = array(
            "total" => $cartManager->getCarroSumaItem(),
            "cantidad" => $cartManager->getCantidad(),
            'items' => array()
        );
        if ($cartManager->aplicarCupon($codigo)) {
            $contenido = array(
                '.form-cupon' => $this->renderView('@RBSoftCart/Cart/_cart_cupon_utilizando.html.twig', array('cartModel' => $cartManager->getCart())),
                '#cupon-total' => $this->getTotalView($cartManager),
                '#cart' => $this->renderView('RBSoftCartBundle:Cart:displaySmallCart.html.twig',
                    array(
                        'cart' => $displayCart,
                        'cartModel' => $cartManager->getCart(),
                        'cartManagerModel' => $cartManager
                    )),
            );
        } else {
            $contenido = array(

                'callback' => array("Cupon inexistente o y aplicado!")
            );

        }


        $response = new Response(json_encode($contenido));
        return $response;

    }

    /**
     * @Route(
     *  "/cartcuponremove/",
     *  name="cartcuponremove",
     *  options={"expose"=true} )
     */
    public function quitarCuponAction()
    {
        $cartManager = $this->get('rbsoft.cartManager');
        $displayCart = array(
            "total" => $cartManager->getCarroSumaItem(),
            "cantidad" => $cartManager->getCantidad(),
            'items' => array()
        );

        if ($cartManager->tieneCupon()) {
            $cartManager->quitarCupon();
            $contenido = array(
                '.form-cupon' => $this->renderView('@RBSoftCart/Cart/_cart_cupon_utilizando.html.twig', array('cartModel' => $cartManager->getCart())),
                '#cupon-total' => $this->getTotalView($cartManager),
                '#cart' => $this->renderView('RBSoftCartBundle:Cart:displaySmallCart.html.twig',
                    array(
                        'cart' => $displayCart,
                        'cartModel' => $cartManager->getCart(),
                        'cartManagerModel' => $cartManager
                    )),
            );
        } else {
            $contenido = array(
                'callback' => array("No tiene cupon aplicado!")
            );

        }

        $response = new Response(json_encode($contenido));
        return $response;


    }

    /**
     * @Route(
     *     "/cartcomprar/",
     *     name="cartcomprar",
     *     options={"expose"=true}
     * )
     */
    public function comprarAction()
    {
        $cartManager = $this->get('rbsoft.cartManager');

        try{
            $cartManager->comprar();

            $cartManager->iniciar();
            $this->get('session')->getFlashBag()->add('success',"La compra se realizo correctamente.");

            $contenido = array('redirect' => $this->generateUrl('homepage'));

        }catch (\Exception $e){
            $contenido = array(
                'callback' => array($e->getMessage())
            );
        }

        $response = new Response(json_encode($contenido));

        return $response;
    }

    private function getTotalView(CartManagerInterface $cartManager)
    {
        return $this->renderView('@RBSoftCart/Cart/_cupon_total.html.twig',
            array(
                'cartManagerModel' => $cartManager
            )
        );


    }

}
