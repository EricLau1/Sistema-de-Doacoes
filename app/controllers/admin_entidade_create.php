<?php

// ARQUIVO PARA VALIDAR AS INFORMAÇÕES DO FORMULÁRIO DE CADASTRO DE ENTIDADE E SALVAR NO BANCO DE DADOS

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

     //echo toJson($dados);
     //return; 

    try {

        $entidade = new Entidade;

        if($entidade->create($dados)) {

            $session->set('message', flash2("Entidade criada com sucesso!", "success") );
    
            if( $session->gets(['autenticado', 'perfil']) == 2 ) {

                //dd("PERFIL 2");

                redirect("/admin-entidades");
                return;
        
            } else {
                //dd("PERFIL 1");

                $session->set('new', [
                    'sessao' => $session->get('autenticado'),
                    'entidade' => $dados['email']
                ]);

                redirect("/entidade-create");
                return;
            }

            
        }

    } catch(PDOException $e) {

        die($e->getMessage());


    }

}

foreach($validate->getMessages() as $message) {

    $session->set('message', $message);

    if( $session->gets( ['autenticado', 'perfil']) == 2 ) {

        redirect("/admin-entidade-cadastro");
        break;

    } else {

        redirect("/entidade");
        break;

    }


}

echo "Oops! Internal Server Error.";