<?php

use app\classes\UsuarioValidate;
use app\models\Usuario;

$validate = new UsuarioValidate($_POST);



 // VISUALIZAR INFORMAÇÕES ANTES DE SALVAR
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

if($dados) {


    try {

        $user = new Usuario;
        
        if($user->create($dados)) {
    
            $session->set('message', flash("Conta criada com sucesso!", "success") );
    
            redirect("/login");
        
        }
    
    } catch(PDOException $e) {
    
        dd($e->getMessage());
    
    }


}

foreach($validate->getMessages() as $message) {

    $session->set('message', $message);

    redirect("/user-cadastro");
    break;

}

echo "Oops! Internal Server Error.";
