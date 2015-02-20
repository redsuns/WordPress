<?php
add_action('admin_menu', 'site_infos_registration');

function site_infos_registration()
{
    add_options_page('Informações do Site', 'Informações do Site', 'manage_options', 'site_infos', 'site_infos');
}

function site_infos()
{
    if (isset($_POST['site_infos'])) {

        $footer_disclaimer = filter_input(INPUT_POST, 'footer_disclaimer', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

        update_option('footer_disclaimer', $footer_disclaimer);
        update_option('phone', $phone);
        update_option('email', $email);
        update_option('address', $address);
        
        echo get_template_part('inc/admin-message', 'success');
    }

    echo get_template_part('inc/form', 'site-infos');
}

function redsuns_admin_notice()
{
    echo get_template_part('inc/admin', 'notices');
}

add_action('admin_notices', 'redsuns_admin_notice');
