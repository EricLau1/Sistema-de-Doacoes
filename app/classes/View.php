<?php

namespace app\classes;

class View {

    // classe responsável por carregar as telas ou views
    public function renderizar($view) {

        $view = "../app/views/{$view}.php";

        if(!file_exists($view)) {

            // Caso o arquivo da View não exista lança uma Exceção
            throw new \Exception("Oops! Ocorreu um erro. Página não encontrada! =(");

        }

        return $view;

    }

}