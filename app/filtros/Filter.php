<?php

namespace app\filtros;

use app\filtros\Text;

class Filter {

    // valida todos os valores de um Array de String
    public static function text($atributos) {

        if(isArray($atributos)) {

            foreach($atributos as $chave => $valor) {

                $atributos[$chave] = Text::filter($valor);

            }

        }

        return $atributos;
    }

}