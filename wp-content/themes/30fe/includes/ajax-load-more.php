<?php


function load_more_posts() {
    // Sanitize and validate input
    $next_page = isset($_POST['current_page']) ? intval($_POST['current_page']) : 1;
    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : 'post';

    // Prepare the query arguments
    $query_args = [
        'post_type'      => $post_type,
        'posts_per_page' => 12,
        'paged'          => $next_page
    ];

    // Create a new WP_Query
    $query = new WP_Query($query_args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();

            // Dynamically include template based on post type
            if ($post_type === 'post') {
                get_template_part('modules/insights-card');
            } elseif ($post_type === 'news') {
                get_template_part('modules/news-card');
            } else {
                // Fallback to a generic template or default behavior
                get_template_part('modules/default-card');
            }
        }

        // Return the buffered content as a successful response
        wp_send_json_success(ob_get_clean());
    } else {
        wp_send_json_error('No more posts!');
    }

    // Always reset post data
    wp_reset_postdata();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

?>