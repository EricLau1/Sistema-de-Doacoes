<?php

namespace app\models;

class QueryBuilder {


    public static function insert($table, $params) {

        $sql = "insert into {$table} ";

        $sql .= "(". implode( ",", array_keys($params) ) . ") values ";

        $sql .= "(:". implode( ",:", array_keys($params) ) . ")";

        return $sql;
    }

    public static function update($table, $params) {

        $sql = "update {$table} set ";
        
        // remove este campo apenas dentro da função update
        unset($params["codigo{$table}"]);

        // mapeando as chaves do Array $params e transformando e um Array de Strings com os nomes dos campos da tabela
        $atributos = array_map( function( $param ) { return "{$param}=:{$param}"; }, array_keys($params) );

        $sql .= implode(",", $atributos);

        $sql .= " where codigo{$table} = :codigo{$table}";

        return $sql;
    }

}