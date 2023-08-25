<?php
 
 add_action('rest_api_init', 'registerSearch');

 function registerSearch() {
  register_rest_route('30fe/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE, //GET (WP constant)
    'callback' => 'searchResults'//function that returns json data

  ));
 }

 function searchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('team', 'expertise', 'industry', 'post'),
    's' =>sanitize_text_field($data['term']),
  ));

  $results = array(
    'team' => array(),
    'expertise' => array(),
    'industry' => array(),
    'post' => array()
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if(get_post_type() === 'team') {
    array_push($results['team'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url()
    ));
    }

    if(get_post_type() === 'expertise') {
    array_push($results['expertise'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url(),
      'id' => get_the_ID()
    ));
    }
     if(get_post_type() === 'industry') {
    array_push($results['industry'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url(),
      'id' => get_the_ID()
    ));
    }
      if(get_post_type() === 'post') {
    array_push($results['post'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url()
    ));
    }
  }


  // Pull any Team related to an Expertise
  // $limitInsights = new WP_Query(array(
  //   'post_type' => 'post',
  //   'posts_per_page' => 3
  // ));

  //   while( $limitInsights->have_posts() ) {
  //      $limitInsights->the_post();
  //     if(get_post_type() === 'post') {
  //     array_push($results['post'], array(
  //     'title' => get_the_title(),
  //     'permalink' => get_the_permalink(),
  //     'image' => get_the_post_thumbnail_url()
  //   ));
  //   }
  // }



  // Pull any Team related to an Expertise
  if($results['expertise']) {
  $expertiseMetaQuery = array('relation'=>'OR');

  foreach($results['expertise'] as $item) {
    array_push($expertiseMetaQuery, array(
      'key' => 'expertise',
      'compare' => 'LIKE',
      'value' => '"' . $item['id'] . '"'
    ));
  }
  
  $expertiseRelationshipQuery = new WP_Query(array(
    'post_type' => 'team',
    'meta_query' => $expertiseMetaQuery
  ));

  while($expertiseRelationshipQuery->have_posts() ) {
      $expertiseRelationshipQuery->the_post();
      if(get_post_type() === 'team') {
      array_push($results['team'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url()
    ));
    }
  }


  //Remove duplicates
  $results['team'] = array_values(array_unique($results['team'], SORT_REGULAR));
  }




   // Pull any Team related to a Sector
  if($results['industry']) {
  $sectorMetaQuery = array('relation'=>'OR');

  foreach($results['industry'] as $item) {
     array_push($sectorMetaQuery, array(
      'key' => 'sector',
      'compare' => 'LIKE',
      'value' => '"' . $item['id'] . '"'
    ));
  }
  
  $sectorRelationshipQuery = new WP_Query(array(
    'post_type' => 'team',
    'meta_query' => $sectorMetaQuery
  ));

  while($sectorRelationshipQuery->have_posts() ) {
      $sectorRelationshipQuery->the_post();
      if(get_post_type() === 'team') {
      array_push($results['team'], array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink(),
      'image' => get_the_post_thumbnail_url()
    ));
    }
  }


  //Remove duplicates
  $results['team'] = array_values(array_unique($results['team'], SORT_REGULAR));
  }


  
  
  
  return $results;

 }