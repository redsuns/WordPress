<?php

/**
 * Para ser utilizado quando necessitar buscar algo com base na URL solicitada
 */

$requested_uri = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));

if (is_array($requested_uri)) {
    $requested_uri = array_values(array_filter($requested_uri));
}

/**
 *  Para utilizar basta chamar a global $requested_uri
 * 
 *  Esta variável é um array
 */