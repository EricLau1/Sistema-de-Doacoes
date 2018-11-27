<?php


namespace app\classes;

class Password {

    // retorna um hash unico da senha passada como parâmetro
    public static function hash($senha) {

        return password_hash($senha, PASSWORD_DEFAULT);

    }

    // verifica a senha digitada com o hash da senha salva no banco
    public static function verify($senha, $hash) {

        // retorna true se os hash foram iguais, senão retorna false
        return password_verify($senha, $hash);

    }
}