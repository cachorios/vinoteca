// keep track of how many email fields have been rendered
jQuery(document).ready(function () {
    jQuery('textarea').autosize();
    jQuery('select').select2();

});

/* producto metadatos lista*/
jQuery().ready(function () {
    jQuery(document).on('click', '#user-perfil', function (e) {
        e.preventDefault();
        alert('perfil');

    });

    jQuery(document).on('click', '#user-cambiar-contrasena', function (e) {
        e.preventDefault();
        alert('cambiar contraseña');
        $(this).removeData('');
    });




});

