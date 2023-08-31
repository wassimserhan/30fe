  <?php 

  /*
Template Name: News
Template Post Type: news
*/
  
  ?>


  <?php 

  get_header(); 
  
   $subtitle = get_field ('subtitle')
   ?>

  <main class="main-container">
    <section id="single" class="single-post ">


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
          <?php if($download = get_field('download_attachment')) : ?>
          <a href="<?php echo $cv ?>"><button class="single-blog__button">Download Attachment</button></a>
          <?php endif ?>
        </section>
      </section>
    </section>

    <!-- Related Expert -->
    <?php if(get_field ( 'expert' ) ) : ?>
    <section class="single-blog__wrapper fullscreen">
      <?php $expert_count = count(get_field('expert')); 
    
      if($expert_count < 2) { ?>
      <?php 
          $team_members = get_field ( 'expert' ); 
          if($team_members ) :
          foreach ($team_members as $item):     
          $name = get_the_title($item);
          $title = get_field('title', $item);
          $phone = get_field('phone', $item);
          $email = get_field('email', $item); ?>

      <section class="blog-card">
        <a href="<?php the_permalink($item); ?>">
          <img class="lazyload blog-card__image" src="<?php echo get_the_post_thumbnail_url($item); ?>" src="
                  <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
        </a>
        <section class="pill blog-card__pill">
          <p class="pill__label">Practice Leads</p>
        </section>
        <div class="blog-card__name">
          <?php echo $name ;?>
        </div>
        <div class="blog-card__title">
          <?php echo $title ;?>
        </div>
        <div class="blog-card__email">
          e: <a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>
        </div>
      </section>
      <?php endforeach; ?>
      <?php endif ;?>
      <?php } else { ?>



      <!-- Slider Activated -->
      <section id="slider3" class="splide splide-blog"
        data-splide='{"type":"loop","perPage":<?php echo min($expert_count, 3) ;?>}' aria-labelledby="carousel-heading">
        <div class="splide__track">
          <ul class="splide__list">
            <?php 
          $team_members = get_field ( 'expert' ); 
          if($team_members ) :
          foreach ($team_members as $item):     
          $name = get_the_title($item);
          $title = get_field('title', $item);
          $phone = get_field('phone', $item);
          $email = get_field('email', $item); ?>
            <li class="splide__slide">
              <section class="blog-card">
                <a href="<?php the_permalink($item); ?>">
                  <img class="lazyload blog-card__image" src="<?php echo get_the_post_thumbnail_url($item); ?>" src="
                  <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
                </a>
                <section class="pill blog-card__pill">
                  <p class="pill__label">Practice Leads</p>
                </section>
                <div class="blog-card__name">
                  <?php echo $name ;?>
                </div>
                <div class="blog-card__title">
                  <?php echo $title ;?>
                </div>
                <div class="blog-card__email">
                  e: <a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>
                </div>
              </section>
            </li>
            <?php endforeach; ?>
            <?php endif ;?>
          </ul>
        </div>
      </section>
      <?php } ?>
    </section>
    <?php endif ;?>


  </main>

  <?php get_footer() ?>