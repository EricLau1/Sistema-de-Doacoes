<?php

// ARQUIVO PARA DESTRUIR A SESSÂO DE LOGIN

$session->logout();

$session->set('message', flash("Você saiu da conta", "info") );

redirect("/login");


