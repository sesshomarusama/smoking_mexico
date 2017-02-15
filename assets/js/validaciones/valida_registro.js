$(function(){
    // función agregada manualmente para validar campos de texto y estos solo acepten letras
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Solo se aceptan letras!"); 
    // fin de los metodos agregados manualmente
    
    $("form#registrar").validate({
        rules: {
            email_user: "required",
            nombres_user: {
                required: true,
                minlength: 4,
                lettersonly: true
            },
            apellidos: {
                required: true,
                minlength: 5,
                lettersonly: true
            },
            pass_user: {
                required: true,
                minlength: 8
            },
            pass2_user: {
                required: true,
                minlength: 8,
                equalTo: "#pass_user"
            }
        },
        messages: {
            email_user: "Ingresa una dirección de correo valida!",
            nombres_user: {
                required: "Es necesario llenar este campo!",
                minlength: "Se necesitan mínimo 4 caracteres!"
            },
            apellidos: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan mínimo 8 caracteres!"
            },
            pass_user: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan mínimo 8 caracteres!"
            },
            pass2_user: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan mínimo 8 caracteres!",
               equalTo: "Las contraseñas no coinciden"
            }
        },
        submitHandler: function(form){ // con el objeto form accedo a los atributos del formulario
            
            $.ajax({
                url: $(form).attr("action"),
                type: $(form).attr("method"),
                dataType: 'html',
                data: $(form).serialize(),
                beforeSend: function () {
                    $("div#before_send").addClass("before_send");
                    $("div#spinner").addClass("spinner");
                }
            })
                    .done(function (status) {
                        if(status){
                            $.confirm({
                                title: 'Buen trabajo',
                                content: 'Revisa tu correo para continuar con el registro :)',
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    Aceptar: {
                                        text: 'Aceptar',
                                        btnClass: 'btn-green',
                                        action: function () {
                                            window.location = base_url;
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
                    .fail(function () {
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
                    .always(function () {
                        $("div#before_send").removeClass("before_send");
                        $("div#spinner").removeClass("spinner");
                    });
            return false;
        }
    });
    
});