<?php

namespace app\sessions;

class Session {

    public $message = "";

    // Este método cria uma sessão, sendo que o primeiro parâmetro é a chave, e o segundo parâmetro é valor associado a chave
    public function set($key, $data) {

        $_SESSION[$key] = $data;

    }

    // sessão de mensagens, verifica que existe uma mensagem na sessão e a exibe na página que é chamada, após a exibição a mensagem e removida.
    public function message() {

        $message = "";

        if(isset($_SESSION['message'])) {

            $message = $_SESSION['message'];

            unset($_SESSION['message']);

        }

        return $message;

    }

    // verifica que o usuário ja foi autenticado, e recebe um parâmetro enviando para uma rota desejada
    public function auth($rota) {

        // verifica se existe uma sessão de autenticação
        if(isset($_SESSION['autenticado'])) {

            // verifica se a sessão possui o valor true, ou seja, foi validada
            if($_SESSION['autenticado']['status'] == true) {

                redirect("{$rota}");
            
            }

        }
    
    }

    // verifica se existe uma sessão autenticada, se sim exclui a sessão
    public function logout() {

        if(isset($_SESSION['autenticado'])) {

            unset($_SESSION['autenticado']);

        }

    }

    // restringir páginas que precisam ter alguma sessão validada
    public function restrict($key, $rota) {

        // se determinada sessão não existir
        if( !isset($_SESSION[$key]) ) {

            // redireciona para outra rota
            redirect("{$rota}");

        }

    }

    public function destruct($key) {

        if(isset($_SESSION[$key])) {

            unset($_SESSION[$key]);

        }

    }

    // captura um valor de um array referente a uma key
    public function gets($keys) {

        if(count($keys) == 2) {

            if(isArray($keys)) {

                if( isset($_SESSION[ $keys[0] ][ $keys[1] ] ) ) {

                    return $_SESSION[ $keys[0] ][ $keys[1] ];
                
                } 

            }

        } else {

            throw new \Exception("Precisa de um Array com duas chaves associativas.");
        }

    } // end function

    public function get($key) {

        if(isset($_SESSION[$key])) {

            return $_SESSION[$key];

        }

    }

}