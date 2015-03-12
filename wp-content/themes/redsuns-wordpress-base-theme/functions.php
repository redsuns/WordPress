<?php
/**
 * Redsuns WordPress Base Theme functions and definitions
 *
 * @package Redsuns WordPress Base Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'redsuns_wordpress_base_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function redsuns_wordpress_base_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Redsuns WordPress Base Theme, use a find and replace
	 * to change 'redsuns-wordpress-base-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'redsuns-wordpress-base-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'redsuns-wordpress-base-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'redsuns_wordpress_base_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
    
    add_theme_support('post-thumbnails');
    
    // Exemplo de registro de tamanho de thumbnails
    // add_image_size('thumbnail-produto', 270, 225, true);
}
endif; // redsuns_wordpress_base_theme_setup
add_action( 'after_setup_theme', 'redsuns_wordpress_base_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function redsuns_wordpress_base_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'redsuns-wordpress-base-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'redsuns_wordpress_base_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function redsuns_wordpress_base_theme_scripts() {
	wp_enqueue_style( 'redsuns-wordpress-base-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'redsuns-wordpress-base-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'redsuns-wordpress-base-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'redsuns_wordpress_base_theme_scripts' );


/**
 *  Definindo constantes
 */
require get_template_directory() . '/inc/constants.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require TEMPLATE_DIRECTORY . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require TEMPLATE_DIRECTORY . '/inc/extras.php';

/**
 * Customizer additions.
 */
require TEMPLATE_DIRECTORY . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require TEMPLATE_DIRECTORY . '/inc/jetpack.php';

/**
 * Fragmentação de URL
 */
require TEMPLATE_DIRECTORY . '/inc/url-fragmentation.php';

/**
 * Página de opções do painel administrativo
 */
require TEMPLATE_DIRECTORY . '/inc/site-infos.php';

/**
 * Os tipos de posts customizados
 */
require TEMPLATE_DIRECTORY . '/inc/custom-post-types.php';


/**
 * Rewrites customizados, utilize se necessário
 */
require TEMPLATE_DIRECTORY . '/inc/custom-rewrite.php';



add_action('admin_menu', 'manual');

function manual()
{
    add_menu_page('Manual do Site', 'Manual do Site', 'manage_options', 'manual_do_site', 'manual_do_site', 'dashicons-book', 15);
}

function manual_do_site()
{
    
    echo '<br /><br />';
    echo '<iframe width="100%" height="650" src="' . HOME_URL . '/docs/manual.pdf"></iframe>';
    
}

add_action('admin_bar_menu', 'add_toolbar_items', 100);

function add_toolbar_items($admin_bar)
{
    $admin_bar->add_menu(array(
        'id' => 'manual',
        'title' => 'Manual do Site',
        'href' => HOME_URL . '/wp-admin/admin.php?page=manual_do_site',
        'meta' => array(
            'title' => __('Manual do Site'),
        ),
    ));
}

/**
 * Obtém o Id de um post a partir de seu Slug
 * 
 * @param string $post_slug
 * @return int
 */
function get_ID_by_slug($post_slug, $post_type = 'post')
{
    $post = get_page_by_path($post_slug, OBJECT, $post_type);
    if ($post) {
        return $post->ID;
    } else {
        return null;
    }
}

/**
 * Altera a logo do login para o admin
 */
function redsuns_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo TEMPLATE_DIRECTORY_URI; ?>/img/logo-redsuns.png);
            -webkit-background-size: 107px;
            background-size: 107px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'redsuns_login_logo' );

/**
 * Altera a URL para o login do admin
 * 
 * @return string
 */
function redusns_login_logo_url() {
    return 'http://www.redsuns.com.br';
}
add_filter( 'login_headerurl', 'redusns_login_logo_url' );

/**
 * Altera o título do link para o login do admin
 * 
 * @return string
 */
function redsuns_login_logo_url_title() {
    return 'Redsuns Design e Tecnologia';
}
add_filter( 'login_headertitle', 'redsuns_login_logo_url_title' );