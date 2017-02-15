$(function(){
    // función agregada manualmente para validar campos de texto y estos solo acepten letras
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Solo se aceptan letras!"); 
    // fin de la nueva función lettersonly
    
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
                minlength: "Se necesitan minimo 4 caracteres!"
            },
            apellidos: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan minimo 8 caracteres!"
            },
            pass_user: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan minimo 8 caracteres!"
            },
            pass2_user: {
               required: "Es necesario llenar este campo!",
               minlength: "Se necesitan minimo 8 caracteres!",
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
                    .done(function (datos) {
                        if(datos){
                            //document.getElementById("registrar").reset();
                            $.confirm({
                                title: 'Buen tranajo!',
                                content: 'Reviza tu correo para continuar con el registro',
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    Aceptar: {
                                        text: 'Aceptar',
                                        btnClass: 'btn-green',
                                        action: function () {
                                        }
                                    }
                                }
                            });
                        }
                        else{
                            alert("A ocurrido algún inconveniente intentalo más tarde");
                        }
                    })
                    .fail(function () {
                        console.log("error: no existe controlador y/o metodo");
                    })
                    .always(function () {
                        $("div#before_send").removeClass("before_send");
                        $("div#spinner").removeClass("spinner");
                    });
            return false;
        }
    });
    
});