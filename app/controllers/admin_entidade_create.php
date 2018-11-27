<?php

// se não houver usuário autenticado, envia para o login
$session->restrict("autenticado", "/login");

use app\classes\EntidadeValidate;

$validate = new EntidadeValidate($_POST);
/*
echo toJson([
    "metadata" => $validate->getValidate()->getMetadata(),
    "errors"   => $validate->getValidate()->getErrors(),
    "isValid"  => $validate->isValid(),
    "messages" => $validate->getMessages(),
    "ready"    => $validate->getDados() 
]);
return;
*/
$dados = $validate->getDados();

//echo toJson($dados);
//return; 

use app\models\Entidade;

if($dados) {

    // echo toJson($dados);
    //return; 

    try {

        $entidade = new Entidade;

        if($entidade->create($dados)) {

            $session->set('message', flash2("Entidade criada com sucesso!", "success") );
    
            redirect("/admin-entidades");

        }

    } catch(PDOException $e) {

        die($e->getMessage());


    }

}

foreach($validate->getMessages() as $message) {

    $session->set('message', $message);

    redirect("/admin-entidade-cadastro");
    break;

}

echo "Oops! Internal Server Error.";