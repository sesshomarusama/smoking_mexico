$(function () {
    $("form#registrar").on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: 'html',
            data: $(this).serialize(),
            beforeSend: function(){
                $("div#before_send").addClass("before_send");
                $("div#spinner").addClass("spinner");
            }
        })
                .done(function (datos) {
                    console.log("success " + datos);
                })
                .fail(function () {
                    console.log("error: no existe controlador y/o metodo");
                })
                .always(function () {
                    $("div#before_send").removeClass("before_send");
                    $("div#spinner").removeClass("spinner");
                });

    });
});