<?php

// ARQUIVO QUE CHAMA O PAINEL DE ADMINISTRADOR

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
    "status" => $user['situacao']
];


//dd($admin);

unset($user);

use app\models\Boleto;

$boletos = (new Boleto)->getAll();

$totalPago = 0.0;
$naoPago = 0.0;

foreach($boletos as $boleto) {

    if($boleto['situacaoString'] == 'pago') {

        $totalPago += $boleto['valor'];

    } else {

        $naoPago += $boleto['valor'];

    }

}

$totalPago = number_format($totalPago, 2);
$naoPago = number_format($naoPago, 2);

require $view->renderizar("admin");