<?php

// ARQUIVO  PARA VER OS DETALHES DE UMA ENTIDADE PARA O ADMINISTRADOR

// se não houver usuário autenticado, envia para o login
$session->restrict("autenticado", "/login");

// necessário ter o Perfil 2 para acessar está página
adminRequired();


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

$entidade = (new Entidade)->get('codigoEntidade', $_GET['codigo']);


if($entidade) {

    //echo toJson($entidade); return;
    
    require $view->renderizar("admin_entidade_detalhes");
    return;
}

echo "Entidade não existe!";