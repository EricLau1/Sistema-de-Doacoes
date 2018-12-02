window.onload = function () {

    console.log('pagina carregada.');

    var btn_imprimir = document.querySelector("#btn-imprimir");
    
    console.log(btn_imprimir);

    btn_imprimir.onclick = function () {

        console.log('vc ciclou');

        btn_imprimir.style.display = 'none';

        window.print();
        window.close();
    }

}
