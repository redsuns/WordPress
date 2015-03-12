<?php


//add_action( 'init', 'post_type_function' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function post_type_function() {
	$labels = array(
		'name'               => 'Post type name',
		'singular_name'      => 'Post type name',
		'menu_name'          => 'Post type name',
		'name_admin_bar'     => 'Post type name',
		'add_new'            => 'Adicionar',
		'add_new_item'       => 'Adicionar',
		'new_item'           => 'Novo',
		'edit_item'          => 'Editar',
		'view_item'          => 'Visualizar',
		'all_items'          => 'Todos',
		'search_items'       => 'Procurar',
		'not_found'          => 'Não localizado',
		'not_found_in_trash' => 'Nada na lixeira'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-[alguma-coisa]',
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'post-type-slug', $args );
    flush_rewrite_rules();
}