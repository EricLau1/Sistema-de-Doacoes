<?php

namespace app\classes;

class Router {

    // carrega uma paǵina requisita pela URL
    public static function load($uri, $rotas) {

        if(!array_key_exists($uri, $rotas)) {

            // caso a rota não exista lança uma exceção
            throw new \Exception("Oops! ocorreu um erro. Página não existe!");

        }

        return "../app/{$rotas[$uri]}.php";

    }

}