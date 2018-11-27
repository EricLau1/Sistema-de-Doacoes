<?php

namespace app\classes;

class Moeda {


    public static function formatar($valor) {

        $valor = str_replace(".", "", $valor);
        
        return str_replace(",", ".", $valor);

    } // end tratar

}