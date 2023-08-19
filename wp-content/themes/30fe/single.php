  <?php 

  get_header(); 
  
   $subtitle = get_field ('subtitle')
   ?>

  <main class="main-container">
    <section id="single" class="single dark-bg">
      <section class="max-width">
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


      <section class="single-blog">
        <section class="max-width max-padding">
          <section class="single-blog__single-post">
            <?php
          while( have_posts()) {
          the_post();
          $subtitle = get_field ('subtitle'); 
          ?>

            <!-- Display Content -->
            <?php echo the_content();?>
          </section>




          <?php }  ?>
        </section>
      </section>
    </section>

    <!-- Expert -->
    <section class="single-blog__wrapper">
      <?php 
          $team_members = get_field ( 'team_member' ); 
        
          foreach ($team_members as $team_member):     
          $name = get_the_title($team_member);
          $title = get_field('title', $team_member);
          $phone = get_field('phone', $team_member);
          $email = get_field('email', $team_member);
          $img = get_field('headshot', $team_member);
          $image = $img['url']; ?>
      <?php include get_template_directory() . '/modules/team-card.php';?>
      <?php endforeach; ?>
    </section>

  </main>

  <?php get_footer() ?>