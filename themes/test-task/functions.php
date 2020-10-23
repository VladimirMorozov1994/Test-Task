<?php

add_action('after_setup_theme', 'test_task_setup_theme');
function test_task_setup_theme()
{
    registerThemeSupport();
    registerMenus();
    registerSidebars();
    registerWidgets();
    registerPostTypes();
    registerMetaBoxes();
}

function registerThemeSupport()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list']);
    add_theme_support('post-formats', ['gallery', 'image', 'quote', 'video', 'link']);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
}

function registerMenus()
{
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary-menu', 'test_task' )
    ) );
}
  
function registerSidebars()
{
    /* No sidebars */
}

function registerWidgets()
{
    /* No widgets */
}

function registerPostTypes()
{
    /* No post types */
}

function registerMetaBoxes()
{
    /* No meta boxes */
}

add_action('wp_enqueue_scripts', 'test_task_scripts');
function test_task_scripts()
{
    $templateDir = get_template_directory_uri();
    $assetsDir = $templateDir . '/assets';

    wp_enqueue_style('style', $templateDir . '/style.css');

    /* Styles */
    wp_enqueue_style('carousel-min', $assetsDir . '/css/owl.carousel.min.css');
    wp_enqueue_style('carousel-default', $assetsDir . '/css/owl.theme.default.min.css');
    
    wp_enqueue_style('app', $assetsDir . '/css/app.css');
    wp_enqueue_style('styles', $assetsDir . '/css/home/styles.css');
    
    wp_enqueue_style('lg', $assetsDir . '/css/home/lg.css',  array(), 1.0, '(max-width:1200px)' );
    wp_enqueue_style('sl', $assetsDir . '/css/home/sl.css',  array(), 1.0, '(max-width: 1170px)' );
    wp_enqueue_style('xm', $assetsDir . '/css/home/xm.css',  array(), 1.0, '(max-width: 992px)');
    wp_enqueue_style('md', $assetsDir . '/css/home/md.css',  array(), 1.0, '(max-width: 768px)');
    
    
    wp_enqueue_style('fonts', $assetsDir . '/css/fonts.css');
    wp_enqueue_style('header', $assetsDir . '/css/header.css');
    wp_enqueue_style('footer', $assetsDir . '/css/footer.css'); 

    wp_enqueue_style('realisaties', $assetsDir . '/css/realisaties.css'); 

    /* Scripts */
   
    wp_enqueue_script('carousel-js', $assetsDir . '/js/owl.carousel.min.js', ['jquery']);   
    wp_enqueue_script('script-js', $assetsDir . '/js/script.js', ['jquery']);  

    test_task_localize_scripts();
}

add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);



// Create Custom Post Type Clients
function custom_post_type_clients() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Clients', 'test_task' ),
            'singular_name'       => _x( 'Clients', 'test_task' ),
            'menu_name'           => __( 'Clients', 'test_task' ), 
            'all_items'           => __( 'All Clients', 'test_task' ),
            'view_item'           => __( 'View Client', 'test_task' ),
            'add_new_item'        => __( 'Add New Client', 'test_task' ),
            'add_new'             => __( 'Add Client', 'test_task' ),
            'edit_item'           => __( 'Edit Client', 'test_task' ),
            'update_item'         => __( 'Update Client', 'test_task' ),
            'search_items'        => __( 'Search Clients', 'test_task' ),
            'not_found'           => __( 'Not Found', 'test_task' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'test_task' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Clients', 'test_task' ),
            'description'         => __( 'Clients', 'test_task' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            //'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-businessman',
            'show_in_rest' => true,
     
        );
         
    // Registering your Custom Post Type
    register_post_type( 'clients', $args );
}
 
     
add_action( 'init', 'custom_post_type_clients', 0 );


// Create Custom Post Type Merch
function custom_post_type_merch() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Merch', 'test_task' ),
            'singular_name'       => _x( 'Merch', 'test_task' ),
            'menu_name'           => __( 'Merch', 'test_task' ), 
            'all_items'           => __( 'All Merch', 'test_task' ),
            'view_item'           => __( 'View Merch', 'test_task' ),
            'add_new_item'        => __( 'Add New Merch', 'test_task' ),
            'add_new'             => __( 'Add Merch', 'test_task' ),
            'edit_item'           => __( 'Edit Merch', 'test_task' ),
            'update_item'         => __( 'Update Merch', 'test_task' ),
            'search_items'        => __( 'Search Merch', 'test_task' ),
            'not_found'           => __( 'Not Found', 'test_task' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'test_task' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Merch', 'test_task' ),
            'description'         => __( 'Merch', 'test_task' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', 'excerpt' ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            //'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-products',
            'show_in_rest' => true,
     
        );
         
    // Registering your Custom Post Type
    register_post_type( 'merch', $args );
}
 
     
add_action( 'init', 'custom_post_type_merch', 0 );

// custom-logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 37,
    'width'       => 53,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

 
 

function test_task_localize_scripts()
{
    wp_localize_script('cards-js', 'ajax', [
        'url' => admin_url('admin-ajax.php'),
    ]);
}
 
 
// Include ACF blocks
require_once('blocks/acf_blocks_enable.php');

// ACF Option page 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings', 
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
 
}

 
//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types; 
} 
add_action('upload_mimes', 'add_file_types_to_uploads');

// Page excerpt
add_post_type_support( 'page', 'excerpt' );


 /* Custom image size */
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
    add_image_size('hot-news','302','302', true); 
    add_image_size('post-image','809','445', true); 
    add_image_size('post-sm','210','210', true);  
}

// Excerpt length
function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."...";
    echo $excerpt;
}
 
// Gutenberg styles
function gb_gutenberg_admin_styles() {
    echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1200px;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1080px;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }	
        </style>
    ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');

//Body Class for Page Slug
//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


/* EXTEND SUBNAV
******************************************/

class submenu_wrap extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='sub-menu'><div class='sub-menu-wrap'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</div></ul>\n";
    }
} 
// Pagination
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_next'    => false,
            'prev_text'    => __('« '),
            'next_text'    => __('»'),
            'type'         => 'plain',
        ));
    }
}

// Register 

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => sprintf(__('Sidebar') ),
		'id'            => "sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => "</div>",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
    ) );
    register_sidebar( array(
		'name'          => sprintf(__('Footer') ),
		'id'            => "footer",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => "</div>",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}