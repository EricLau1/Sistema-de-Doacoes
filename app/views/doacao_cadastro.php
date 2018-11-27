<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sistema de Doações | Doação</title>

    <link rel="stylesheet" href="assets/css/style.css" />
    
    <link rel="stylesheet" href="assets/css/user_create.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


  </head>
  <body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
            
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
        
            </div>

        </div> <!-- end row -->

        <div class="row">

            <div class="col-md-12">

                <br />

                <h5>Faça sua doação e ajude quem precisa!</h5>

                <hr />

                <?= $session->message(); ?>

                <form action="/doacao-create" id="form-doacao-create" method="POST" >
                
                    <div class="form-group">

                        <label for="entidade"> Doe para: </label>

                        <select name="entidade" id="entidade" class="form-control">
                            
                            <option value="0" > SELECIONE </option>

                            <?php foreach($dados_entidade as $entidade): ?>

                                <option value="<?= $entidade['codigo'] ?>"> <?= $entidade['nome_fantasia'] ?></option>

                            <?php endforeach; ?>

                        </select>
                    
                    </div>

                    <div class="form-row">

                        <div class="col-md-12">
                            <div class="form-group">
                            
                                <label for="preco"> <strong>Informe um valor</strong> </label>  
                                <input type="text" name="valor" id="preco" class="form-control form-control-lg" placeholder="R$ 100,00" />
                                <small id="span-valor"></small>
                            </div>
                        </div>
                    </div> <!-- end form-row -->

                    <h5>Dados pessoais</h5>

                    <hr />
                    <div class="form-row">

                        
                        <div class="col-md-6" >
                                                
                            <div class="form-group">
                            
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome completo"/>
                            
                            </div>

                            <div class="form-group">
                                    
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe seu telefone para contato" />

                            </div>

                        </div> <!-- end col-md-6 -->

                        <div class="col-md-1"></div>

                        <div class="col-md-5">

                            <div class="form-group">
                            
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Seu email" />
                            
                            </div>
                        
                            <div class="form-group">
                            
                                <label for="celular">Celular</label>
                                <input type="text" name="celular" id="celular" class="form-control" placeholder="Informe seu número de celular" />

                            </div>

                        </div> <!-- end col-md-6 -->

                    </div> <!-- end form-row -->

                    <div class="form-row">
      
                        <div class="col-md-6">
    
                            <div class="form-group">

                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe seu CPF" />
                                <small id="cpf-digitos" ></small>
                            </div>
    
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5">

                            <div class="form-group">
                                <label for="cpf">CNPJ</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="Informe seu CNPJ" />
                                <small id="cnpj-digitos" ></small>
                            </div>

                        </div>
                    
                    </div> <!-- end form-row -->

                    <div class="form-row">
                    
                        <div class="col-md-6">

                            <div class="form-group">

                                <label for="endereco"> Endereço </label>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço: Rua, número">

                            </div>
                        
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5">
                        
                            <div class="form-group">
                            
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Informe seu bairro" />

                            </div>
                        
                        </div>
                    
                    </div> <!-- end form-row -->

                    <div class="form-row">
                    
                        <div class="col-md-5">

                            <div class="form-group">

                                <label for="cidade"> Cidade </label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Informe a cidade" />
                                
                            </div>
                            
                        </div>

                        
                        <div class="col-md-5">

                            <div class="form-group">

                                <label for="cep"> CEP </label>
                                <input type="text" name="cep" id="cep" class="form-control" placeholder="Informe seu CEP" />
                                <small id="cep-digitos" ></small>
                            </div>

                        </div>
                        

                        <div class="col-md-2">
                        
                            <div class="form-group">
                            
                                <label for="estado">Estado/UF</label>
                                <input type="text" name="estado" id="estado" class="form-control" />

                            </div>
                            
                        </div>

                    </div> <!-- end row -->

                    <hr />
                    <div class="form-group">

                        <button type="submit" class="btn btn-success">Doar <i class="fas fa-heart"></i></button>
                        <button type="reset" class="btn btn-outline-info">Reset</button>
                    
                    </div>

                </form> <!-- end form -->

            </div> <!-- end col-md-12 -->
        
        </div> <!-- end row -->


    </div> <!-- end container -->

    <!-- Add JQuery -->
    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/jquery.validate.js"></script>

    <script src="assets/js/jquery.mask.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- scripts criados pelo desenvolvedor -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/doacao_cadastro.js"></script>

  </body>
</html>