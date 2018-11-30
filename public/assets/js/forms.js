$("#telefone").mask("(00) 0000-0000");

//$("#celular").mask("(00) 0000-00009");

$("#celular").mask("(99) 9999-99999")
    .focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-9999");  
        } else {  
            element.mask("(99) 9999-99999");  
        }  
    });

$("#cpf").mask("000.000.000-00");
$("#cnpj").mask("00.000.000/0000-00");
$("#cep").mask("00.000-000");
$("#preco").mask("999.999.990,00", { reverse: true });
$("#uf").mask('SS');

$("#cpf").keyup(function() {

    var count = $("#cpf").val().length;

    if(count > 0) {

        var content = "Você digitou " + count + " caracteres. ";

        $("#cpf-digitos").html(content);

    } 
    else {

        $("#cpf-digitos").html("");

    }

});

$("#cep").keyup(function() {

    var count = $("#cep").val().length;

    if(count > 0) {

        var content = "Você digitou " + count + " caracteres. ";

        $("#cep-digitos").html(content);

    } 
    else {

        $("#cep-digitos").html("");

    }

});


$('#preco').keyup(function () {

    $('#span-valor').html( "Você digitou: R$ " + $('#preco').val() + " reais.");

});

$('#preco').blur(function () {

    $('#span-valor').html( "Você digitou: R$ " + $('#preco').val() + " reais.");

});
