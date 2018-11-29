<?php

use app\models\Entidade;

if(!isEmpty($_GET)) {

    $confirmado = null;

    if(isset($_GET['confirm'])) {

        $confirmado = $_GET['confirm'];

    }

    /*
    if($confirmado) {
        echo toJson($_GET);
        return;
    } else {
        dd($confirmado);
    }
    
    */

    if($confirmado) {


        try {

            if( (new Entidade)->delete($_GET['codigo']) > 0 ) {
        
                $session->set('message', flash2("Os dados foram excluídos com sucesso!", "success") );
            
                redirect("/admin-entidades");
                return;
            
            }
        
        } catch (PDOException $e) {
        
            $message = " Oops!!! Ocorreu um erro no banco de dados. <br> <strong> Descrição:</strong> {$e->getMessage()} ";
        
            $session->set('message', flash2( $message, "danger") );
        
            redirect("/admin-entidade-detalhes?codigo={$_GET['codigo']}");
            return;
        
        }

    }


}

 
$session->set('message', flash2("Nenhuma informação foi excluída") );

redirect("/admin-entidade-detalhes?codigo={$_GET['codigo']}");

return;
