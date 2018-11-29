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