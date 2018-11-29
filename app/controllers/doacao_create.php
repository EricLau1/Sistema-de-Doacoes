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
use app\models\Entidade;

$validate = new BoletoValidate($_POST);

unset($_POST);

$dados = $validate->getDados();

//echo toJson($dados);return;

/* 
    OS DADOS ABAIXO ESTÃO SENDO USADOS PARA TESTE 

    É NECESSÁRIO VERIFICAR A AUTENTICIDADE DAS INFORMAÇÕES

*/

$pagador = [
    'nome'   => $dados['nome'],
    'cpf'    => $dados['cpf'],
    'bloco'  => 'ABC 302 Bloco N', // colocado apenas para teste
    'cep'    => $dados['cep'],
    'cidade' => $dados['cidade'],
    'estado' => $dados['estado'],
    "valor"  => (number_format($dados['valor'], 2)),
    "vencimento" => $dados['dataVencimento']
];

$entidade = (new Entidade)->get('codigoEntidade', $dados['codigoEntidade']);

//echo toJson($entidade); return;

$beneficiario = [
    'nome'   => $entidade['nomeFantasia'],
    'cnpj'   => $entidade['cnpj'],
    'cls'    => 'CLS 403 Lj 23',
    'cep'    => '01311-000',
    'cidade' => 'Assis',
    'estado' => 'SP'
];

//echo toJson( ["pagador" => $pagador, "beneficiario" => $beneficiario] ); return;

use app\classes\GerarBoleto;

$gerarBoleto = new GerarBoleto($pagador, $beneficiario);

try {

    $boleto = new Boleto;
    
    if($boleto->create($dados)) {

        /*
        
        $session->set('boleto', ["status" => "OK"]);

        redirect("/boleto-ok"); */

        require $view->renderizar("boleto");
        return;

    }

} catch(PDOException $e) {

    dd($e->getMessage());

}



echo "Ooops! Ocorreu um erro ao salvar. =(";

