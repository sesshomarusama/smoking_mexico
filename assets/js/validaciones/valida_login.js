$(function(){
   $("form#login").validate({
       rules: {
           email_user: {
                required: true,
                email: true
            },
            password_user: {
                required: true
            }
       },
       messages: {
           email_user: {
               required: "Es necesario llenar este campo",
               email: "Ingresa una dirección de correo valida"
           },
           password_user: {
               required: "Es necesario llenar este campo"
           }
       },
       submitHandler: function(form){ // con el objeto form accedo a los atributos del formulario
           $.ajax({
                url: $(form).attr("action"),
                type: $(form).attr("method"),
                dataType: 'json',
                data: $(form).serialize(),
                beforeSend: function () {
                    $("div#before_send").addClass("before_send");
                    $("div#spinner").addClass("spinner");
                }
            })
                    .done(function(data){
                        alert(data.existe);
                    })
                    .fail(function(){
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
                    .always(function(){
                        $("div#before_send").removeClass("before_send");
                        $("div#spinner").removeClass("spinner");
                    });
            
           return false;
       }
   });
});