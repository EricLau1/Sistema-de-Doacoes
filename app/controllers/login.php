<?php

// se o usuário ja foi autenticado, não precisa realizar um login.
$session->auth("/admin");

require $view->renderizar("login");

