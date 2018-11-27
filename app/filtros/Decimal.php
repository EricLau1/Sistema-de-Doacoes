<?php

namespace app\filtros;

use app\interfaces\Sanitize;

class Decimal implements Sanitize {

    public static function filter($valor) {

        return filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);

    }

}