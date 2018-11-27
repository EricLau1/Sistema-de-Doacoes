<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login Template</title>

    <!-- linkar os arquivos de css na pasta assets -->
    <link rel="stylesheet" href="assets/css/login.css" />

  </head>
  <body class="text-center bg-white">

    <form class="form-signin" action="/login" method="POST">
      <img class="mb-4" src="assets/images/brasao-assis.jpg" alt="Ícone prefeitura de Assis" width="72" height="72">
      
      <h1 class="h3 mb-3 font-weight-normal">Entre com sua conta</h1>

      <label for="usuario" class="sr-only"> Nome de usuário </label>
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nome de usuário ou Email" required autofocus>
      
      <label for="senha" class="sr-only">Digite sua senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite a senha" required>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar
        </label>
      </div>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <a href="/home" class="btn btn-link" >Home</a>
      
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    
    </form> <!-- end form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>