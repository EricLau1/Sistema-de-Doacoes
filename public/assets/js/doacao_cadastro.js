  // Necessário ter o JQuery
  $("#form-doacao-create").validate({

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
        cpf : {
            required: true,
            minlength: 14,
            maxlength: 14 // 000.000.000-00
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
            required: true,
            min: 1,
            max: 99999
        },
        bairro : {
            required: true,
            minlength: 5,
            maxlength: 100
        },
        cidade: {
            required: true,
            minlength: 2,
            maxlength: 100
        },
        cep : {
            required: true,
            minlength: 9,
            maxlength: 10
        },
        estado :{
            required: true,
            minlength: 2,
            maxlength: 2
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
        cpf : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 14 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 14 caracteres", ALERT_MESSAGE)
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
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            min: flash("Número mínimo 1", ALERT_MESSAGE),
            max: flash("Número máximo 99999", ALERT_MESSAGE)
        },
        bairro : {
            required: flash("Este campo é obrigatório.", ALERT_MESSAGE),
            minlength: flash("Mínimo 5 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 100 caracteres", ALERT_MESSAGE)
        },
        cidade: {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 2 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 100 caracteres", ALERT_MESSAGE)
        },
        cep : {
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 9 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 10 caracteres", ALERT_MESSAGE)
        },
        estado :{
            required: flash("Este campo é obrigatório", ALERT_MESSAGE),
            minlength: flash("Mínimo 2 caracteres", ALERT_MESSAGE),
            maxlength: flash("Máximo 2 caracteres", ALERT_MESSAGE)
        }
    }

});