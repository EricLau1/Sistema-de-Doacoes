<?php

// se o usuário ja foi autenticado, não precisa realizar um login.
$session->auth("/admin-gui");

require $view->renderizar("login");

