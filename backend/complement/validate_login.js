$(document).ready(function() {
    $("form").validate
    ({
        rules:
        {
            //Email y Password son el tipo de los input
            email: {required: true, email: false, maxlength:50},
            password: {required: true, maxlength: 20 }
        },
        messages:
        {
            email:{required: 'Ingrese su email o usuario',  maxleght: 'El máximo permitido son 50 caracteres'},
            password: {required: "Ingrese su contraseña", maxlength: "Debe tener menos de 20 carácteres" }
            
        }
    });
});