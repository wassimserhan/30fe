  <?php 

  get_header(); ?>

  <main class="main-container">
    <section class="insights insights__single-post">
      <?php
      $insightsBlog = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type'=> 'insights'
      ));
      while( $insightsBlog->have_posts()) {
        $insightsBlog->the_post();
        $subtitle = get_field ('subtitle'); 

        // Retrieve Team Member Info
        $team_members = get_field ( 'team_member' ); 
        foreach ($team_members as $team_member):     
        $name = get_the_title($team_member);
        $title = get_field('title', $team_member);
        $phone = get_field('phone', $team_member);
        $email = get_field('email', $team_member);
        $img = get_field('headshot', $team_member);
        $image = $img['url']; ?>

      <!-- Display Content -->
      <?php echo the_content();?>

      <!-- Team Member -->
      <section class="insights__wrapper">
        <section class="insights__card">
          <figure class="insights__card__image">
            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" alt=" #"
              title="#">
          </figure>
          <section class="pill">
            <p class="pill__label">Practice Leads</p>
          </section>
          <article class="member__details">
            <div class="insights__card__name">
              <?php echo $name ?>
            </div>
            <p><?php echo $title ?></p>
            <p>Direct: <?php echo $phone ?></p>
            <p><?php echo $email ?></p>
          </article>
        </section>
      </section>
      <?php endforeach; ?>
      <?php } ?>
    </section>
  </main>

  <?php get_footer() ?>