<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


add_filter( 'wc_product_sku_enabled', '__return_false' );



function entree()
{
    register_post_type('Entrees',
        array(
            'labels' => array(
                'name' => __('Entrées', 'tournebroche'),
                'singular_name' => __('Entrée', 'tournebroche'),
                'add_new' => __('Ajouter une entrée', 'tournebroche'),
                'add_new_item' => __('Ajouter une nouvelle entrée', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier l'entrée", 'tournebroche'),
                'new_item' => __('Nouvelle entrée', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche de l'entrée", 'tournebroche'),
                'search_items' => __('Rechercher une entrée', 'tournebroche'),
                'not_found' => __('Aucune entrée', 'tournebroche'),
                'not_found_in_trash' => __('Aucune entrée trouvée dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'entree', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('post_tag'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'entree');

function plat()
{
    register_post_type('Plat',
        array(
            'labels' => array(
                'name' => __('Plats', 'tournebroche'),
                'singular_name' => __('Plat', 'tournebroche'),
                'add_new' => __('Ajouter un plat', 'tournebroche'),
                'add_new_item' => __('Ajouter un nouveau plat', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier le plat", 'tournebroche'),
                'new_item' => __('Nouveau plat', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche du plat", 'tournebroche'),
                'search_items' => __('Rechercher un plat', 'tournebroche'),
                'not_found' => __('Aucun plat', 'tournebroche'),
                'not_found_in_trash' => __('Aucun plat trouvé dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'plat', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'plat');

function dessert()
{
    register_post_type('Dessert',
        array(
            'labels' => array(
                'name' => __('Desserts', 'tournebroche'),
                'singular_name' => __('Dessert', 'tournebroche'),
                'add_new' => __('Ajouter un dessert', 'tournebroche'),
                'add_new_item' => __('Ajouter un nouveau dessert', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier le dessert", 'tournebroche'),
                'new_item' => __('Nouveau dessert', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche du dessert", 'tournebroche'),
                'search_items' => __('Rechercher un dessert', 'tournebroche'),
                'not_found' => __('Aucun dessert', 'tournebroche'),
                'not_found_in_trash' => __('Aucun dessert trouvé dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'dessert', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('post_tag'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'dessert');

function tablehote()
{
    register_post_type('Tablehote',
        array(
            'labels' => array(
                'name' => __("Table d'hôte", 'tournebroche'),
                'singular_name' => __('Table d\'hôte', 'tournebroche'),
                'add_new' => __('Ajouter une table d\'hôte', 'tournebroche'),
                'add_new_item' => __('Ajouter une nouvelle table d\'hôte', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier la table d'hôte", 'tournebroche'),
                'new_item' => __('Nouvelle table d\'hôte', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche de la table d'hôte", 'tournebroche'),
                'search_items' => __('Rechercher une table d\'hôte', 'tournebroche'),
                'not_found' => __('Aucune table d\'hôte', 'tournebroche'),
                'not_found_in_trash' => __('Aucune table d\'hôte trouvée dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'tablehote', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'tablehote');


function menuenfant()
{
    register_post_type('Menuenfant',
        array(
            'labels' => array(
                'name' => __('Menu enfant', 'tournebroche'),
                'singular_name' => __('Menu enfant', 'tournebroche'),
                'add_new' => __('Ajouter un menu enfant', 'tournebroche'),
                'add_new_item' => __('Ajouter un nouveau menu enfant', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier le menu enfant", 'tournebroche'),
                'new_item' => __('Nouveau menu enfant', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche du menu enfant", 'tournebroche'),
                'search_items' => __('Rechercher un menu enfant', 'tournebroche'),
                'not_found' => __('Aucun menu enfant', 'tournebroche'),
                'not_found_in_trash' => __('Aucun menu enfant trouvé dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'menuenfant', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'menuenfant');


function menumidi()
{
    register_post_type('Menumidi',
        array(
            'labels' => array(
                'name' => __('Menu midi', 'tournebroche'),
                'singular_name' => __('Menu midi', 'tournebroche'),
                'add_new' => __('Ajouter un menu midi', 'tournebroche'),
                'add_new_item' => __('Ajouter un nouveau menu midi', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier le menu midi", 'tournebroche'),
                'new_item' => __('Nouveau menu midi', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche du menu midi", 'tournebroche'),
                'search_items' => __('Rechercher un menu midi', 'tournebroche'),
                'not_found' => __('Aucun menu midi', 'tournebroche'),
                'not_found_in_trash' => __('Aucun menu midi trouvé dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-carrot",
            'rewrite' => array('slug' => 'menumidi', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('category'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'menumidi');


function equipe()
{
    register_post_type('Equipe',
        array(
            'labels' => array(
                'name' => __('Équipe', 'tournebroche'),
                'singular_name' => __('Équipe', 'tournebroche'),
                'add_new' => __('Ajouter un membre', 'tournebroche'),
                'add_new_item' => __('Ajouter un nouveau membre', 'tournebroche'),
                'edit' => __('Changer', 'tournebroche'),
                'edit_item' => __("Modifier le membre", 'tournebroche'),
                'new_item' => __('Nouveau membre', 'tournebroche'),
                'view' => __('Voir', 'tournebroche'),
                'view_item' => __("Voir la fiche du membre", 'tournebroche'),
                'search_items' => __('Rechercher un membre', 'tournebroche'),
                'not_found' => __('Aucun membre', 'tournebroche'),
                'not_found_in_trash' => __('Aucun membre trouvé dans la corbeille', 'tournebroche')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => "dashicons-groups",
            'rewrite' => array('slug' => 'membre', 'with_front' => false),
            'menu_position' => 30,
            'taxonomies' => array('post_tag'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'can_export' => true,
        ));
}

add_action('init', 'equipe');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
            'page_title' => 'Options générales',
            'menu_title' => 'Options générales',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false)
    );
}