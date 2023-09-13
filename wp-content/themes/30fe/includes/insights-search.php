<?php

function insights_search() {
  $category = $_POST['category'];
  $query = new WP_Query([
    'posts_per_page' => -1,
    'category_name' => $category
  ]);
  if ($query->have_posts()) :

    ob_start();

  while ($query->have_posts()) : $query->the_post();

  get_template_part('modules/insights-card');

  endwhile;

  wp_send_json_success(ob_get_clean());

  else :

    wp_send_json_error('No posts!');

  endif;
}
add_action('wp_ajax_insights_search', 'insights_search');
add_action('wp_ajax_nopriv_insights_search', 'insights_search');

?>