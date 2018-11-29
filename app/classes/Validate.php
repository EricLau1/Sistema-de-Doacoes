<?php

namespace app\classes;

use app\classes\Database;

use app\classes\Unique;

class Validate {

    private $metadata = array();
    private $errors = 0;
    private $isUpdate = false;
    private $isCreate = true;
    private $ignore = array();

    // verifica se uma coluna de uma tabela possui um valor unico
    public function unique($table, $col, $val) {


        if($this->isCreate) {

            $count = Unique::create($table, $col, $val);

            $dados = [
                "tabela"   => $table,
                "coluna"   => $col,
                "valor"    => $val,
                "unique"   => ($count > 0)? false : true,
                "isUpdate" => $this->isUpdate,
                "isCreate" => $this->isCreate
            ];
    
            // se o dado não for único, conta mais um erro
            if(!$dados['unique']) {
    
                $this->errors++;
            
            }

        } else {

            $count = Unique::update($table, $col, $val, $this->ignore);

            $dados = [
                "tabela"   => $table,
                "coluna"   => $col,
                "valor"    => $val,
                "unique"   => ($count > 0)? false : true,
                "isUpdate" => $this->isUpdate,
                "isCreate" => $this->isCreate
            ];
    
            // se o dado não for único, conta mais um erro
            if(!$dados['unique']) {
    
                $this->errors++;
            
            }


        }

        array_push($this->metadata, $dados);

        return;
        
    }

    // modificar o estado da classe para validar como um Update
    // é necessário ser invocado antes de aplicar as validações
    public function modificarParaUpdate( $ignore ) {

        // recebe um array com a primary key e o valor dela para ser ignorada na verificação
        $this->ignore = $ignore;

        $this->isCreate = false;

        $this->isUpdate = true;

    }

    public function getMetadata() {

        return $this->metadata;

    }

    public function getErrors() {

        return $this->errors;

    }

}