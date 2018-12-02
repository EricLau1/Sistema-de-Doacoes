<?php

require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Router;
use app\classes\View;
use app\sessions\Session;

$uri = Uri::get(); // esta sintaxe para chamar classes com funçoes estáticas

$rotas = [
    // chama a página inicial do sistema
    "/home" => "controllers/home",

    // chama a página de cadastro de usuário
    "/user-cadastro" => "controllers/user_cadastro",

    // valida as informações, e salva no banco de dados, só pode ser acessada por uma requisição via POST
    "/user-create" => "controllers/user_create",
    
    // chama a página de login
    "/login" => "controllers/login",

    // chama a página de autenticação, só pode ser acessada por uma requisição via POST
    "/logando" => "controllers/user_login",
  
    // desloga da conta
    "/logout" => "controllers/logout",

    // página para fazer uma doação
    "/doacao" => "controllers/doacao_cadastro",

    // valida os dados do formulário de doação para imprimir o boleto
    "/doacao-create" => "controllers/doacao_create",

    // após validar os dados do boleto, manda para a página de impressao
    "/boleto-ok" => "controllers/boleto_ok",

    "/boleto" => "controllers/boleto",

    "/boleto-impressao" => "controllers/boleto_impressao",

    // Interface de manutencão da Entidade
    "/entidade" => "controllers/user_entidade",

    "/entidade-editar" => "controllers/user_entidade_edit",
    
    "/entidade-create" => "controllers/user_entidade_create",
  
    // Interface gráfica do Super Administrador

    "/admin" => "controllers/admin", "/login",

    "/admin-entidades" => "controllers/admin_entidade", "/login",

    "/admin-entidade-cadastro" => "controllers/admin_entidade_cadastro",

    "/admin-entidade-create" => "controllers/admin_entidade_create",

    "/admin-boleto-detalhes" => "controllers/admin_boleto_detalhes",

    "/admin-entidade-detalhes" => "controllers/admin_entidade_detalhes",

    "/admin-entidade-editar" =>  "controllers/admin_entidade_edit",

    "/admin-entidade-update" => "controllers/admin_entidade_update",
    
    "/admin-entidade-delete" => "controllers/admin_entidade_delete",

    "/admin-boleto-pago" => "controllers/admin_boleto_pago",

    "/admin-boleto-delete" => "controllers/admin_boleto_delete",

      // página para testes
      "/test" => "controllers/test"
    
];

try {

    $view = new View; // este objeto ficará disponível para qualquer arquivo no controllers
    
    $session = new Session; // este objeto ficará disponível para qualquer arquivo 

    // retorna a página requisitada na url
    require Router::load($uri, $rotas);

} catch(Exception $e) {

    // Caso não encontra a página digitada na URL

    //echo $e->getMessage();

    // envia pra Home em caso de uma rota desconhecida.
    require Router::load("/home", $rotas);

    // ir para área de testes
    //require Router::load("/area-de-teste", $rotas);

}