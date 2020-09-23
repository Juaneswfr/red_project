$(document).ready(function() {
    $("form").validate
    ({
        rules:
        {
            name: {required: true, minlength: 2, maxlength: 60},
            user: {required: true, minlength: 5, maxlength: 20},
            email: {required: true, email: true, minlength: 5, maxlength:50},
            password: {required: true, minlength: 5, maxlength: 20 },
            confirm_password: {required: true, minlength: 5, maxlength: 20, equalTo: "#password"}
        },
        messages:
        {
            name: {required: "Este campo es obligatorio", minlength: "Este campo debe tener mínimo 2 caracteres", maxlength: "Este campo debe tener menos de 60 caracteres"},
            user: {required: "Este campo es obligatorio", minlength: "Este campo debe tener mínimo 5 caracteres", maxlength: "Este campo debe tener menos de 20 caracteres"},
            email:{required: 'Este campo es obligatorio', email: 'El formato de email es incorrecto', minlength:'El mínimo permitido es de 5 caracteres', maxleght: 'El máximo permitido son 50 caracteres'},
            password: {required: "Este campo es obligatorio", minlength: "Debe tener al menos 5 caracteres", maxlength: "Debe tener menos de 20 carácteres" },
            confirm_password: {required: "Este campo es obligatorio", minlength: "Debe tener al menos 5 caracteres", maxlength: "Debe tener menos de 20 carácteres", equalTo: "Las contraseñass no coinciden"}
        }
    });
});