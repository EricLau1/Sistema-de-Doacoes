<?php

namespace app\models;

use app\classes\Database;

use app\models\QueryBuilder;

abstract class Model {

    protected $connection;
    
    public function __construct() {

        // conexão inciada
        $this->connection = Database::connect();

    }


    // retorna todos os elementos de uma tabela específica
    public function getAll() {

        // a variável table seria criada na classe que HERDA de Model
        $sql = "select * from {$this->table}";

        // prepara a query SQL e retorna para a variável results
        $results = $this->connection->prepare($sql);

        // executa a query
        $results->execute();

        // retorna os resultados
        return $results->fetchAll();

    }

    // retorna uma linha da tabela
    public function get($col, $val) {

        // faz uma consulta que atenda a um valor específico de uma determinada coluna
        $sql = "select * from {$this->table} where {$col} = :{$col}";

        $results = $this->connection->prepare($sql);

        $results->bindValue(":{$col}", $val); // passa o valor relacionado a coluna

        // executa a query
        $results->execute();

        // retorna os resultados
        return $results->fetch();

    }

    // retorna varias linhas da tabela que sejam iguais aos parametros
    public function gets($col, $val) {

        // faz uma consulta que atenda a um valor específico de uma determinada coluna
        $sql = "select * from {$this->table} where {$col} = :{$col}";

        $results = $this->connection->prepare($sql);

        $results->bindValue(":{$col}", $val); // passa o valor relacionado a coluna

        // executa a query
        $results->execute();

        // retorna os resultados
        return $results->fetchAll();

    }

    public function create($atributos) {

        $sql = QueryBuilder::insert($this->table, $atributos);

        $insert = $this->connection->prepare($sql);
        
        return $insert->execute($atributos);
        

    }

    public function update($atributos) {

        $sql = QueryBuilder::update($this->table, $atributos);

        $update = $this->connection->prepare($sql);

        $update->execute($atributos);

        return $update->rowCount();

    }

    // deleta uma linha da tabela a partir do seu código
    public function delete($codigo) {

        $sql = "delete from {$this->table} where codigo{$this->table} = ?";

        $delete = $this->connection->prepare($sql);

        $delete->bindValue(1, $codigo);

        $delete->execute();

        return $delete->rowCount();

    }

}