<?php


// ARQUIVO QUE VALIDA AS INFORMAÇÕES VINDAS DO FORMULÁRIO DE LOGIN

use app\filtros\Filter;

if(empty($_POST)) {

    redirect("/login");

}

// retira todos os espaços em branco  do inicio ou fim de uma string
$atributos = trimAll($_POST);

// filtra todas as strings do Array com a biblioteca sanitize
$atributos = Filter::text($atributos);

use app\classes\Login;

// envia os dados dos atributos para o construtor
$login = new Login($atributos);

// executa o login
$user = $login->signin();

// se o login estiver realizado com sucesso irpa retornar o usuário cadastrado no banco
if($user) {

    
    $perfil = $user['perfil'];

    $session->set("autenticado", [ 
        "status" => true, 
        "codigo" => $user['codigoUsuario'],
        "perfil" => $perfil
        ]
    );

    session_regenerate_id();

    //dd($perfil);

    acessar_perfil();

}

// caso ocorra algum erro no login
$session->set( "message", flash($login->getAlert(), "danger") );

redirect("/login");

