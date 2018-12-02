window.onload = function() {
            
    var btn_impressao = document.querySelector("#btn-impressao");

    console.log(btn_impressao);

    var token = document.querySelector("#token");

    console.log(token);
    console.log(token.value);

    btn_impressao.onclick = function () {     

        window.open("/boleto-impressao?token=" + token.value , "_blank");
        
        window.location.href = "/home";

    }

}
