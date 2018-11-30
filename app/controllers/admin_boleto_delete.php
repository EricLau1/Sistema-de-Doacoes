<?php

use app\models\Boleto;
use app\filtros\Number;
use app\filtros\Text;

if(isset($_GET['confirm']) && isset($_GET['codigo'])) {

    $_GET['codigo']  = Number::filter($_GET['codigo']);
    $_GET['confirm'] = Text::filter($_GET['confirm']);

    $confirmado = $_GET['confirm'];

    if($confirmado == true) {

        try {

            $count = (new Boleto)->delete($_GET['codigo']);

            if($count > 0) {
                
                $session->set('message', flash2( "O boleto <strong>#{$_GET['codigo']}</strong> foi excluido com sucesso!", 'success') );
                redirect("/admin");
                return;
    
            }

        } catch(PDOException $e) {

            dd($e->getMessage());

        }


        $session->set('message', flash2( "Os dados não foram excluídos e nenhuma informação foi perdida.", 'info') );
        redirect("/admin-boleto-detalhes?codigo={$_GET['codigo']}");
        return;

    } // end if

}

$session->set('message', flash2( "Oops! Ocorreu um erro, chame o <strong><em>administrador</em></strong>", 'info') );
redirect("/admin");