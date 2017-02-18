$(function(){
   $("form#acepto").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'html',
            data: $(this).serialize(),
            beforeSend: function () {
                $("div#before_send").addClass("before_send");
                $("div#spinner").addClass("spinner");
            }
        })
       .done(function(status) {
           if(status){
                            $.confirm({
                                title: 'Buen trabajo',
                                content: 'Tu cuenta ha sido activada :)',
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    Aceptar: {
                                        text: 'Aceptar',
                                        btnClass: 'btn-green',
                                        action: function () {
                                            //window.location = base_url;
                                            location.replace(base_url+'iniciar-sesion');
                                        }
                                    }
                                }
                            });
                        }
                        else{
                            $.confirm({
                                title: 'Lo sentimos',
                                content: 'A ocurrido algún inconveniente intentalo más tarde :(',
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    Aceptar: {
                                        text: 'Aceptar',
                                        btnClass: 'btn-red',
                                        action: function () {
                                        }
                                    }
                                }
                            });
                        }
       })
       .fail(function() {
                    console.log("error: no existe controlador y/o metodo");
                    $.confirm({
                        title: 'Lo sentimos',
                        content: 'Al parecer no tienes conexión a Internet :(',
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            Aceptar: {
                                text: 'Aceptar',
                                btnClass: 'btn-red',
                                action: function () {
                                }
                            }
                        }
                    });
       })
       .always(function() {
           $("div#before_send").removeClass("before_send");
           $("div#spinner").removeClass("spinner");
       	   console.log("complete");
       });
   });
});