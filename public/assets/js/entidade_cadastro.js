  // Necessário ter o JQuery
  $("#form-entidade-create").validate({

    rules : {
        valor : {
            required: true
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
        cnpj : {
            required: true,
            minlength: 18,
            maxlength: 18 // 00.000.000/0000-00
        },
        telefone : {
            minlength: 14, // (##)####-####
            maxlength: 14
        },
        celular : {
            
            required: true,
            minlength: 14, // (##)#####-####
            maxlength: 15
        },
        endereco : {
            required: true,
            minlength: 5,
            maxlength: 100
        },
        numero : {
            required: true
        },
        bairro : {
            required: true,
            minlength: 5,
            maxlength: 100
        }
        
    },
    messages : {

        valor: {
            required: flash("Não seja pão duro! Digite um valor alto!", ALERT_MESSAGE)
        },
        nome : {
            required: flash("Este campo é obrigatório.", ALERT_MESSAGE),
            minlength: flash("Mínimo 4 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 40 caracteres", ALERT_MESSAGE)
        },
        email : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            email: flash("É necessário informar um email válido", ALERT_MESSAGE)
        },
        cnpj : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 18 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 18 caracteres", ALERT_MESSAGE)
        },
        telefone : {
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 14 caracteres", ALERT_MESSAGE) 
        },
        celular : {
            required: flash("Informe um número de telefone ou celular", ALERT_MESSAGE),
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 15 caracteres", ALERT_MESSAGE) 
        },
        endereco : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 5 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 100 caracteres", ALERT_MESSAGE)
        },
        numero : {
            required: flash("Informe o número do local", ALERT_MESSAGE)
        },
        bairro : {
            required: flash("Este campo é obrigatório.", ALERT_MESSAGE),
            minlength: flash("Mínimo 5 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 100 caracteres", ALERT_MESSAGE)
        }
    }

});