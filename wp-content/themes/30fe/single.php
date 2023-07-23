  <?php 

  get_header(); 
  
   $subtitle = get_field ('subtitle')
   ?>

  <main class="main-container">
    <section id="single" class="single">

      <div class="single__card">
        <article class="single__detail single__detail--left">
          <section class="pill pill-single">
            <p class="pill__label pill__label-single insights__card__label__category__text">
              <?php echo get_the_category_list(', '); ?>
            </p>
          </section>
          <h1 class="single__headline"><?php the_title() ?></h1>
          <p class="single__copy"><?php echo $subtitle ?></p>
        </article>
        <figure class="single__figure">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/traffic.jpg"
            alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
        </figure>
      </div>

    </section>









    <section class="insight-post">
      <?php
      while( have_posts()) {
        the_post();
        $subtitle = get_field ('subtitle'); 
        ?>

      <!-- Display Content -->
      <?php echo the_content();?>

      <!-- Team Member -->
      <section class="insight-post__wrapper">


        <?php 

// Retrieve Team Member Info
        $team_members = get_field ( 'team_member' ); 
        
        foreach ($team_members as $team_member):     
        $name = get_the_title($team_member);
        $title = get_field('title', $team_member);
        $phone = get_field('phone', $team_member);
        $email = get_field('email', $team_member);
        $img = get_field('headshot', $team_member);
        $image = $img['url']; ?>
        <section class="insight-post__card">
          <figure class="insight-post__card__image">
            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" alt=" #"
              title="#">
          </figure>
          <section class="pill">
            <p class="pill__label">Practice Leads</p>
          </section>
          <article class="insight-post__details">
            <div class="insight-post__card__name">
              <?php echo $name ?>
            </div>
            <p><?php echo $title ?></p>
            <p>Direct: <?php echo $phone ?></p>
            <p><?php echo $email ?></p>
          </article>

        </section>
        <?php endforeach; ?>
      </section>

      <?php } 
    
      
      ?>
    </section>
  </main>

  <?php get_footer() ?>