/**
 * Created by cachorios on 20/12/2014.
 */

'use strict';



var cntShow = 0;

var showIndicador = function(){
    $("#veil").show();
    $("#prLoading").show();
    cntShow = cntShow + 1;
    //console.log(cntShow);
}

var hideIndocador = function(){
    cntShow = cntShow - 1;
    //console.log(cntShow);
    if(cntShow <= 0){
        cntShow = 0;
        $("#veil").hide();
        $("#prLoading").hide();
    }
}
showIndicador();

$(document).ready(function(){
    hideIndocador();
})

//Llamadas Ajax de jQuery
jQuery(document).ajaxStop(function(){
    hideIndocador();
});

jQuery(document).ajaxStart(function() {
    showIndicador();
});

