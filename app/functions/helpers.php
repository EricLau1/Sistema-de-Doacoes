<?php

/* Mostra os dados e mata o carregamento da página */
function dd($dump) {
    var_dump($dump);
    die();
}

/* Retorna os dados no forma Json */
function toJson($data) {
    header("Content-type: application/json");
    return json_encode($data);
}

/* Verifica se o parâmetro é um Array, senão for, lança uma Exceção */
function isArray($param) {

    if(!is_array($param)) {

        throw new Exception("É necessário ser uma Array!");

    }
    return true;
}

/* Verifica se existe algum elemento vazio no Array */
function isEmpty($params) {

    // verifica se é um Array
    if(isArray($params)) {

        // percorre todo o Array
        foreach($params as $key => $value) {

            if(empty($value)) {
                // caso encontre valore vazio return true
                return true;

            }
        }

    }

    return false;

}

// Percorre um Array de dados e remove espaços em branco no inicio e no fim de Strings
function trimAll($params) {

    // verifica se é um Array
    if(isArray($params)) {

        // percorre todo o Array
        foreach($params as $key => $value) {

            $params[$key] = trim($value);
            
        }

    }

    return $params;

}

function redirect($rota) {

    header("location: {$rota}");
    return;
    
}