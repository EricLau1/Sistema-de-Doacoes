<?php

namespace app\filtros;

use app\interfaces\Sanitize;

class Text implements Sanitize {

    public static function filter($valor){

        return filter_var($valor, FILTER_SANITIZE_STRING);

    }

}