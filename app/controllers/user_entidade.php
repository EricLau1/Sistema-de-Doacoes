<?php

// ARQUIVO QUE RENDERIZA O PAINEL DO USUARIO 

// é necessário estar autenticado
$session->restrict('autenticado', '/login');

// não permite que usuário com perfil 2 acessem essa página
limitar_acesso( 2, '/login');

use app\models\Usuario;
use app\models\Entidade;
use app\models\Boleto;

$codigo = $session->gets( ['autenticado', 'codigo'] );

$usuario = (new Usuario)->get('codigoUsuario', $codigo);

$codigoEntidade = $usuario['entidade_codigoEntidade'];

//dd($codigoEntidade);

if($codigoEntidade) {

    $entidade = (new Entidade)->get('codigoEntidade', $codigoEntidade);

    $doadores = (new Boleto)->gets('codigoEntidade', $entidade['codigoEntidade']);

    $doacoes = count($doadores);

    $totalPago = [
        "quantidade" => 0,
        "valor" => 0.0
    ];
    $naoPago = [
        "quantidade" => 0,
        "valor" => 0.0
    ];

    if($doadores) {

        foreach($doadores as $doacao) {
    
            if($doacao['situacao'] == 1) {
    
                $totalPago['quantidade']++;
                $totalPago['valor'] += $doacao['valor'];
    
            } else {
    
                $naoPago['quantidade']++;
                $naoPago['valor'] += $doacao['valor'];
    
            }
    
        }
    
        /*
        echo toJson([
            "auth"     => $session->get('autenticado'),
            "usuario"  => $usuario,
            "entidade" => $entidade,
            "boletos"  => $boletos,
            "doacoes"  => $doacoes,
            "pago"     => $totalPago,
            "nao_pago" => $naoPago
        ]); 
        */
    
    } // end if


    require $view->renderizar("entidade");
    return;

}

require $view->renderizar("user_entidade_cadastro");



