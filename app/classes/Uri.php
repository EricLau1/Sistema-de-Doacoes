<?php

namespace app\classes;

class Uri {

    public static function get() {

        // retorna a URL
        return parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);

    }

}