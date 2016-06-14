/**
 * Created by cachorios on 16/01/2015.
 */
/*
$(document).ready(function(){

});
*/

$(function () {

    $('body').on('click', '[data-cart-add]', function (e) {
        var $btn = $(e.target);
        urlLink = $(this).data("link");


        $.ajax({
            url: urlLink,
            context: document.body,
            success: function(data){
                $("#cart").html(data);
            }

        }).done(function() {
//                hideIndocador();

        });
        e.preventDefault();
    });

    /**
     * Actualiza las cantidades de producto de un item
     */
    $('body').on('click', '[data-cart-updatebtn]', function (e) {
        padre = $(this).parent().parent();
        cantidad = $("input[name='cantidad']",padre).val();
        lineId = $(this).data("cart-updatebtn");
        urlLink = Routing.generate('cartupdateitem',{'lineId': lineId, 'cantidad': cantidad ,'modo': 'big' });

        llamarAjaxRefresh(urlLink)

        e.preventDefault();
    })

    /**
     * Quitar un prdocuto
     */
    $('body').on('click', '[data-cart-removebtn]', function (e) {
        padre = $(this).parent().parent();
        cantidad = $("input[name='cantidad']",padre).val();
        lineId = $(this).data("cart-removebtn");
        urlLink = Routing.generate('cartremoveitem',{'lineId': lineId });
        padre.remove();
        llamarAjaxRefresh(urlLink)

        e.preventDefault();
    })


});