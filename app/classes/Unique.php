<?php 

namespace app\classes;

class Unique {

    public static function create($table, $col, $val) {

        $con = Database::connect();

        $sql = "select {$col} from {$table} where {$col} = :{$col}";

        $rs = $con->prepare($sql);
    
        $rs->bindValue(":{$col}", $val);

        $rs->execute();

        return $rs->rowCount();

    }

    // quando faz um update é preciso verificar se algum valor modificado não será duplicado,
    // porém será preciso Ignorar a linha em que será feito o update,
    // o parametro ignore é um Array e recebe na primeira posição o nome da primary key
    // na segunda posição irá receber o valor da primary key
    public static function update($table, $col, $val, $ignore) {

        if(isArray($ignore)) {

            $con = Database::connect();

            $sql = "select {$col} from {$table} where {$col} = :{$col} and {$ignore['key']} != :{$ignore['key']}";
    
            $rs = $con->prepare($sql);
        
            $rs->bindValue(":{$col}", $val);
            $rs->bindValue(":{$ignore['key']}", $ignore['value']);
    
            $rs->execute();
    
            return $rs->rowCount();

        }

        return null;

    }


}