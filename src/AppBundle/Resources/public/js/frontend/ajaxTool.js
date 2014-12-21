/**
 * Created by cachorios on 20/12/2014.
 */

'use strict';



var cntShow = 0;

var showIndicador = function(){
    $("#veil").show();
    $("#prLoading").show();
    //cntShow = cntShow + 1;
    console.log(cntShow);
}

var hideIndocador = function(){
    cntShow = cntShow - 1;
    //console.log(cntShow);
    if(cntShow <= 0){
        cntShow = 0;
        $("#prLoading").hide();
        $("#veil").fadeOut(5000);
    }
}
//showIndicador();

//$(document).ready(function(){
//    //hideIndocador();
//})

//Llamadas Ajax de jQuery
$(document).ajaxStop(function(){
    hideIndocador();
});

$(document).ajaxStart(function() {
    showIndicador();
});
//
$.ajaxSetup({
    global: true,
    beforeSend: function() {
        showIndicador();
    },
    complete: function(){
        hideIndocador();
    },
    success: function() {}
});
//
$(window).load(function(){
    //showIndicador();
    hideIndocador();
})