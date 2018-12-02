<?php

// ARQUIVO  QUE CHAMA A TELA DE ENTIDADES

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
use app\models\Boleto;

$entidades = (new Entidade)->getAll();

$doacoes = array();

$boleto = new Boleto;

foreach($entidades as $entidade) {

    $entidade['bairro'] = ($entidade['bairro']);

    array_push($doacoes, [
        "codigo" => $entidade['codigoEntidade'],
        "entidade" => $entidade['nomeFantasia'], 
        "situacao" => $entidade['situacao'], 
        "doacoes" => count($boleto->gets('codigoEntidade', $entidade['codigoEntidade']))
    ]);

}

//echo toJson($doacoes);
//return;

require $view->renderizar("admin_entidade");