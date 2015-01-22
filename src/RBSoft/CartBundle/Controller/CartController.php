<?php

namespace RBSoft\CartBundle\Controller;

use AppBundle\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RBSoft\CartBundle\Model\CartManagerInterface;
use RBSoft\CartBundle\Model\CartInterface;
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
    public function displayCartAction($size = "big", $toHtml = false)
    {
        $size = strtolower($size);
        if (!in_array($size, array('big', 'medium', 'small'))) {
            $size = "big";
        }
        $size = ucfirst($size);

        if($size == 'Big'){
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
            "total" => $cartManager->getCarroTotal() ,
            "cantidad" => $cartManager->getCantidad(),
            'items' => array(
            )
        );


//        foreach ($cart->getLineList() as $line) {
//            $displayCart['items'][$line->getId()] = array(
//                "shopCategory" => $line->getCartable()->getShopCategory(),
//                "shopName" => $line->getCartable()->getShopName(),
//                "shopDescription" => $line->getCartable()->getShopDescription(),
//                "shopReference" => $line->getCartable()->getShopReference(),
//                "shopData" => $line->getCartable()->getShopData(),
//                "quantity" => $line->getQuantity(),
//                "price" => $cartManager->getLinePrice($line->getId()),
//                "deleteLinkUrl" => $this->generateUrl(
//                    "KitpagesShopBundle_cart_deleteLine",
//                    array(
//                        "lineId"=>$line->getId(),
//                        "kitpages_shop_target_url" => $_SERVER["REQUEST_URI"]
//                    )
//                )
//            );
//        }
        if(!$toHtml) {
           return $this->render(
                'RBSoftCartBundle:Cart:display' . $size . 'Cart.html.twig',
                array(
                    'cart' => $displayCart,
                    'cartModel' => $cart,
                    'cartManagerModel' => $cartManager
                )
            );
        }else{
           return $this->renderView('RBSoftCartBundle:Cart:display' . $size . 'Cart.html.twig',
               array(
                   'cart' => $displayCart,
                   'cartModel' => $cart,
                   'cartManagerModel' => $cartManager
               )
           );
        }
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

        $contenido = array(
            "#cart"     => $this->displayCartAction('small',true),
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
        //$targetUrl = $request->query->get('rbsoft_cart_target_url');
        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();
        $cart->UdateItemCantidad($lineId, $cantidad);

        $contenido = array(
                "#cart"     => $this->displayCartAction('small',true),
                "#subtotal" => sprintf(' $ %10.2f', $cartManager->getCarroTotal()),
                //"#total" => $this->displayCartAction('big',true),
            );

        $response = new Response(json_encode($contenido));
        return $response;
    }


}
