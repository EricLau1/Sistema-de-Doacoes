<?php

$session->logout();

$session->set('message', flash("logout success!", "success") );

redirect("/login");


