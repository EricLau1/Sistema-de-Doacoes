var inputSenha = document.querySelector("#senha");

var inputRepitaSenha = document.querySelector("#repita-senha");

// quando o usuário sai do input repita senha executa este script
inputRepitaSenha.onblur = function () {

    // verfica se o valores são iguais
    if(inputSenha.value !== inputRepitaSenha.value) {

        alert('Senhas diferentes');

        inputSenha.focus();
        inputRepitaSenha.value = "";

    }
}

// Necessário ter o JQuery
$("#form-user-create").validate({

    rules : {

        usuario : {
            required: true,
            minlength: 4,
            maxlength: 25
        },
        nome : {
            required: true,
            minlength: 4,
            maxlength: 40
        },
        email : {
            required: true, 
            email: true
        },
        cpf : {
            required: true,
            minlength: 14,
            maxlength: 14
        },
        telefone : {
            minlength: 14, // (##) ####-####
            maxlength: 14
        },
        celular : {
            minlength: 14, // (##) #####-####
            maxlength: 15
        },
        senha : {
            required: true,
            minlength: 3,
            maxlength: 25
        },
        

    },
    messages : {

        usuario : {
            required:  flash("Este campo é obrigatório.", ALERT_MESSAGE),
            minlength: flash("Mínimo 3 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 25 caracteres.", ALERT_MESSAGE)
        },
        nome : {
            required:  flash("Este campo é obrigatório.", ALERT_MESSAGE),
            minlength: flash("Mínimo 4 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 40 caracteres", ALERT_MESSAGE)
        },
        email : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            email:    flash("É necessário informar um email válido", ALERT_MESSAGE)
        },
        cpf : {
            required:  flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 14 caracteres", ALERT_MESSAGE)
        },
        telefone : {
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 14 caracteres", ALERT_MESSAGE) 
        },
        celular : {
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 15 caracteres", ALERT_MESSAGE) 
        },
        senha : {
            required:  flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 3 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 25 caracteres", ALERT_MESSAGE) 
        }
    }

});



