<?php

namespace app\classes;

use app\classes\Moeda;
use app\filtros\Filter;

class ModelsUpdate {

   
    public function validarEntidade($inputs) {

        $params = trimAll($inputs);

        $params = Filter::text($params);

        // validando o valor da moeda pra salvar no banco de dados
        $params['valor'] = Moeda::formatar($params['valor']);

        // preparando a linha que será preenchida na tabela
        $row = [
            "bairro"         => $params['bairro'],
            "celular"        => ( empty($params['celular']) )? null : $params['celular'], // se o campo estiver vazio retorna NULL
            "cnpj"           => $params['cnpj'],
            "email"          => $params['email'],
            "endereco"       => $params['endereco'],
            "nomeFantasia"   => $params['nome'],
            "numero"         => $params['numero'], 
            "situacao"       => $params['situacao'],   
            "telefone"       => ( empty($params['telefone']) )? null : $params['telefone'],// se o campo estiver vazio retorna NULL
            "valorBoleto"    => $params['valor'],
            "codigoEntidade" => $params['codigo']
        ];

        return $row;

    }

}
