<?php

// ARQUIVO QUE VALIDA AS INFORMAÇÕES DO FORMULÁRIO DE EDIÇÃO DE ENTIDADE E ATUALIZA NO BANCO DE DADOS
 
// se não houver usuário autenticado, envia para o login
$session->restrict("autenticado", "/login");

//echo toJson($_POST);
//return;
use app\classes\EntidadeValidate;

$validate = new EntidadeValidate($_POST);

/*
echo toJson([
    "metadata" => $validate->getValidate()->getMetadata(),
    "errors"   => $validate->getValidate()->getErrors(),
    "isValid"  => $validate->isValid(),
    "messages" => $validate->getMessages(),
    "isReady"  => $validate->getDados() 
]);
return;
*/

$dados = $validate->getDados();

//echo toJson($dados);
//return;

use app\models\Entidade;

$entidade = new Entidade;

if($dados) {

    $dados['codigoEntidade'] = $_POST['codigo'];


    try {

        $rowCount = $entidade->update($dados);

        switch($rowCount) {
            case 0 : {

                $message = "nenhuma informação foi modificada";

                $session->set('message', flash2( $message, "info") );
        
                if( $session->gets( ['autenticado', 'prefil'] ) == 2 ) {

                    redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");

            
                } else {
            
                    redirect("/entidade");
            
                }
                return;

            }
            default : {

                $message = "As informações foram atualizadas com sucesso!";

                $session->set('message', flash2( $message, "primary") );
        
                if( $session->gets( ['autenticado', 'prefil'] ) == 2 ) {

                    redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");

            
                } else {
            
                    redirect("/entidade");
            
                }

                return;

            }
        } // end switch

  
    } catch (PDOException $e) {

        //die( $e->getMessage() );

        $message = " Oops!!! Ocorreu um erro no banco de dados. <br> <strong> Descrição:</strong> {$e->getMessage()} ";

        $session->set('message', flash2( $message, "danger") );

        if( $session->gets( ['autenticado', 'prefil'] ) == 2 ) {

            redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");

    
        } else {
    
            redirect("/entidade-editar");
    
        }
        return;


    }

}

foreach($validate->getMessages() as $message) {

    $session->set('message', $message);

    if( $session->gets( ['autenticado', 'prefil'] ) == 2 ) {

        redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");
        break;

    } else {

        redirect("/entidade-editar");

    }

}

echo "Oops! Internal Server Error.";

//echo "Não existem dados para serem lidos.";