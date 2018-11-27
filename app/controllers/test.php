<?php



echo 'Area de testes <br><br>';

//====== TESTADO COM SUCESSO =======//
 use app\models\Usuario;

 $u = new Usuario;

 echo $u->delete(22) . " linhas afetadas.";

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