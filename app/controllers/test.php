<?php



echo 'Area de testes <br><br>';


//====== BOLETO TESTADO COM SUCESSO =======//

use OpenBoleto\Banco\BancoDoBrasil;
use OpenBoleto\Agente;
 
$sacado = new Agente('Fernando Maia', '023.434.234-34', 'ABC 302 Bloco N', '72000-000', 'Brasília', 'DF');
$cedente = new Agente('Empresa de cosméticos LTDA', '02.123.123/0001-11', 'CLS 403 Lj 23', '71000-000', 'Brasília', 'DF');
 
$boleto = new BancoDoBrasil(array(
    // Parâmetros obrigatórios
    'dataVencimento' => new DateTime('2013-01-24'),
    'valor' => 23.00,
    'sequencial' => 1234567, // Para gerar o nosso número
    'sacado' => $sacado,
    'cedente' => $cedente,
    'agencia' => 1724, // Até 4 dígitos
    'carteira' => 18,
    'conta' => 10403005, // Até 8 dígitos
    'convenio' => 1234, // 4, 6 ou 7 dígitos
));
 
echo $boleto->getOutput();



//====== TESTADO COM SUCESSO =======//
/*
use app\classes\Validate;

$v = new Validate;

$table = [
  "name" => "Entidade",
  "field" => "nomeFantasia",
  "value" => "CAPSA - Circulo dos Amigos dos Pobres do Pao de Santo Antonio"
];

$ignore = [
  "key" => "codigoEntidade",
  "value" => 7
];

$v->modificarParaUpdate($ignore);

$v->unique( $table['name'] , $table['field'], $table['value']);

echo toJson($v->getMetadata());
*/

//====== TESTADO COM SUCESSO =======//
 //use app\models\Usuario;

//$u = new Usuario;

 //echo $u->delete(22) . " linhas afetadas.";

//====== TESTADO COM SUCESSO =======//

//use app\classes\Validate;

//$validate = new Validate;

// email para teste -> redecirandaassis@gmail.com
//$validate->unique('Usuario', 'email', 'redecirandaassis@gmail.com');
//$validate->unique('Usuario', 'usuario', 'Igor');
//$validate->unique('Usuario', 'usuario', 'TESTE');

//foreach($validate->getErrors() as $error) {
  //  echo $error['unique']? "TRUE" : "FALSE" . "<br>";
//}




//====== TESTADO COM SUCESSO =======//

//$today = date("d-m-Y"); 

//dd(date('Y-m-d', strtotime(' +2 day')));

//====== TESTADO COM SUCESSO =======//


//use app\models\Boleto;

//$b = new Boleto;

//echo toJson($b->getAll());
//return;

//echo toJson($b->get("codigoBoleto", 15));
//return;


//====== TESTADO COM SUCESSO =======//


//use app\models\Entidade;

//$e = new Entidade;

//echo toJson($e->getAll());
//return;
//echo toJson($e->get("codigoEntidade", 22));
//return;



//====== TESTADO COM SUCESSO =======//

//use app\models\Estado;

//$e = new Estado;

//echo toJson($e->getNorte());
//echo toJson($e->getNordeste());
//echo toJson($e->getCentroOeste());
//echo toJson($e->getSudeste());
//echo toJson($e->getSul());