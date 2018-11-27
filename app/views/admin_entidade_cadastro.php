<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Autor deste template -->
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Entidade | Cadastro</title>

     <!-- Fontfaces CSS-->
     <link href="assets/admin-gui/css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="assets/admin-gui/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/admin-gui/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/admin-gui/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/admin-gui/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/admin-gui/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/admin-gui/css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="assets/admin-gui/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin-gui">
                                <i class="fas fa-tachometer-alt"></i>Painel
                            </a>
                        </li>
                        <li>
                            <a href="/admin-entidades">
                            <i class="fas fa-hands-helping"></i>Entidades
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="assets/admin-gui/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin-gui">
                                <i class="fas fa-tachometer-alt"></i>Painel
                            </a>
                        </li>
                        <li class="active">
                            <a href="/admin-entidades">
                                <i class="fas fa-hands-helping"></i>Entidades 
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">

                            <!-- BUSCAR -->

                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>


                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="assets/images/admin-avatar.svg" alt="administrador" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="assets/images/admin-avatar.svg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">@admin</a>
                                                    </h5>
                                                    <span class="email">admin@email.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Editar
                                                    </a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Segurança
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-12">

                                <?= $session->message(); ?>  
                                
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
      
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Entidade</strong>
                                        <small> formulário </small>
                                    </div>
                                    <form id="form-entidade-create" class="card-body card-block" action="admin-entidade-create" method="POST">
                                        
                                        <div class="form-group">
                                            <label for="nome" class=" form-control-label">Nome </label>
                                            <input type="text" name="nome" id="nome" placeholder="Informe o nome" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Informe o email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="cnpj" class=" form-control-label">CNPJ</label>
                                            <input type="text" name="cnpj" id="cnpj" placeholder="informe seu CNPJ" class="form-control">
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telefone" class=" form-control-label">Telefone</label>
                                                    <input type="text" name="telefone" id="telefone" placeholder="Informe seu telefone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="celular" class=" form-control-label">Celular</label>
                                                    <input type="text" name="celular" id="celular" placeholder="Informe seu celular" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="endereco" class=" form-control-label">Endereço</label>
                                                    <input type="text" name="endereco" id="endereco" placeholder="Informe o endereço" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="numero" class=" form-control-label">Número</label>
                                                    <input type="number" min="1" name="numero" id="numero" placeholder="Informe o número" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="bairro" class=" form-control-label">Bairro</label>
                                            <input type="text" name="bairro" id="bairro" placeholder="Informe o bairro" class="form-control">
                                        </div>

                                        <span> <strong><em> Situação</em></strong></span>
                                        <div class="form-group">
                                            
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="situacao" id="situacao-1" value="1">
                                                <label class="form-check-label" for="situacao-1">ativo</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="situacao" id="situacao-0" value="0" checked>
                                                <label class="form-check-label" for="situacao-0">não ativo</label>
                                            </div>
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="preco" class=" form-control-label">Valor Boleto R$:</label>
                                            <input type="text" name="valor" id="preco" placeholder="Valor em R$" class="form-control">
                                            <small id="span-valor"></small>
                                        </div>

                                        <br>

                                        <div class="form-group text-right">
                                            
                                            <button type="submit" class="role admin">Salvar</button>
                                            <button type="reset" class="role user">Limpar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/admin-gui/vendor/jquery-3.2.1.min.js"></script>

    <!-- Add Validate JS , como usar: http://www.linhadecodigo.com.br/artigo/3706/jquery-validate-validacao-de-formularios-html.aspx  -->
    <script src="assets/js/jquery.validate.js"></script>

    <!-- add Jquery mask plugin, site: https://igorescobar.github.io/jQuery-Mask-Plugin/ -->
    <script src="assets/js/jquery.mask.js"></script>

    <!-- Bootstrap JS-->
    <script src="assets/admin-gui/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/admin-gui/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS       -->
    <script src="assets/admin-gui/vendor/animsition/animsition.min.js"></script>

    <!-- Main JS-->
    <script src="assets/admin-gui/js/main.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/entidade_cadastro.js"></script>
</body>

</html>
<!-- end document-->
