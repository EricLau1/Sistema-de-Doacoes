<?php

namespace app\classes;

use app\classes\Database;
use app\classes\Password;


class Login {

    private $messages = array();
    private $alert;
    private $isValid = false;
    private $inputs = null;

    public function __construct($inputs) {

        // vefifica se os atributos são um Array
        if(isArray($inputs)) {

            if(isset($inputs['usuario']) && isset($inputs['senha'])) {


                $this->inputs = $inputs;

            } else {

                throw new \Exception("Ooops! Ocorrou um erro, Array Key inválida.");

            }

        }

    }


    // recebe um Array com os atributos email/usuario e senha do formulário de login
    public function signin() {

        // abre a conexão com o banco
        $pdo = Database::connect();

        // query sql que busca por um email ou nome de usuario
        $sql = "select * from Usuario where usuario = ? or email = ?";

        // prepara a query
        $login = $pdo->prepare($sql);

        // tranfere o valor para a primeira interrogação da query
        $login->bindValue(1, $this->inputs['usuario']);
        // tranfere o valor para a segunda interrogação da query
        $login->bindValue(2, $this->inputs['usuario']);

        // executa a query
        $login->execute();

        // retorna o restultado para a variável row
        $result = $login->fetch();

        // se o resultado diferente de null significa que um usuário foi encontrado
        if( $this->found($result) ) {

            // compara o hash da senha digitada com o hash da senha salva no banco
            return $this->validate($this->inputs['senha'], $result);
            // se os hashs forem iguais retorna a linha, senão retorna null

        }

        return null;

    }

    private function found($login) {
        
        if($login != null) {
            
            // adiciona um comentario ao array de mensagens
            array_push($this->messages, "usuário encontrado com sucesso!");
            
            return true;

        } 

        // mensagem de alerta
        $this->alert = "usuário não encontrado.";

        // adciona o alerta ao array de mensagens
        array_push($this->messages, $this->alert);

        return false;

    }

    // valida a senha
    private function validate($senha, $row) {

        if( Password::verify($senha, $row['senha']) ) {

            array_push($this->messages, "usuário autenticado com sucesso!");

            $this->isValid = true; // autenticação validada 

            return $row;
        } 
            
        $this->alert = "senha incorreta.";

        array_push($this->messages, $this->alert);

        return null;

    }

    public function setAlert($alert) {
    
        $this->alert = $alert;
    
    }

    public function getAlert() {
    
        return $this->alert;
    
    }

    public function getMessages() {
        
        return $this->messages;
    
    }

    public function isValid() {

        return $this->isValid;
        
    }

}