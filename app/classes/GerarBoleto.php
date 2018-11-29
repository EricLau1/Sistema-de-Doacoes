<?php

namespace app\classes;

use OpenBoleto\Banco\BancoDoBrasil;
use OpenBoleto\Agente;

class GerarBoleto {

    private $boleto = null;

    public function __construct($pagador, $beneficiario) {

        $sacado = new Agente(
            $pagador['nome'], 
            $pagador['cpf'], 
            $pagador['bloco'], 
            $pagador['cep'], 
            $pagador['cidade'], 
            $pagador['estado']
        );
        
        $cedente = new Agente(
            $beneficiario['nome'], 
            $beneficiario['cnpj'], 
            $beneficiario['cls'], 
            $beneficiario['cep'], 
            $beneficiario['cidade'], 
            $beneficiario['estado']
        );

         /*
        dd([
            "sacado" => $sacado,
            "cedente" => $cedente
        ]); */
        
        $this->boleto = new BancoDoBrasil(array(
            // Parâmetros obrigatórios
            'dataVencimento' => new \DateTime( $pagador['vencimento'] ),
            'valor'          => $pagador['valor'],
            'sequencial'     => 1234567, // Para gerar o nosso número
            'sacado'         => $sacado,
            'cedente'        => $cedente,
            'agencia'        => 1724, // Até 4 dígitos
            'carteira'       => 18,
            'conta'          => 10403005, // Até 8 dígitos
            'convenio'       => 1234, // 4, 6 ou 7 dígitos
        ));

    }

    public function gerar() {

        echo $this->boleto->getOutput();

    }

}