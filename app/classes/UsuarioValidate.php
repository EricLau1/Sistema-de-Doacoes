<?php

namespace app\classes;

use app\filtros\Filter;
use app\classes\Validate;
use app\classes\Password;


class UsuarioValidate {

    /* 
        DADOS Tratados fora do Formulário:

        perfil,
        situacao
    
    */

    private $dados = null;
    private $validate = null;
    private $messages = array();
    private $isValid = false;

    public function __construct($inputs) {

        // remove os espaços em branco de uma Array de Strings
        $params = trimAll($inputs);

        // filtra um Array de Strings
        $params = Filter::text($params);

        // Instacia a classe validate para validar campos unicos
        $this->validate = new Validate;

        // verificando campos únicos
        $this->validate->unique('Usuario', 'usuario', $params['usuario']);
        $this->validate->unique('Usuario', 'email', $params['email']);
        $this->validate->unique('Usuario', 'cpf', $params['cpf']);

        // mapeando erros
        $this->validation($params);

        if($this->validate->getErrors() == 0) {

            $this->isValid = true;

            // preparando a linha que será preenchida na tabela
            $row = [
                "senha"    => Password::hash($params['senha']), // criptografando a senha antes de ser salva
                "celular"  => ( empty($params['celular']) )? null : $params['celular'], // se o campo estiver vazio retorna NULL
                "cpf"      => $params['cpf'],
                "email"    => $params['email'],
                "nome"     => $params['nome'],
                "perfil"   => 1, // dado não tratado no formulário, usado apenas pra teste,
                "situacao" => 1, // dado não tratado no formulário, usado apenas pra teste,
                "telefone" => ( empty($params['telefone']) )? null : $params['telefone'],// se o campo estiver vazio retorna NULL
                "usuario"  => $params['usuario']
            ];

            $this->dados = $row;

            unset($params, $row);
        } // end if

    } // end constructor

    private function validation($params) {

        $errors = $this->validate->getMetadata();

        // tratando valores unicos
        foreach($errors as $error) {

            // verifica se existe algum erro com a propriedade 'unique'
            if( !$error['unique'] ) {

                // caso a propriedade unique seja false, executa este bloco

                $message = "<strong>{$error['coluna']}</strong>, já existe.";

                array_push($this->messages, flash($message, 'warning') );

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

}