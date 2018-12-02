<?php

// ARQUIVO  PARA VER DETALHES DE UM BOLETO

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

use app\models\Boleto;
use app\models\Entidade;

$boleto = (new Boleto)->get('codigoBoleto', $_GET['codigo']);


if($boleto) {

    $entidade = (new Entidade)->get('codigoEntidade', $boleto['codigoEntidade']);

/*
    echo toJson([
        "boleto" => $boleto,
        "entidade" => $entidade
    ]);
    return;
*/
    
    require $view->renderizar("admin_boleto_detalhes");
    return;
}

echo "Boleto não existe!";