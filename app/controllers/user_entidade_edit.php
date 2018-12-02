<?php


// ARQUIVO QUE RENDERIZA O FORMULÁRIO DE EDIÇÃO DE ENTIDADE PELO USUARIO PADRÃO

// é necessário estar autenticado
$session->restrict('autenticado', '/login');

// não permite que usuário com perfil 2 acessem essa página
limitar_acesso( 2, '/login');

use app\models\Usuario;
use app\models\Entidade;

$usuario = (new Usuario)->get('codigoUsuario', $session->gets(['autenticado', 'codigo']) );

$entidade = (new Entidade)->get('codigoEntidade', $usuario['entidade_codigoEntidade']);

/*
echo toJson([
    "usuario" => $usuario,
    "entidade" => $entidade
]);
return;
*/


if($entidade) {

    require $view->renderizar("user_entidade_edit");
    return;

}

redirect("/entidade");



