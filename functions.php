<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_theme_support( 'post-thumbnails' ); 

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
		'rewrite' => array('slug' => 'patrimoine'),
	);
	register_post_type( 'post_type_patrimoine', $args );

}
add_action( 'init', 'cpt_patrimoine', 0 );

if ( ! function_exists( 'patrimoine_taxonomy' ) ) {

// Register Custom Taxonomy
function patrimoine_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Patrimoine-categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Patrimoine-categorie', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Catégories du patrimoine', 'text_domain' ),
		'all_items'                  => __( 'Toutes les catégories', 'text_domain' ),
		'parent_item'                => __( 'Parent', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent :', 'text_domain' ),
		'new_item_name'              => __( 'Nouvelle catégorie', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter une catégorie', 'text_domain' ),
		'edit_item'                  => __( 'Modifier une catégorie', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour', 'text_domain' ),
		'view_item'                  => __( 'Voir la catégorie', 'text_domain' ),
		'separate_items_with_commas' => __( 'Séparer les catégories par des virgules', 'text_domain' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer la catégorie', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choisir par les plus utilisées', 'text_domain' ),
		'popular_items'              => __( 'Plus populaires', 'text_domain' ),
		'search_items'               => __( 'Rechercher une catégorie', 'text_domain' ),
		'not_found'                  => __( 'Aucune catégorie trouvée', 'text_domain' ),
		'no_terms'                   => __( 'Aucune catégorie', 'text_domain' ),
		'items_list'                 => __( 'Liste des catégories', 'text_domain' ),
		'items_list_navigation'      => __( 'Navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'categorie-du-patrimoine',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'patrimoine_category', array( 'post_type_patrimoine' ), $args );

}
add_action( 'init', 'patrimoine_taxonomy', 0 );

}

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
		'has_archive'           => 'archive-realisation',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' => array('slug' => 'realisation'),
	);
	register_post_type( 'post_type_realisatio', $args );

}
add_action( 'init', 'custom_post_realisation', 0 );

}

// Register Custom Taxonomy
function realisation_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Realisation-categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Realisation-categorie', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Catégories des réalisations', 'text_domain' ),
		'all_items'                  => __( 'Toutes les catégories', 'text_domain' ),
		'parent_item'                => __( 'Parent', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent :', 'text_domain' ),
		'new_item_name'              => __( 'Nouvelle catégorie', 'text_domain' ),
		'add_new_item'               => __( 'Ajouter une catégorie', 'text_domain' ),
		'edit_item'                  => __( 'Modifier une catégorie', 'text_domain' ),
		'update_item'                => __( 'Mettre à jour', 'text_domain' ),
		'view_item'                  => __( 'Voir la catégorie', 'text_domain' ),
		'separate_items_with_commas' => __( 'Séparer les catégories par des virgules', 'text_domain' ),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer la catégorie', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choisir par les plus utilisées', 'text_domain' ),
		'popular_items'              => __( 'Plus populaires', 'text_domain' ),
		'search_items'               => __( 'Rechercher une catégorie', 'text_domain' ),
		'not_found'                  => __( 'Aucune catégorie trouvée', 'text_domain' ),
		'no_terms'                   => __( 'Aucune catégorie', 'text_domain' ),
		'items_list'                 => __( 'Liste des catégories', 'text_domain' ),
		'items_list_navigation'      => __( 'Navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'categorie-des-realisations',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'realisation_category', array( 'post_type_realisatio' ), $args );

}
add_action( 'init', 'realisation_taxonomy', 0 );


function cpt_path() {

	$labels = array(
		'name'                  => _x( 'Parcours', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Parcours', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Parcours interactif', 'text_domain' ),
		'name_admin_bar'        => __( 'Parcours interactif', 'text_domain' ),
		'archives'              => __( 'Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent :', 'text_domain' ),
		'all_items'             => __( 'Tous les parcours', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter un parcours', 'text_domain' ),
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
		'items_list'            => __( 'Liste des parcours', 'text_domain' ),
		'items_list_navigation' => __( 'Navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filtre de la liste des éléments', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Parcours', 'text_domain' ),
		'description'           => __( 'Les parcours interactif', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'archive-parcours',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' => array('slug' => 'parcours'),
	);
	register_post_type( 'post_type_path', $args );

}
add_action( 'init', 'cpt_path', 0 );


function test(){
    wp_enqueue_script ( "lightboxVideo", get_stylesheet_directory_uri()."/lightbox/videoLightbox.js", array("jquery"));
}
add_action( 'wp_enqueue_scripts', 'test' );




function add_script() {
	
	wp_register_script ( 'script-jf', get_stylesheet_directory_uri().'/js/script.js', array('jquery'));
	wp_enqueue_script ( 'script-jf');
	$pluginDir = get_stylesheet_directory_uri();
    wp_localize_script( 'script-jf', 'pluginDir', $pluginDir );
	wp_localize_script('script-jf', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}	
add_action('wp_enqueue_scripts', 'add_script');

add_action( 'wp_ajax_listing_ajax_action', 'listing_ajax_action' );
add_action( 'wp_ajax_nopriv_listing_ajax_action', 'listing_ajax_action' );

function listing_ajax_action() {
	
	

	$param = $_POST['cat_id'];
	$query = new WP_Query( array( 
	'post_type' => array('post_type_realisatio','post_type_patrimoine'),
	'tax_query' => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'realisation_category',
			'field'    => 'term_id',
			'terms'    => $param,
		),
		array(
			'taxonomy' => 'patrimoine_category',
			'field'    => 'term_id',
			'terms'    => $param,
		)
	)
	 ) );
	 
	 echo category_description($param);
	 
	
	 
	
if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); 
	
		
		
			$c .= '<div id="accordion">
				
					<h1>'. get_field("date_de_la_realisation") .'<span>-</span>'. get_the_title() . '</h1>
				<div>
					<p>' . get_the_excerpt() . '</p>
					<a href="'. get_the_permalink() . '">Voir la fiche</a>
					'. get_the_post_thumbnail($sizes) . '
				</div>
				
					
				
				</article>';
		
		
		endwhile;
		else : echo category_description($param);
		
		$c .= '<div>' . 'Aucun élément trouvé' . '</div>';
		
			
		
		endif;
		
		echo $c;
	
	
	
die();
}


