<?php
/**
 * Created by PhpStorm.
 * User: cachorios
 * Date: 15/01/2015
 * Time: 18:16
 */

namespace RBSoft\CartBundle;


final class RBSoftCartEvent {
    const AFTER_CART_INIT = 'rbsoft_cart.event.after_cart_init';

    const AFTER_ORDER_PAYED = 'rbsoft_cart.event.after_order_payed';

    const AFTER_ORDER_CANCELED = 'rbsoft_cart.event.after_order_canceled';

    const AFTER_TRANSACTION_REFUSED = 'rbsoft_cart.event.after_transaction_refused';

    const AFTER_TRANSACTION_EXPIRED = 'rbsoft_cart.event.after_transaction_expired';

    
}