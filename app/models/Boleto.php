<?php

namespace app\models;

use app\models\Model;

class Boleto extends Model {

    protected $table = "Boleto";

    public function baixa($params) {

        if(isArray($params)) {

            $sql = QueryBuilder::update( $this->table, $params );

            $rs = $this->connection->prepare($sql);
            
            $rs->execute($params);
    
            return $rs->rowCount();
        }

        return null;

    }

}