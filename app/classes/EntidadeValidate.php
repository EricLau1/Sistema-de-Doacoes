<?php

namespace app\classes;

use app\filtros\Filter;
use app\classes\Validate;


class EntidadeValidate {

    private $dados = null;
    private $validate = null;
    private $messages = array();
    private $isValid = false;

    private $primaryKey = null;

    public function __construct($inputs) {


        // verificando se foi enviado um campo com o código da primary key
        $this->existsPrimaryKey($inputs);

        $params = trimAll($inputs);

        $params = Filter::text($params);

        // validando o valor da moeda pra salvar no banco de dados
        $params['valor'] = Moeda::formatar($params['valor']);

        //echo toJson($params);
        //return;

        // instaciar classe para validar valores únicos
        $this->validate = new Validate;

        if( $this->primaryKey != null ) {

            // se existir uma primary key a classe irá executar como uma UPDTE
            $this->validate->modificarParaUpdate( $this->primaryKey );

            // valores únicos: email, cnpj e nomeFantasia
            $this->validate->unique('Entidade', 'email', $params['email']);
            $this->validate->unique('Entidade', 'cnpj', $params['cnpj']);
            $this->validate->unique('Entidade', 'nomeFantasia', $params['nome']);

        } else {

            // Senão, executa como um Insert
            
            // valores únicos: email, cnpj e nomeFantasia
            $this->validate->unique('Entidade', 'email', $params['email']);
            $this->validate->unique('Entidade', 'cnpj', $params['cnpj']);
            $this->validate->unique('Entidade', 'nomeFantasia', $params['nome']);
            
        }

        //echo toJson($this->validate->getMetadata());

        $this->validation($params);

        if($this->validate->getErrors() == 0) {

            $this->isValid = true;

            // preparando a linha que será preenchida na tabela
            $row = [
                "bairro"       => $params['bairro'],
                "celular"      => ( empty($params['celular']) )? null : $params['celular'], // se o campo estiver vazio retorna NULL
                "cnpj"         => $params['cnpj'],
                "email"        => $params['email'],
                "endereco"     => $params['endereco'],
                "nomeFantasia" => $params['nome'],
                "numero"       => $params['numero'], 
                "situacao"     => $params['situacao'],   
                "telefone"     => ( empty($params['telefone']) )? null : $params['telefone'],// se o campo estiver vazio retorna NULL
                "valorBoleto"  => $params['valor']
            ];

            $this->dados = $row;

            unset($params, $row);
            
        } // end if


    } // end construtor

    // verifica se nos input fields do formulário foi enviado um campo com o código
    private function existsPrimaryKey($params) {

        if(isArray($params)) {

            // verifica se existe um parâmetro com codigo
            if( isset($params['codigo']) ) {

                $this->primaryKey = [
                    "key"   => "codigoEntidade",
                    "value" => $params['codigo']
                ];

            } // end if

        } // end if

    }


    private function validation($params) {

        $errors = $this->validate->getMetadata();

        // tratando valores unicos
        foreach($errors as $error) {

            // verifica se existe algum erro com a propriedade 'unique'
            if( !$error['unique'] ) {

                // caso a propriedade unique seja false, executa este bloco

                if($error['coluna'] == 'nomeFantasia') {
                    
                    $error['coluna'] = 'nome';
                
                }

                $message = "<strong>{$error['coluna']}</strong>, já existe.";

                array_push($this->messages, flash2($message, 'warning') );

            }

        }// end foreach

    }

    public function getDados() {

        return $this->dados;

    }

    public function getValidate() {

        return $this->validate;

    }

    public function isValid() {

        return $this->isValid;

    }

    public function getMessages() {

        return $this->messages;

    }

    private function getPrimaryKey() {

        return $this->primaryKey;

    }
}