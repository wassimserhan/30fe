<?php

function load_more_posts() {
  $next_page = $_POST['current_page'] + 1;
  $query = new WP_Query([
    'posts_per_page' => 12,
    'paged' => $next_page
  ]);
  if ($query->have_posts()) :

    ob_start();

  while ($query->have_posts()) : $query->the_post();

  get_template_part('modules/insights-card');

  endwhile;

  wp_send_json_success(ob_get_clean());

  else :

    wp_send_json_error('No more posts!');

  endif;
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

?>