<?php

namespace app\classes;

use app\classes\Database;

class Validate {

    private $metadata = array();
    private $errors = 0;

    // verifica se uma coluna de uma tabela possui um valor unico
    public function unique($table, $col, $val) {

        $con = Database::connect();

        $sql = "select {$col} from {$table} where {$col} = :{$col}";

        $rs = $con->prepare($sql);
    
        $rs->bindValue(":{$col}", $val);

        $rs->execute();

        $count = $rs->rowCount();

        $dados = [
            "tabela" => $table,
            "coluna" => $col,
            "valor" => $val,
            "unique" => ($count > 0)? false : true
        ];

        // se o dado não for único, conta mais um erro
        if(!$dados['unique']) {

            $this->errors++;
        
        }

        array_push($this->metadata, $dados);

        return;
        
    }


    public function getMetadata() {

        return $this->metadata;

    }

    public function getErrors() {

        return $this->errors;

    }

}