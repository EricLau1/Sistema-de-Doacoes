<?php

function flash($message, $alert = 'info') {

    return "<p class='alert alert-{$alert}'> {$message} </p>";

}

