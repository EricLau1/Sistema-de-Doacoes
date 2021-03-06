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
    <title> Admin | Boleto Detalhes </title>

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
                        <li class="has-sub active">
                            <a class="js-arrow" href="/admin-gui">
                                <i class="fas fa-tachometer-alt"></i>Painel
                            </a>
                        </li>
                        <li>
                            <a href="admin-entidades">
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
                                                        <img src="assets/images/admin-avatar.svg" alt="administrador" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">@<?= $admin['nome'] ?></a>
                                                    </h5>
                                                    <span class="email"> <?= $admin['email']; ?></span>
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
                           
                           </div>
                            
                        </div>

                        <div class="row">
      
                            <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Boleto # <?= $boleto['codigoBoleto'] ?></h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td><em>Vencimento</em></td>
                                                    <td class='text-danger'><?= (new DateTime($boleto['dataVencimento']))->format("d M Y"); ?></td>
                                                </tr>
                                                <tr>
                                                    <td> <em>Benificiário</em> </td>
                                                    <td class="text-success"> 
                                                        <a href="/admin-entidade-detalhes?codigo=<?= $entidade['codigoEntidade']; ?>">
                                                            <?= $entidade['nomeFantasia']; ?>
                                                        </a>
                                                    </td>
                                                </tr>
                                        
                                                <tr>
                                                    <td > <em> Data da emissão </em> </td>
                                                    <td class="text-dark"> <?= (new DateTime($boleto['dataEmissao']))->format("d M Y"); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td><em>Nº do documento</em></td>
                                                    <td class="text-dark"><?= $boleto['numero']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em>Data do Pagamento</em></td>
                                                    <td class="text-dark"><?= (new DateTime($boleto['dataPagamento']))->format("d M Y"); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark"><em><strong>Valor</strong></em></td>
                                                    <td class="text-success"> R$ <?= number_format($boleto['valor'], 2); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em><strong>Pagador</strong></em></td>
                                                    <td class="text-dark"><?= $boleto['nome']; ?></td>
                                                </tr>

                                                <?php if(!empty($boleto['cnpj'])): ?>
                                                <tr>
                                                    <td><em>CNPJ</em></td>
                                                    <td class="text-dark"><?= $boleto['cnpj']; ?></td>
                                                </tr>
                                                <?php endif; ?>

                                                <?php if(!empty($boleto['cpf'])): ?>
                                                <tr>
                                                    <td><em>CPF</em></td>
                                                    <td class="text-dark"><?= $boleto['cpf']; ?></td>
                                                </tr>
                                                <?php endif; ?>

                                                <tr>
                                                    <td><em>Endereço</em></td>
                                                    <td class="text-dark"><?= $boleto['endereco']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em>CEP</em></td>
                                                    <td class="text-dark"><?= $boleto['cep']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em>Bairro</em></td>
                                                    <td class="text-dark"><?= $boleto['bairro']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em>Cidade</em></td>
                                                    <td class="text-dark"><?= $boleto['cidade']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td><em>Estado</em></td>
                                                    <td class="text-dark"><?= $boleto['estado']; ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-danger">Notificar via email</td>
                                                    <td>
                                                        <button class="role admin"> Email </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Dar baixa</td>
                                                    <td>
                                                        <button class="role member"  > Baixa </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
  
                            </div>
                            
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                
                                <!-- END DATA TABLE-->
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
    <!-- Bootstrap JS-->
    <script src="assets/admin-gui/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/admin-gui/vendor/bootstrap-4.1/bootstrap.min.js"></script>


    <!-- Vendor JS       -->
    <script src="assets/admin-gui/vendor/animsition/animsition.min.js"></script>

    <script src="assets/admin-gui/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>

     
    <!-- Main JS-->
    <script src="assets/admin-gui/js/main.js"></script>

</body>

</html>
<!-- end document-->
