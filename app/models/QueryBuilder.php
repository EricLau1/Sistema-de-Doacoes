<?php

namespace app\models;

class QueryBuilder {


    public static function insert($table, $params) {

        $sql = "insert into {$table} ";

        $sql .= "(". implode( ",", array_keys($params) ) . ") values ";

        $sql .= "(:". implode( ",:", array_keys($params) ) . ")";

        return $sql;
    }

}