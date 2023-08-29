  <?php 

  get_header(); 
  
   $subtitle = get_field ('subtitle')
   ?>

  <main class="main-container">
    <section id="single" class="single-post ">
      <section class="max-width fullscreen">
        <div class="single-post__card">
          <article class="single-post__detail single-post__detail--left">
            <section class="pill pill-single">
              <p class="pill__label pill__label-single insights__card__label__category__text--single">
                <?php echo get_the_category_list(', '); ?>
              </p>
            </section>
            <h1 class="single-post__headline"><?php the_title() ?></h1>
            <p class="single-post__copy"><?php echo $subtitle ?></p>
          </article>
          <figure class="single-post__figure">
            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
              title="<?php echo $title; ?>">
          </figure>
        </div>
      </section>

      <section class="single-blog fullscreen">
        <section class="max-width max-padding">
          <section class="single-blog__single-post">
            <?php
          while( have_posts()) {
          the_post();
          ?>
            <!-- Display Content -->
            <?php echo the_content();?>
          </section>
          <?php }  ?>
        </section>
      </section>
    </section>

    <!-- Related Expert -->
    <section class="single-blog__wrapper fullscreen">
      <?php 
          $team_members = get_field ( 'expert' ); 
          if($team_members ) :
          foreach ($team_members as $item):     
          $name = get_the_title($item);
          $title = get_field('title', $item);
          $phone = get_field('phone', $item);
          $email = get_field('email', $item); ?>
      <?php include get_template_directory() . '/modules/team-card.php';?>
      <?php endforeach; ?>
      <?php endif ;?>
    </section>

  </main>

  <?php get_footer() ?>