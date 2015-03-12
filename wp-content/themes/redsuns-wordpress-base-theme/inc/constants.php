<?php

/**
 * O diretório do tema
 */
if( !defined('TEMPLATE_DIRECTORY') ) {
    define('TEMPLATE_DIRECTORY', get_template_directory());
}

/**
 * A URL do diretório do tema
 */
if( !defined('TEMPLATE_DIRECTORY_URI') ) {
    define('TEMPLATE_DIRECTORY_URI', get_template_directory_uri());
}

/**
 * A URL da home
 */
if( !defined('HOME_URL') ) {
    define('HOME_URL', get_home_url());
}
