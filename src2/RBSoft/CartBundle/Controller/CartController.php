<?php

namespace RBSoft\CartBundle\Controller;

use AppBundle\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RBSoft\CartBundle\Model\CartManagerInterface;
use RBSoft\CartBundle\Model\CartInterface;
use Symfony\Component\HttpFoundation\Request;

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
        return $this->render(
            'RBSoftCartBundle:Cart:display'.$size.'Cart.html.twig',
            array(
                'cart' => $displayCart,
                'cartModel' => $cart,
                'cartManagerModel' => $cartManager
            )
        );
    }

    /**
     * remove a line from the cart and redirect to the target URL
     * @param int $lineId
     */
    public function deleteLineAction($lineId, Request $request)
    {
        $targetUrl = $request->query->get('rbsoft_cart_target_url');
        $cartManager = $this->get('rbsoft.cartManager');
        $cart = $cartManager->getCart();
        $cart->deleteLine($lineId);
        return $this->redirect($targetUrl);
    }


}
