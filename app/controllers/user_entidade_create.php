<?php

// ARQUIVO QUE VALIDA AS INFORMAÇÕES VINDAS DO FORMULÁRIO DE CADASTRO DE ENTIDADE FEITA POR UM USUÁRIO NOVO

// é necessário estar autenticado
$session->restrict('autenticado', '/login');

// não é permito usuario de perfil 2
limitar_acesso(2, '/login');

$dados = [
    "usuario" => $session->get('new'),
    "message" => "Entidade criada com sucesso!"
];

$codigoUsuario = $dados['usuario']['sessao']['codigo'];

//dd($codigoUsuario);

//echo toJson($dados);
//return;

$emailEntidade = $dados['usuario']['entidade'];

//dd($emailEntidade);

use app\models\Entidade;

$entidade = (new Entidade)->get('email', $emailEntidade);

//echo toJson($entidade); return;

use app\models\Usuario;

$u = new Usuario;


try {

    $count = $u->update( [
            'entidade_codigoEntidade' => $entidade['codigoEntidade'],
            'codigoUsuario' => $codigoUsuario
        ] 
    );

    $message = "Oops!!! Um erro inesperado ocorreu. Tente novamente!";

    if($count > 0) {

        $message = "Entidade cadastrada com sucesso!";

        $session->set('message', flash2($message, 'success') );

        redirect("/entidade");
        return;
    }

    $delete = $entidade->delete($entidade['codigoEntidade']);

    if($delete > 0) {

        $message .= "<br> <em> A entidade foi excluida. </em>";

    }

} catch (PDOException $e) {

    dd($e->getMessage());

}

$session->set('message', flash2($message, 'warning') );

redirect("/entidade");
return;
