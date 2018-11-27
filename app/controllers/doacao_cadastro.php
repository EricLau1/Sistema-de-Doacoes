<?php

use app\models\Entidade;

$entidade = new Entidade;

$entidades = $entidade->getAll();

$dados_entidade = array();

foreach($entidades as $entidade) {

    array_push($dados_entidade, [ "codigo" => $entidade['codigoEntidade'], "nome_fantasia" => $entidade['nomeFantasia'] ] );

}

unset($entidades, $entidade);

//echo toJson($dados_entidade);
//return;

require $view->renderizar("doacao_cadastro");
