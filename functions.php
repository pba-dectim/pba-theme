<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Register Custom Post Type
function cpt_patrimoine() {

	$labels = array(
		'name'                  => _x( 'Patrimoines', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Patrimoine', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Le patrimoine', 'text_domain' ),
		'name_admin_bar'        => __( 'Le patrimoine', 'text_domain' ),
		'archives'              => __( 'Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent :', 'text_domain' ),
		'all_items'             => __( 'Tout le patrimoine', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un élément au patrimoine', 'text_domain' ),
		'add_new'               => __( 'Ajouter', 'text_domain' ),
		'new_item'              => __( 'Nouvel élément', 'text_domain' ),
		'edit_item'             => __( 'Modifier', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour', 'text_domain' ),
		'view_item'             => __( 'Voir un élément', 'text_domain' ),
		'search_items'          => __( 'Rechercher', 'text_domain' ),
		'not_found'             => __( 'Aucune élément trouvé', 'text_domain' ),
		'not_found_in_trash'    => __( 'Aucune élément trouvé dans la corbeille', 'text_domain' ),
		'featured_image'        => __( 'Image à la une', 'text_domain' ),
		'set_featured_image'    => __( 'Mettre l\'image à la une', 'text_domain' ),
		'remove_featured_image' => __( 'Effacer l\'image à la une', 'text_domain' ),
		'use_featured_image'    => __( 'Utiliser l\'image à la une', 'text_domain' ),
		'insert_into_item'      => __( 'Insérer', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Ajouter à cet élément', 'text_domain' ),
		'items_list'            => __( 'Liste des éléments du patrimoine', 'text_domain' ),
		'items_list_navigation' => __( 'Navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filtre de la liste des éléments du patrimoine', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Patrimoine', 'text_domain' ),
		'description'           => __( 'Le patrimoine', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'            => array('post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'archive-patrimoine',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_patrimoine', $args );

}
add_action( 'init', 'cpt_patrimoine', 0 );

if ( ! function_exists('custom_post_realisation') ) {

// Register Custom Post Type
function custom_post_realisation() {

	$labels = array(
		'name'                  => _x( 'Realisations', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Realisation', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Réalisations', 'text_domain' ),
		'name_admin_bar'        => __( 'Réalisations', 'text_domain' ),
		'archives'              => __( 'Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent:', 'text_domain' ),
		'all_items'             => __( 'Toutes les réalisations', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter une réalisation', 'text_domain' ),
		'add_new'               => __( 'Ajouter', 'text_domain' ),
		'new_item'              => __( 'Nouvelle réalisation', 'text_domain' ),
		'edit_item'             => __( 'Modifier', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour', 'text_domain' ),
		'view_item'             => __( 'Voir la réalisation', 'text_domain' ),
		'search_items'          => __( 'Rechercher', 'text_domain' ),
		'not_found'             => __( 'Aucune réalisation trouvée', 'text_domain' ),
		'not_found_in_trash'    => __( 'Aucune réalisation trouvée dans la corbeille', 'text_domain' ),
		'featured_image'        => __( 'Image à la une', 'text_domain' ),
		'set_featured_image'    => __( 'Mettre l\'image à la une', 'text_domain' ),
		'remove_featured_image' => __( 'Supprimer l\'image à la une', 'text_domain' ),
		'use_featured_image'    => __( 'Utiliser l\'image à la une', 'text_domain' ),
		'insert_into_item'      => __( 'Insérer', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Ajouter à la réalisation', 'text_domain' ),
		'items_list'            => __( 'Liste des réalisations', 'text_domain' ),
		'items_list_navigation' => __( 'Navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter les réalisations', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Realisation', 'text_domain' ),
		'description'           => __( 'Les réalisations', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'            => array('post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_realisatio', $args );

}
add_action( 'init', 'custom_post_realisation', 0 );

}

?>