<?php
 
 add_action('rest_api_init', 'registerSearch');

 function registerSearch() {
  register_rest_route('30fe/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE, //GET
    'callback' => 'searchResults'

  ));
 }

 function searchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'team', 'expertise', 'sector'),
    's' =>sanitize_text_field($data['term'])
  ));

  $results = array();

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();
    array_push($results, array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url(),
      'pill' => get_post_type()
    ));
  }
  
  return $results;

 }