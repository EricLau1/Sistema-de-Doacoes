<?php 

namespace app\models;

class Estado {

    private $estados = array();
    private $sul = array();
    private $norte = array();
    private $nordeste = array();
    private $centro_oeste = array();
    private $sudeste = array();

    public function __construct() {

        $this->add(1, "Acre", "AC", "Norte");
        $this->add(2, "Amazonas", "AM", "Norte");
        $this->add(3, "Amapá", "AP", "Norte");
        $this->add(4, "Pará", "PA", "Norte");
        $this->add(5, "Tocantins", "TO", "Norte");
        $this->add(6, "Rondônia", " RO", "Norte");
        $this->add(7, "Roraima", "RR", "Norte");

        $this->add(8, "Maranhão", "MA", "Nordeste");
        $this->add(9, "Piauí", "PI", "Nordeste");
        $this->add(10, "Ceará", "CE", "Nordeste");
        $this->add(11, "Rio Grande do Norte", "RN", "Nordeste");
        $this->add(12, "Paraíba", "PB", "Nordeste");
        $this->add(13, "Sergipe", "SE", "Nordeste");
        $this->add(14, "Pernambuco", "PE", "Nordeste");
        $this->add(15, "Alagoas", "AL", "Nordeste");
        $this->add(16, "Bahia", "BA", "Nordeste");

        $this->add(17, "Mato Grosso", "MT", "Centro-Oeste");
        $this->add(18, "Mato Grosso do Sul", "MS", "Centro-Oeste");
        $this->add(19, "Goiás", "GO", "Centro-Oeste");

        $this->add(20, "São Paulo", "SP", "Sudeste");
        $this->add(21, "Rio de Janeiro", "RJ", "Sudeste");
        $this->add(22, "Espírito Santo", "ES", "Sudeste");
        $this->add(23, "Minas Gerais", "MG", "Sudeste");

        $this->add(24, "Paraná", "PR", "Sul");
        $this->add(25, "Rio Grande do Sul", "RS", "Sul");
        $this->add(26, "Santa Catarina", "SC", "Sul");

    }

    private function add($id, $nome, $uf, $regiao) {

        $dados = ["id" => $id, "nome" => $nome, "uf" => $uf, "regiao" => $regiao];

        array_push($this->estados,  $dados);

        switch($regiao) {

            case 'Norte': {
                array_push($this->norte, $dados);
                break;
            }
            case 'Nordeste': {
                array_push($this->nordeste, $dados);
                break;
            }
            case 'Centro-Oeste' : {
                array_push($this->centro_oeste, $dados);
                break;
            }
            case 'Sul' : {
                array_push($this->sul, $dados);
                break;
            }
            case 'Sudeste': {
                array_push($this->sudeste, $dados);
            }
            default: {
                return;
            }
        } // end switch

    }

    public function getAll() {

        return $this->estados;

    }

    public function getNorte() {

        return $this->norte;
    
    }

    public function getNordeste() {

        return $this->nordeste;

    }

    public function getCentroOeste() {

        return $this->centro_oeste;

    }

    public function getSul() {

        return $this->sul;

    }

    public function getSudeste() {

        return $this->sudeste;

    }

}