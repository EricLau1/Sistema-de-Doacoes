<?php

if($_POST['entidade'] == 0) {

    $session->set('message', flash("Selecione uma entidade para doar!", "danger") );

    unset($_POST);

    redirect("/doacao");

}

if(empty($_POST)) {

    redirect("/home");

}


/* 
    Valores para serem tratados que não estão no formulario:

    dataEmissao
    dataEmissaoString
    dataPagamento
    dataPagamentoString
    dataVencimento
    dataVencimentoString
    nossoNumero
    numero
    situacao
    situacaoString

*/


use app\classes\BoletoValidate;
use app\models\Boleto;

$validate = new BoletoValidate($_POST);

unset($_POST);

$dados = $validate->getDados();

//echo toJson($dados);
//return;

try {

    $boleto = new Boleto;
    
    if($boleto->create($dados)) {

        $session->set('boleto', ["status" => "OK"]);

        redirect("/boleto-ok");
    
    }

} catch(PDOException $e) {

    dd($e->getMessage());

}



echo "Ooops! Ocorreu um erro ao salvar. =(";

