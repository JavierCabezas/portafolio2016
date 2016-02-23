jQuery(function ($) {
    // Load dialog on page load
    //$('#basic-modal-content').modal();

    // Load dialog on click
    $('#basic-modal-melko.basic').click(function (e) {
        $('#content-melko').modal();
        return false;
    });

    $('#basic-modal-tam.basic').click(function (e) {
        $('#content-tam').modal();
        return false;
    });

    $('#basic-modal-repuestos.basic').click(function (e) {
        $('#content-repuestos').modal();
        return false;
    });

    $('#basic-modal-melko.basic').click(function (e) {
        $('#content-melko').modal();
        return false;
    });

    $('#basic-modal-respuestoslogo.basic').click(function (e) {
        $('#content-repuestoslogo').modal();
        return false;
    });
});
