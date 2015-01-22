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

    $('body').on('click', '[data-cart-updatebtn]', function (e) {
        ob = $(this).parent().parent();
        ob2 = $("input[name='cantidad']",ob);
        alert(ob2);
    });


});