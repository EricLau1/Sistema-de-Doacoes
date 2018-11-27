<?php

use app\models\Entidade;
use app\models\Boleto;

$entidades = (new Entidade)->getAll();

$doacoes = array();

$boleto = new Boleto;

foreach($entidades as $entidade) {

    $entidade['bairro'] = ($entidade['bairro']);

    array_push($doacoes, [
        "codigo" => $entidade['codigoEntidade'],
        "entidade" => $entidade['nomeFantasia'], 
        "situacao" => $entidade['situacao'], 
        "doacoes" => count($boleto->gets('codigoEntidade', $entidade['codigoEntidade']))
    ]);

}

//echo toJson($doacoes);
//return;

require $view->renderizar("admin_entidade");