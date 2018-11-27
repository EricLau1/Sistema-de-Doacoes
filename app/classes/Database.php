<?php

namespace app\classes;

use PDO; // biblioteca de conexão com o banco de dados

class Database {

    // função encarrega de abrir uma conexão com o banco de dados
    public static function connect() {

        // pega os dados informados no arquivo config.php
        $config = require("../config.php");

        $driver  = $config['db']['driver'];
        $host    = $config['db']['host'];
        $dbname  = $config['db']['dbname'];
        $charset = $config['db']['charset'];
        $usuario = $config['db']['usuario'];
        $senha   = $config['db']['senha'];

        $pdo = new \PDO("{$driver}:host={$host};dbname={$dbname};charset={$charset}", $usuario, $senha);

        // os erros serão exibidos caso ocorram 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        unset($driver, $host, $dbname, $charset, $usuario, $senha);

        return $pdo;
    }

}