<?php

namespace app\filtros;

use app\interfaces\Sanitize;

class Number implements Sanitize {


    public static function filter($valor) {

        return filter_var($valor, FILTER_SANITIZE_NUMBER_INT);

    }

}