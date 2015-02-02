<?php

$local_config = array(
    'localhost',
    'localhost:8080'
);

if( in_array($_SERVER['HTTP_HOST'], $local_config) ) {
    require __DIR__ . '/wp-config-local.php';
} else {
    require __DIR__ . '/wp-config-global.php';
}