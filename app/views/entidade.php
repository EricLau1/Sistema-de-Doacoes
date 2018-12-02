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
    <title> Usuário | <?= $usuario['nome'] ?> </title>

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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Painel
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-hands-helping"></i>Entidade
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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Painel
                            </a>
                        </li>
                        <li>
                            <a href="/entidade-editar">
                                <i class="fas fa-hands-helping"></i>Entidade 
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
                                            <img src="assets/images/pikachu.svg" alt="usuário" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $usuario['usuario'] ?></a>
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
                                                        <a href="#">@<?= $usuario['nome'] ?></a>
                                                    </h5>
                                                    <span class="email"> <?= $usuario['email']; ?></span>
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

                        </div>
                        <div class="row">
      
                            <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30"><?= $entidade['nomeFantasia'] ?></h3>
                                    <?php if($entidade['situacao'] == 1): ?>
                                    <p class="text-right"> 
                                        Entidade <strong class="text-success"> <i class="fas fa-check"></i> <em>Ativa</em></strong>
                                    </p>
                                    <?php else: ?>
                                    <p class="text-right"> 
                                        Entidade <strong class="text-danger"> <i class="fas fa-times"></i> <em>Não-ativa</em></strong>
                                    </p>
                                    <?php endif; ?>

                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php if($doacoes): ?>
                                                    <tr>
                                                        <td class="text-dark"> <strong> <em> Doadores </em> </strong> </td>
                                                        <td class="text-primary"> <strong> <?= $doacoes ?> </strong> </td>
                                                    </tr>
                                                <?php else: ?>
                                                    <tr>
                                                        <td class="text-dark"><strong> <em> Doadores </em> </strong></td>
                                                        <td class="text-secondary"> <strong> Nenhum </strong> </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <tr>
                                                    <td class="text-dark"> <strong> Boletos pagos </strong> </td>
                                                    <td><?= $totalPago['quantidade']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark"> <strong> Boletos não-pagos </strong> </td>
                                                    <td><?= $naoPago['quantidade']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark"> <strong> Número de doações </strong> </td>
                                                    <td><?= $doacoes ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark"> <strong> Total pago </strong></td>
                                                    <td > <span class="role user">  <?= number_format($totalPago['valor'], 2); ?> R$ </span> </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark"> <strong> Não pago </strong> </td>
                                                    <td > <span class="role admin"> <?= number_format($naoPago['valor'], 2); ?> R$ </span> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <br>
                                                        <button class="role member" id="novo-boleto" > Fazer doação </button>
                                                    </td>
                                                    <td> </td>
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
                                <h4>Doadores</h4>
                            </div>
                            
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <?php if($doacoes > 0): ?>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Doador</th>
                                                <th>Email</th>
                                                <th>Situação</th>
                                                <th>Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($doadores as $doador): ?>
                                            <tr>
                                                <td> <?= $doador['nome'] ?> </td>
                                                <td> <a href="#"> <?= $doador['email'] ?> </a> </td>

                                                <?php if($doador['situacao'] == 1): ?>

                                                    <td class="process"><?= $doador['situacaoString'] ?> </td>
                                                
                                                <?php else: ?>

                                                    <td class="denied"><?= $doador['situacaoString'] ?></td>

                                                <?php endif; ?>

                                                <td> <strong> <?= $doador['valor'] ?> </strong> R$ </td>
                                                
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php else:?>
              
                                        <h3>Não possui doadores ainda.</h3>
 
                                <?php endif;?>
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

    <script src="assets/js/button.novoBoleto.js"></script>

</body>

</html>
<!-- end document-->
