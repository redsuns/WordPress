<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Redsuns WordPress Base Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/component.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'redsuns-wordpress-base-theme'); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e('Primary Menu', 'redsuns-wordpress-base-theme'); ?></button>
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
