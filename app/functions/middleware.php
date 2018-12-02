<?php

// verifica 
function acessar_perfil () {

  // verifica se existe uma sessão autenticada
  if(isset($_SESSION['autenticado'])) {

     // pega informações do usuário da sessão
      $usuario = $_SESSION['autenticado'];

      // Se o status da sessão for TRUE
      if($usuario['status']) {

        //echo toJson($usuario);
        //die();
        // pega o perfil para ver qual as páginas podem ser acessadas
        $perfil = $usuario['perfil'];
        
        switch($perfil){
          // 2 -> nivel admin
          case 2 : {
            redirect("/admin");
            return;
          }
          default : {
            redirect("/entidade");
          }

        } // end switch

        return;
      } // end if
    
  } // end if


} // end function


// limita o acesso do parametro perfil e o redireciona para outra rota
function limitar_acesso($perfil, $rota) {

  if(isset($_SESSION['autenticado'])) {

    $usuario = $_SESSION['autenticado'];

    if($usuario['perfil'] == $perfil) {

      redirect($rota);

    }

  }
  
}

function adminRequired() {

  if(isset($_SESSION['autenticado'])) {

    $usuario = $_SESSION['autenticado'];

    if($usuario['perfil'] != 2) {

      redirect("/login");

    }

  }
  
}