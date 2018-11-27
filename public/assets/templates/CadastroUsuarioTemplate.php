<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sistema de Doações | Criar conta</title>

    <link rel="stylesheet" href="assets/css/style.css" />
    
    <link rel="stylesheet" href="assets/css/user_create.css" />


  </head>
  <body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">Sistema de Doações</a>
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

            <div class="col-md-12">

                <br />

                <h5>Criar conta</h5>

                <hr />

                <form action="/user-create" id="form-user-create" method="POST" >
                
                    <div class="form-row">

                        
                        <div class="col-md-6" >
                            
                            <div class="form-group">
                            
                                <label for="usuario">Nome de usuário</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Crie um nome de usuário único"/>
                            
                            </div> <!-- end form-group -->
                        
                            <div class="form-group">
                            
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome completo"/>
                            
                            </div>

                            <div class="form-group">
                            
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Seu email" />
                            
                            </div>

                            <div class="form-group">

                                <label for="cpf" id="label-cpf" >CPF/CNPJ</label> <br/>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe seu CPF" />
                                <small id="cpf-digitos" ></small>

                            </div>

                        </div> <!-- end col-md-6 -->

                        <div class="col-md-1"></div>

                        <div class="col-md-5">
                        
                            <div class="form-group">
                            
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe seu telefone para contato" />

                            </div>

                            <div class="form-group">
                            
                                <label for="celular">Celular</label>
                                <input type="text" name="celular" id="celular" class="form-control" placeholder="Informe seu número de celular" />

                            </div>

                        <div class="form-group">
                            
                            <label for="senha"> Senha </label>
                            <input type="text" name="senha" id="senha" class="form-control" placeholder="Crie uma senha" />

                        </div> <!-- end form-group -->

                        <div class="form-group">
                            
                            <label for="repita-senha"> Repita a senha </label>
                            <input type="text" id="repita-senha" class="form-control" placeholder="Digite a senha mais uma vez" />

                        </div> <!-- end form-group -->

                        </div> <!-- end col-md-6 -->

                    </div> <!-- end form-row -->

                    <hr />
                    <div class="form-group">

                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                        <button type="reset" class="btn btn-outline-info">Reset</button>
                    
                    </div>

                </form> <!-- end form -->

            </div> <!-- end col-md-12 -->
        
        </div> <!-- end row -->


    </div> <!-- end container -->

    <!-- Add JQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Add Validate JS , como usar: http://www.linhadecodigo.com.br/artigo/3706/jquery-validate-validacao-de-formularios-html.aspx  -->
    <script src="assets/js/jquery.validate.min.js"></script>

    <!-- add Jquery mask plugin, site: https://igorescobar.github.io/jQuery-Mask-Plugin/ -->
    <script src="assets/js/jquery.mask.min.js"></script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <script src="assets/js/main.js"></script>
    <script src="assets/js/user_cadastro.js"></script>
  </body>
</html>