<?php

function flash($message, $alert = 'info') {

    return "<p class='alert alert-{$alert}'> {$message} </p>";

}

function card($message, $alert = 'info') {

    $aviso = alert($alert);

    $html = "
        <div class='col-md-12'>
            <div class='card border border-$alert'>
                <div class='card-header'>
                    <strong class='card-title'>Mensagem rápida
                        <small>
                            <span class='badge badge-$alert float-right mt-1'> $aviso </span>
                        </small>
                    </strong>
                </div>
                <div class='card-body'>
                    <p class='card-text'>
                        $message
                    </p>
                </div>
            </div>
        </div>
    ";

    return $html;
}

function alert($name) {
    switch($name) {

        case "warning" : {
            return "Atenção";
        }
        case "danger" : {
            return "Erro";
        }
        case "success" : {
            return "Sucesso";
        }
        default : {
            return "Informação";
        }
    }
}

function flash2($message, $alert = 'info') {

   $aviso = alert($alert);

   $html = "
    <div class='card'>
    <div class='card-header'>
        <strong class='card-title'>Mensagens rápida</strong>
    </div>
    <div class='card-body'>
    <div class='sufee-alert alert with-close alert-$alert alert-dismissible fade show'>
        <span class='badge badge-pill badge-$alert'> $aviso </span>
        $message
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    ";

    return $html;

}