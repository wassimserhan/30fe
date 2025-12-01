<?php
// In functions.php

function load_more_posts() {
    $next_page = isset($_POST['current_page']) ? intval($_POST['current_page']) : 1;
    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : 'post';

    $query_args = [
        'post_type'      => $post_type,
        'posts_per_page' => 12,
        'paged'          => $next_page,
        'post_status'    => 'publish',
    ];

    // Special rules for seminars (past-only)
    if ($post_type === 'seminars') {
        $today = date('Ymd');

        $query_args['orderby']   = 'meta_value';
        $query_args['meta_key']  = 'seminar_date';
        $query_args['meta_type'] = 'DATE';
        $query_args['order']     = 'ASC';
        $query_args['meta_query'] = [
            [
                'key'     => 'seminar_date',
                'value'   => $today,
                'compare' => '<',
                'type'    => 'DATE',
            ],
        ];
    }

    $query = new WP_Query($query_args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();

            if ($post_type === 'post') {
                get_template_part('modules/insights-card');
            } elseif ($post_type === 'news') {
                get_template_part('modules/news-card');
            } elseif ($post_type === 'seminars') {
                get_template_part('modules/seminars-card');
            } else {
                get_template_part('modules/default-card');
            }
        }

        wp_reset_postdata();

        wp_send_json_success(ob_get_clean());
    } else {
        wp_reset_postdata();
        wp_send_json_error('No more posts!');
    }
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');