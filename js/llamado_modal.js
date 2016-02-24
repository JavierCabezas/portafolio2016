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

    $('#basic-modal-23ky.basic').click(function (e) {
        $('#content-23ky').modal();
        return false;
    });

    $('#basic-modal-nuevasangre.basic').click(function (e) {
        $('#content-nuevasangre').modal();
        return false;
    });

    $('#basic-modal-respuestoslogo.basic').click(function (e) {
        $('#content-repuestoslogo').modal();
        return false;
    });

    $('#basic-modal-veronikalogo.basic').click(function (e) {
        $('#content-veronikalogo').modal();
        return false;
    });

    $('#basic-modal-devvalley.basic').click(function (e) {
        $('#content-devvalley').modal();
        return false;
    });

    $('#basic-modal-ferroviario.basic').click(function (e) {
        $('#content-ferroviario').modal();
        return false;
    });

    $('#basic-modal-homedeco.basic').click(function (e) {
        $('#content-homedeco').modal();
        return false;
    });
});
