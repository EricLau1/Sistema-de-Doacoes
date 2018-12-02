<?php
    // ARQUIVO PARA IMPRIMIR O BOLETO
    $session->restrict('boleto', '/home');
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOLETO</title>
    <script src="assets/js/boleto_impressao.js"></script>
</head>
<body>
    
    <button type="button" id="btn-imprimir" >Imprimir</button>

    <?php

        use app\classes\GerarBoleto;

        if($_SESSION['boleto']['status'] == 'OK') {

            // compara se o token da url e o mesmo da sessão
            if($_GET['token'] == $_SESSION['boleto']['token']) {

                /*
                echo toJson([
                    "message" => "tokens iguais",
                    "url" => $_GET,
                    "session" => $_SESSION['boleto']
                ]);
                    */

                // gera o boleto
                $_SESSION['boleto']['doc']->gerar();
                
            }

        }

        // destroi a sessão
        $session->destruct('boleto');
        return;

    // se essa página for atualizada (F5) irá retornar para a home
    ?>

 
</body>
</html>





