<?php

/**
 * Para ser utilizado quando necessitar buscar algo com base na URL solicitada
 */

if( PHP_VERSION > 5.4 ) {
    $requested_uri = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));
} else {
    $requested_uri = explode('/', $_SERVER['REQUEST_URI']);
}


if (is_array($requested_uri)) {
    $requested_uri = array_values(array_filter($requested_uri));
}

/**
 *  Para utilizar basta chamar a global $requested_uri
 * 
 *  Esta variável é um array
 */