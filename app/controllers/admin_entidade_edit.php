<?php

// se não houver usuário autenticado, envia para o login
$session->restrict("autenticado", "/login");

use app\models\Usuario;

$codigo_usuario = $session->gets(['autenticado', 'codigo']);

$user = (new Usuario())->get("codigoUsuario",  $codigo_usuario);

$admin = [
    "nome"   => $user['nome'],
    "email"  => $user['email'],
    "perfil" => $user['perfil'],
    "status" => $user['situacao']
];


//dd($admin);

unset($user);

use app\models\Entidade;

$entidade = (new Entidade)->get('codigoEntidade', $_GET['codigo'] );

//echo toJson($entidade);

require $view->renderizar("admin_entidade_edit");