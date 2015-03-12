<?php


function add_rewrite_rules()
{
    global $wp_rewrite;

    $new_rules = array(
        //'alguma-coisa/(.+)/?$' => 'index.php?page_id=ID_da_pagina_a_redirecionar'
    );

    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

add_action('generate_rewrite_rules', 'add_rewrite_rules');