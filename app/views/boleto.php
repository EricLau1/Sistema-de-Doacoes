<?php

 // $gerarBoleto->gerar();

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Boleto pronto para impressão</title>

  </head>
  <body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sistema de Doações</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                </ul>
                <span class="navbar-text">
                    <a href="/login" class="btn btn-outline-warning">Login</a>
                    <a href="/user-cadastro" class="btn btn-outline-primary"> Criar conta </a>
                </span>
            </div>
        </nav> <!-- end nav -->
    
        <div class="row">

            <div class="col-lg-12">
                
                <div class="jumbotron bg-white text-center">
                    <h1 class="display-4">Obrigado pela doação!</h1>
                    <p class="lead">Você é uma pessoa especial <i class="fas fa-smile-beam"></i></p>
                    <hr class="my-4">
                    <p>Thansks!!!</p>
                    <button type="button" class="btn btn-outline-success btn-lg" id="btn-impressao" role="button">Clique para imprimir o Boleto <i class="fas fa-check"></i></button>
                </div>

            </div>
        
        </div>



    </div> <!-- end container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script>
    
            window.onload = function() {
            
                var btn_impressao = document.querySelector("#btn-impressao");

                console.log(btn_impressao);

                btn_impressao.onclick = function () {

                    window.open("/boleto-impressao?token=<?=$token;?>", "_blank");
                    
                    window.location.href = "/home";

                }

            }

            //

    
    </script>
  
  </body>
</html>