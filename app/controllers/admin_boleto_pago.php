<?php

use app\models\Boleto;
use app\filtros\Number;
use app\filtros\Text;

if(isset($_GET['confirm']) && isset($_GET['codigo'])) {

    $_GET['codigo']  =  Number::filter($_GET['codigo']);
    $_GET['confirm'] = Text::filter($_GET['confirm']);

    $confirmado = $_GET['confirm'];

    if($confirmado == true) {

       $boleto = (new Boleto)->get('codigoBoleto', $_GET['codigo']);

       $atributos = [
        "situacao"            => 1,
        "situacaoString"      => 'pago',
        "dataPagamento"       => date('Y-m-d'),
        "dataPagamentoString" => date("d M Y"),
        "codigoBoleto"        => $boleto['codigoBoleto']
        ];

       if( $atributos['dataPagamento'] <= $boleto['dataVencimento'] ) {

            // Se caiu neste bloco sera iniciado a baixa no boleto

            /*
            echo toJson([
                "pagamento" => $atributos['dataPagamento'], 
                "vencimento" => $boleto['dataVencimento'],
                "OK" => true  
                ]);return;

                */

            $boleto = new Boleto;

            $count = $boleto->baixa( $atributos );

            if($count > 0) {

                $message = " <br> O pagamento foi concluído com sucesso! ";

                $session->set('message', flash2( $message, 'success' ) );
                redirect("/admin-boleto-detalhes?codigo={$_GET['codigo']}");
                return;
                
            }

 
       }

       
       // Se chegar a este ponto quer dizer que o boleto está vencido
       /*
       echo toJson([
           "pagamento" => $atributos['dataPagamento'], 
           "vencimento" => $boleto['dataVencimento'],
           "OK" => false 
           ]);return; */
        
        $hoje = date("d-m-Y");
        $vencimento = (new \DateTime( $boleto['dataVencimento'] ))->format("d-m-Y");

        $message = " <br>
            <strong> Estourou o prazo de validade. </strong> <br>
             Hoje: {$hoje}, <br> 
             Venceu no dia: {$vencimento} 
        ";

        $session->set('message', flash2( $message, 'warning' ) );
        redirect("/admin-boleto-detalhes?codigo={$_GET['codigo']}");
        return;

    } // end if

}

$session->set('message', flash2( "Oops! Ocorreu um erro, chame o <strong><em>administrador</em></strong>", 'info') );
redirect("/admin");