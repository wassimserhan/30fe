<?php

function theme_files() {
    $css_version_number = get_field( 'css_version_number', get_option( 'page_on_front' ) );

    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/build/index.js', array(), $css_version_number, 1);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

     wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, 1);
     wp_script_add_data( 'jquery', array( 'integrity', 'crossorigin' ) , array( 'sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=', 'anonymous' ) );

    wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js');
   
    
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/build/style-index.css', array(), $css_version_number );
    wp_enqueue_style('theme_extra_styles', get_theme_file_uri('/build/index.css'));

    wp_localize_script('theme-js', 'siteData', array(
        'root_url'=> get_site_url(),
        ''
    ));
    
}
add_action( 'wp_enqueue_scripts', 'theme_files' );


function theme_features() {
  add_theme_support('title-tag');
  show_admin_bar( true );
  add_theme_support( 'post-thumbnails' );
  add_filter('acf/settings/remove_wp_meta_box', '__return_false');



}

add_action('after_setup_theme', 'theme_features');



/**
@ Create Link ID
*/


function wsj_link_id( $location, $link_text ) {

    global $post;
    $post_slug = $post->post_name;
    $link_id = $post_slug . '-' . sanitize_title( $location ) . '-' . sanitize_title( $link_text );
    return $link_id;
}



// function my_customize_rest_cors() {
// 	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
// 	add_filter( 'rest_pre_serve_request', function( $value ) {
// 		header( 'Access-Control-Allow-Origin: *' );
// 		header( 'Access-Control-Allow-Methods: GET' );
// 		header( 'Access-Control-Allow-Credentials: true' );
// 		header( 'Access-Control-Expose-Headers: Link', false );

// 		return $value;
// 	} );
// }

// add_action( 'rest_api_init', 'my_customize_rest_cors', 15 );

/**
@ Template scripts
*/

// function get_page_by_title_search($string){
//     global $wpdb;
//     $title = esc_sql($string);
//     if(!$title) return;
//     $page = $wpdb->get_results("
//         SELECT * 
//         FROM $wpdb->posts
//         WHERE post_title LIKE '%$title%'
//         AND post_type = 'page' 
//         AND post_status = 'publish'
//         LIMIT 1
//     ");
//     return $page;
// }




function remove_bloat() {
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    // filter to remove TinyMCE emojis
    add_filter( 'emoji_svg_url', '__return_false' );
    // filter to remove the DNS prefetch
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }

//   add_action( 'after_setup_theme', 'remove_bloat' );

    /**
    @ Remove WP Junk from <head>
    */

    show_admin_bar( 0 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
    remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );  
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wp_resource_hints', 2 );


    /**
    @ Remove Default Comments from top bar
    */

    function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    }
    add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );

    /**
    @ Remove Default Post Type & Comments from side menu
    */

    // function remove_default_post_type() {
    //     remove_menu_page( 'edit.php' );
    //     remove_menu_page( 'edit-comments.php' );
    // }

    //     add_action( 'admin_menu', 'remove_default_post_type' );

    /**
    @ Custom Post Types
    */
function theme_post_type_industry() {
    $labels = array(
        "name" => __( "Sectors", "" ),
        "singular_name" => __( "Sector", "" ),
        'add_new' => _x('Add New', 'sector item'), 
        'add_new_item' => __('Add New Sector'), 
        'edit_item' => __('Edit Sector'), 
        'new_item' => __('New Sector'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "menu_icon" => 'dashicons-building',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "sectors", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor",'page-attributes' ),
    );

    register_post_type( "industry", $args );
}

    add_action( 'init', 'theme_post_type_industry' );


function theme_post_type_expertise() {
    $labels = array(
        "name" => __( "Expertise", "" ),
        "singular_name" => __( "Expertise", "" ),
        'add_new' => _x('Add New', 'Expertise item'), 
        'add_new_item' => __('Add New Expertise'), 
        'edit_item' => __('Edit Expertise'), 
        'new_item' => __('New Expertise'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "menu_icon" => 'dashicons-lightbulb',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "expertise", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor",'page-attributes' ),
    );

    register_post_type( "expertise", $args );
}

    add_action( 'init', 'theme_post_type_expertise' );


    function theme_post_type_team() {
    $labels = array(
        "name" => __( "Team", "" ),
        "singular_name" => __( "Team Member", "" ),
        'add_new' => _x('Add New', 'team item'), 
        'add_new_item' => __('Add New Team Member'), 
        'edit_item' => __('Edit Team Member'), 
        'new_item' => __('New Team Member'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "menu_icon" => 'dashicons-groups',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "team", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor" ),
    );

    register_post_type( "team", $args );
}

    add_action( 'init', 'theme_post_type_team' );


    

    /*  Reading time  */

function display_read_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $count_words = str_word_count( strip_tags( $content ) );
	
    $read_time = ceil($count_words / 250);
    
	 if ($read_time == 1) { $suffix = '<span class="rt-suffix"> min read</span>';  }
	 else { $suffix = '<span class="rt-suffix"> min read</span>';  }
	
    $read_time_output = $read_time . $suffix;

    return $read_time_output;
}

// Function to change "posts" to "news" in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Insights';
    $submenu['edit.php'][5][0] = 'Insights';
    $submenu['edit.php'][10][0] = 'Add Insight';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to "news"
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Insights';
    $labels->singular_name = 'Insight';
    $labels->add_new = 'Add Insight';
    $labels->add_new_item = 'Add Insight';
    $labels->edit_item = 'Edit Insight';
    $labels->new_item = 'Insight';
    $labels->view_item = 'View Insight';
    $labels->search_items = 'Search Insights';
    $labels->not_found = 'No Insights found';
    $labels->not_found_in_trash = 'No Insights found in Trash';
}
add_action( 'init', 'change_post_object_label' );

function bks_replace_admin_menu_icons_css() {
    ?>
<style>
.dashicons-admin-post:before {
  font-family: "dashicons";
  content: "\f497" !important;
}
</style>
<?php
}

add_action( 'admin_head', 'bks_replace_admin_menu_icons_css' );




// Remove P tag
function remove_the_wpautop_function() {
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
}

add_action( 'after_setup_theme', 'remove_the_wpautop_function' );


/**
* add order column to admin listing screen for header text
*/
function add_new_industry_column($industry_columns) {
  $industry_columns['menu_order'] = "Order";
  return $industry_columns;
}
add_action('manage_industry_posts_columns', 'add_new_industry_column');

/**
* show custom order column values
*/
function show_order_column($name){
  global $post;

  switch ($name) {
    case 'menu_order':
      $order = $post->menu_order;
      echo $order;
      break;
   default:
      break;
   }
}
add_action('manage_industry_posts_custom_column','show_order_column');






 ?>