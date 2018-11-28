<?php

namespace app\classes;

use app\classes\Moeda;
use app\filtros\Filter;

class BoletoValidate {

    private $dados = array();

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

    public function __construct($inputs) {

        $params = $this->validate($inputs);

        $hoje = date("Y-m-d");
        $vencimento = date('Y-m-d', strtotime(' +2 day') ); // avança dois dias na data, apenas para teste

        // preparando pra preencher a linha da tabela Boleto
        $row = [
            "bairro"               => $params['bairro'],
            "celular"              => $params['celular'],
            "cep"                  => $params['cep'],
            "cidade"               => $params['cidade'],
            "cnpj"                 => $params['cnpj'],
            "cpf"                  => $params['cpf'],  
            "dataEmissao"          => $hoje,
            "dataEmissaoString"    => date("d/M/Y"),
            "dataPagamento"        => null,
            "dataPagamentoString"  => "aguardando",
            "dataVencimento"       => $vencimento, // apenas pra teste
            "dataVencimentoString" => date('d/M/Y', strtotime(' +2 day') ), // apenas pra teste
            "email"                => $params['email'],
            "endereco"             => $params['endereco'],
            "estado"               => $params['estado'],
            "nome"                 => $params['nome'],
            "nossoNumero"          => null,                 // valor utilizado apenas para teste
            "numero"               => rand(10000, 99999),  // valor utilizado apenas para teste
            "situacao"             => 0,
            "situacaoString"        => "aguardando",
            "telefone"             => $params['telefone'],
            "valor"                => $params['valor'],
            "codigoEntidade"       => $params['entidade']
        ];

        $this->dados = $row;

        unset($params, $row);
        
    }

    public function validate($params) {

        // validando o valor da moeda pra salvar no banco de dados
        $params['valor'] = Moeda::formatar($params['valor']);
        
        // UF maiusculo
        $params['estado'] = strtoupper($params['estado']);

        // limpando os espaços e branco desnecessários
        $params = trimAll($params);

        // filtrando strings utilizando a biblioteca Sanitize
        $params = Filter::text($params); 

        return $params;

    }

    public function getDados() {

        return $this->dados;

    }


}