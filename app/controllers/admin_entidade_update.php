<?php

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

                $message = "nenhuma informação foi modifcada";

                $session->set('message', flash2( $message, "info") );
        
                redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");
                return;

            }
            default : {

                $message = " <strong> <em>{$rowCount} linha </em></strong> foi modificada com sucesso!";

                $session->set('message', flash2( $message, "success") );
        
                redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");
                return;

            }
        } // end switch

  
    } catch (PDOException $e) {

        //die( $e->getMessage() );

        $message = " Oops!!! Ocorreu um erro no banco de dados. <br> <strong> Descrição:</strong> {$e->getMessage()} ";

        $session->set('message', flash2( $message, "danger") );

        redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");
        return;


    }

}

foreach($validate->getMessages() as $message) {

    $session->set('message', $message);

    redirect("/admin-entidade-editar?codigo={$_POST['codigo']}");
    break;

}

echo "Oops! Internal Server Error.";

//echo "Não existem dados para serem lidos.";