<?php

require get_theme_file_path('/includes/search-route.php');
require get_theme_file_path('/includes/ajax-load-more.php');
require get_theme_file_path('/includes/insights-search.php');


// register REST here

function enqueue_custom_script() {
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/path-to-your-script.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-script', 'wpAjax', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');




function theme_files() {
    $css_version_number = get_field( 'css_version_number', get_option( 'page_on_front' ) );

     wp_enqueue_style('swiper-css', '//unpkg.com/swiper/swiper-bundle.min.css');

    // wp_enqueue_style('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css');


     
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/build/index.js', array('jquery'), $css_version_number, true);

   
  

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
     wp_script_add_data( 'jquery', array( 'integrity', 'crossorigin' ) , array( 'sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=', 'anonymous' ) );

    wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js');

    wp_enqueue_script( 'gsap-scroll', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js');

    wp_enqueue_script( 'swiper', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');


    
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/build/style-index.css', array(), $css_version_number );
    wp_enqueue_style('theme_extra_styles', get_theme_file_uri('/build/index.css'));

   wp_localize_script('theme-js', 'siteData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
));
    
}
add_action( 'wp_enqueue_scripts', 'theme_files' );


// Enqueue LightGallery and plugins
function enqueue_lightgallery_assets() {
    // Enqueue LightGallery core CSS
    wp_enqueue_style(
        'lightgallery-css',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css',
        array(),
        '2.7.1'
    );

    // Enqueue LightGallery core JS
    wp_enqueue_script(
        'lightgallery-js',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js',
        array('jquery'), // Optional: replace 'jquery' if not needed
        '2.7.1',
        true
    );

    // Enqueue LightGallery plugins (e.g., zoom and thumbnail)
    wp_enqueue_script(
        'lg-zoom-js',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js',
        array('lightgallery-js'),
        '2.7.1',
        true
    );

    wp_enqueue_script(
        'lg-thumbnail-js',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js',
        array('lightgallery-js'),
        '2.7.1',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_lightgallery_assets');


// Initialize LightGallery
function initialize_lightgallery_script() {
    ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryElements = document.querySelectorAll('.lightgallery');
    galleryElements.forEach(function(el) {
        lightGallery(el, {
            plugins: [lgThumbnail, lgZoom], // Ensure these match the plugins you're using
            speed: 500,
        });
    });
});
</script>
<?php
}
add_action('wp_footer', 'initialize_lightgallery_script', 20);





function theme_features() {
  add_theme_support('title-tag');
  show_admin_bar( false );
  add_theme_support( 'post-thumbnails' );
  add_filter('acf/settings/remove_wp_meta_box', '__return_false');
  add_image_size( 'square', 100, 100, true );


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
        "show_in_rest" => true,
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
        "show_in_rest" => true,
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
        "show_in_rest" => true,
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



    function theme_post_type_careers() {
    $labels = array(
        "name" => __( "Careers", "" ),
        "singular_name" => __( "Career", "" ),
        'add_new' => _x('Add New', 'career item'), 
        'add_new_item' => __('Add New Career'), 
        'edit_item' => __('Edit Career'), 
        'new_item' => __('New Career'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => false,
        "menu_icon" => 'dashicons-businessperson',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "career", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor" ),
    );

    register_post_type( "careers", $args );


}


    add_action( 'init', 'theme_post_type_careers' );


     function theme_post_type_news() {
    $labels = array(
        "name" => __( "News", "" ),
        "singular_name" => __( "News", "" ),
        'add_new' => _x('Add New', 'news item'), 
        'add_new_item' => __('Add New News'), 
        'edit_item' => __('Edit News'), 
        'new_item' => __('New News'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "news",
        "has_archive" => false,
        "menu_icon" => 'dashicons-bell',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "news", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor" ),
        'taxonomies' => array('news_category'),
    );

    register_post_type( "news", $args );


}


    add_action( 'init', 'theme_post_type_news' );



      function theme_post_type_events() {
    $labels = array(
        "name" => __( "Events", "" ),
        "singular_name" => __( "Events", "" ),
        'add_new' => _x('Add Events', 'event item'), 
        'add_new_item' => __('Add New Event'), 
        'edit_item' => __('Edit Events'), 
        'new_item' => __('New Events'),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => false,
        "menu_icon" => 'dashicons-format-gallery',
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "events", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "thumbnail", "editor" ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( "events", $args );


}


    add_action( 'init', 'theme_post_type_events' );

    
//Register Categories

function register_custom_taxonomy() {
    $labels = array(
        'name'              => _x('Categories', 'taxonomy general name'),
        'singular_name'     => _x('Category', 'taxonomy singular name'),
        'search_items'      => __('Search Categories'),
        'all_items'         => __('All Categories'),
        'parent_item'       => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item'         => __('Edit Category'),
        'update_item'       => __('Update Category'),
        'add_new_item'      => __('Add New Category'),
        'new_item_name'     => __('New Category Name'),
        'menu_name'         => __('Categories'),
    );

    $args = array(
        'hierarchical'      => true, // Makes it behave like categories
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'     => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'news-category', 'with_front' => true),
    );

    register_taxonomy('news_category', array('news'), $args);
}
add_action('init', 'register_custom_taxonomy');

    

    /*  Reading time  */

function display_read_time() {
    // Get the current post content
    $content = get_post_field('post_content', get_the_ID());
    
    // Count the words
    $count_words = str_word_count(strip_tags($content));
    
    // Calculate read time
    $read_time = ceil($count_words / 250);
    
    // Set suffix
    $suffix = '<span class="rt-suffix"> min read</span>';
    
    // Construct output
    $read_time_output = $read_time . $suffix;
    
    return $read_time_output;
}


// Function to change "posts" to "insights" in the admin side menu
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

function gp_register_taxonomy_for_object_type() {
    if (taxonomy_exists('post_tag')) {
        register_taxonomy_for_object_type('post_tag', 'team');
    }
}
add_action('init', 'gp_register_taxonomy_for_object_type');



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
// function remove_the_wpautop_function() {
//     remove_filter( 'the_content', 'wpautop' );
//     remove_filter( 'the_excerpt', 'wpautop' );
// }

// add_action( 'after_setup_theme', 'remove_the_wpautop_function' );


/**
* add order column to admin listing screen for header text
*/
// function add_new_industry_column($industry_columns) {
//   $industry_columns['menu_order'] = "Order";
//   return $industry_columns;
// }
// add_action('manage_industry_posts_columns', 'add_new_industry_column');

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



//Add Roles Category in Team Custom Post Type
function tr_create_my_taxonomy() {

    register_taxonomy(
        'team-category',
        'team',
        array(
            'label' => __( 'Roles' ),
            'rewrite' => array( 'slug' => 'team-category' ),
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest'=> true,
        )
        
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );

 ?>