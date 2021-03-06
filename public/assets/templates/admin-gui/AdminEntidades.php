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
    <title>Administrador | Entidades</title>

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
                            <a href="#">
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
                            <a href="#">
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
      
                            <div class="col-md-12 text-right">

                                <span class="role user" id="new-entity" > Nova entidade </span>
                                
                            </div>
                        </div>
           
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Entidade</th>
                                                <th>Situação</th>
                                                <th>Doações</th>
                                                <th>Detalhes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($doacoes as $doacao): ?>
                                            <tr>
                                                <td><?= $doacao['entidade']; ?></td>
                                                
                                                <?php if($doacao['situacao'] != 0): ?>

                                                    <td class='process'>ativo</td>

                                                <?php else: ?>

                                                    <td class="denied">não ativo</td>

                                                <?php endif; ?>
                                                
                                                <td><?= $doacao['doacoes']; ?></td>

                                                <td><a href="/admin-entidade-detalhes?codigo=<?= $doacao['codigo']; ?>" class="btn btn-link"> ver mais </a></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
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

    <!-- Main JS-->
    <script src="assets/admin-gui/js/main.js"></script>

    <script >
    
        var new_entity = document.querySelector("#new-entity");

        new_entity.style.cursor = 'pointer';

        new_entity.onclick = function () {

            window.location.href="/admin-entidade-cadastro";

        }

    </script>

</body>

</html>
<!-- end document-->
