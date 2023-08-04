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
    'post_type' => array('post', 'page', 'team', 'expertise', 'sector'),
    's' =>sanitize_text_field($data['term'])
  ));

  $results = array(
    'generalInfo'=> array(),
    'team'=> array(),
    'expertise'=> array(),
    'sector'=> array()
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

  if(get_post_type() == 'team') {
  array_push($results['team'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url()
    ));
  }

   if(get_post_type() == 'expertise') {
  array_push($results['expertise'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink()
    ));
  }

   if(get_post_type() == 'sector') {
  array_push($results['sector'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink()
    ));
  }

   if(get_post_type() == 'post' OR get_post_type() == 'page') {
  array_push($results['generalInfo'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'postType' => get_post_type()
    ));
  }

  }
  
  return $results;

 }