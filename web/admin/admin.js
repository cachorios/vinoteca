// keep track of how many email fields have been rendered
jQuery(document).ready(function () {
    jQuery('textarea').autosize();
});

/* producto metadatos lista*/
jQuery().ready(function () {
    jQuery('.select-customopengraph .control select').change(function () {
        if (1 == this.options[this.selectedIndex].value) {
            jQuery('.select-customopengraph .og-textarea').show()
        } else jQuery('.select-customopengraph .og-textarea').hide()
    });
    jQuery('.select-customopengraph .control select').change()
});

