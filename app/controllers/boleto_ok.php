<?php


//$session->restrict("boleto", "/doacao");

//$ok = $session->gets(["boleto", "status" ]);
//echo $ok;

use app\models\Boleto;

$ok = $session->get('boleto');

if($ok['status'] == 'OK') {
    
    //echo toJson((new Boleto)->getAll()); 
    //return;


    echo toJson($ok);
    $session->destruct('boleto');
    return;
}

echo "faça mais doações <a href='/doacao'> doar </a>";




