<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">

  <section id="home-hero" class="home__hero">
    <section class="max-width">
      <article class="home__hero__headline">
        <h1 class="home__hero__copy">Precision in Investigation, <br> Clarity in Solutions</h1>
        <section class="home__hero__buttons">
          <a href="#"><button class="home__hero__button">Submit an
              Assignment</button></a>
          <a href="<?php echo site_url('/team')?>"><button class="home__hero__button home__hero__button--white">Browse
              Experts</button></a>
        </section>
      </article>
    </section>
    <article class="scroll-text home__hero__scroll-container">
      <p class="home__hero__scroll ">We are Engineers &mdash; Scientists &mdash; Experts &mdash; Truth Seekers &mdash;
        Detectives &mdash; Problem Solvers &mdash; Reporters</p>
    </article>

  </section>

  <section class="home-expertise fullscreen full-height">
    <section class="max-width max-padding">
      <article class="accordion-faq">
        <div class="accordion-faq__wrapper">
          <h2 class="home-expertise__headline">Our Expertise</h2>
          <div class="plus"></div>
        </div>
        <section class="accordion-faq__content">
          <section class="home-expertise__list">
            <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'expertise'
        ));
        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
            <a href="<?php echo the_permalink() ?>">
              <button class="home-expertise__item">
                <p><?php the_title() ?></p>
                <img class="home-expertise__item__arrow"
                  src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="arrow" tabindex=0>
              </button>
            </a>
            <?php endwhile ?>
            <?php wp_reset_postdata() ?>
          </section>
        </section>
      </article>
    </section>
  </section>

  <section class="quote fullscreen">
    <section class="max-width">
      <h3 class="quote__headline"><?php echo get_field('intro') ?></h3>
      <a href="<?php echo site_url('/team')?>"><button class="quote__button">Find an Expert</button></a>
    </section>
  </section>

  <section id="stats" class="stats fullscreen">

    <div class="stats__bar">
      <div id="statsBar" class="stats__background">
        <div class="stats__progress-wrap" style="opacity: 0.9, width: 0;">
          <div class="stats__progress black-bg">
            <section>
              <div id="stats-1" class="stats__overlay-percent">25,000+</div>
              <!-- <div id="stats-1" class="stats__overlay-percent test-label">Cases Investigated</div> -->
              <div id="label-1" class="stats__label stats__label-orange orange-bg">Cases Investigated</div>
            </section>

          </div>
        </div>
        <div class="stats__progress-wrap" style="opacity: 0.9, width: 0;">
          <div class="stats__progress black-bg">
            <div id="stats-2" class="stats__overlay-percent">60+</div>
            <div id="label-2" class="stats__label stats__label-green green-bg">Engineers and Scientists</div>
          </div>
        </div>
        <div class="stats__progress-wrap" style="opacity: 0.9, width: 0;">
          <div class="stats__progress black-bg">
            <div id="stats-3" class="stats__overlay-percent">65+</div>
            <div id="label-3" class="stats__label stats__label-blue blue-bg">Project and Operational Specialists</div>
          </div>
        </div>
        <div class="stats__progress-wrap" style="opacity: 0.9, width: 0;">
          <div class="stats__progress black-bg">
            <div id="stats-4" class="stats__overlay-percent">20+</div>
            <div id="label-4" class="stats__label stats__label-dark taupe-bg">Court Certified Experts</div>
          </div>
        </div>
      </div>
    </div>

  </section>




  <section class="mobile-stats">
    <section id="statsBaMobile" class="mobile-stats__wrapper">
      <section id="statsBox-1" class="mobile-stats__box orange-bg">
        <section class="mobile-stat__item">
          <h2>25,000+</h2>
          <p>Cases Investigated</p>
        </section>
      </section>
      <section id="statsBox-2" class="mobile-stats__box mobile-stats__box__left green-bg">
        <section class="mobile-stats__item">
          <h2>60+</h2>
          <p>Engineers and Scientists</p>
        </section>
      </section>
      <section id="statsBox-3" class="mobile-stats__box blue-bg">
        <section class="mobile-stats__item">
          <h2>65+</h2>
          <p>Project and Operational Specialists</p>
        </section>
      </section>
      <section id="statsBox-4" class="mobile-stats__box taupe-bg">
        <section class="mobile-stats__item">
          <h2>20+</h2>
          <p>Court Certified Experts</p>
        </section>
      </section>
    </section>
  </section>

  <section id="accordion" class="fullscreen">

    <div class="accordion accordion--horizontal ">

      <?php $k=0;
            if( have_rows('accordion_items') ): 
          while( have_rows('accordion_items') ) : the_row();
          $headline = get_sub_field('headline');
          $copy = get_sub_field('copy');
          $img = get_sub_field('image');
          $image = $img['url'];
          $alt = $img['alt'];
          $colors = [ 'whitesmoke-bg', 'blue-bg','green-bg', 'orange-bg', 'taupe-bg','black-bg' ];
        ?>
      <div class="accordion__item <?php if(get_row_index() === 1) echo 'active' ?> <?php    echo $colors[$k] ?>">
        <h1 class="accordion__heading"
          style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #ffffff'?>">
          <?php echo $headline ?></h1>
        <section class="accordion__body active">
          <!-- <h3 class="accordion__headline"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #ffffff'?>">
              <?php echo $headline ?></h3> -->
          <p class="accordion__copy"
            style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #ffffff'?>">
            <?php echo $copy; ?>
          </p>
          <figure class="accordion__image">
            <img class="lazyload" src="<?php echo $image ?>" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">
          </figure>
        </section>
        <?php $k++ ?>
      </div>

      <?php
        endwhile; ?>
      <?php endif;
            ?>

    </div>
  </section>


  <section id="accordion-mobile" class="">
    <section class="max-width max-padding">

      <?php $k=0;
        if( have_rows('accordion_items') ): 
      while( have_rows('accordion_items') ) : the_row();
      $headline = get_sub_field('headline');
      $copy = get_sub_field('copy');
      $img = get_sub_field('image');
      $image = $img['url'];
      $alt = $img['alt'];
      $colors = [ 'whitesmoke-bg', 'blue-bg','green-bg', 'orange-bg', 'taupe-bg','black-bg' ];
    ?>


      <div
        class="accordion-mobile__heading item <?php if(get_row_index() === 1) echo 'active' ?> <?php echo $colors[$k] ?>">
        <div class="title"
          style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #ffffff'?>">
          <?php echo $headline ?></h1>
        </div>
        <div class="accordion-mobile__body content">

          <img class="lazyload accordion-mobile__image" src="<?php echo $image ?>" alt="<?php echo $alt; ?>"
            title="<?php echo $alt; ?>">

          <p class="accordion-mobile__copy"
            style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #ffffff'?>">
            <?php echo $copy; ?></p>

        </div>
        <?php $k++ ?>
      </div>

      <?php
      endwhile; ?>
      <?php endif;
            ?>

    </section>
  </section>





  <section class="testimonials fullscreen">
    <section class="max-width">
      <h2 class="testimonials__headline">Testimonials</h2>
      <section id="slider1" class="splide splide-testimonials" aria-labelledby="carousel-heading">
        <div class="splide__track">
          <ul class="splide__list">

            <?php 
    if( have_rows('testimonials') ): 
      while( have_rows('testimonials') ) : the_row();
      $quote = get_sub_field('quote');
      $client = get_sub_field('client');
    ?>
            <li class="splide__slide">
              <section class="testimonials__card">
                <h4 class="testimonials__quote"><?php echo $quote ?></h4>
                <p class="testimonials__quote__client"><?php echo $client ?></p>
              </section>

            </li>
            <?php
          endwhile; ?>
            <?php endif;
            ?>
          </ul>
        </div>
      </section>
    </section>

  </section>
  <section class="insights fullscreen">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Blog</p>
      </section>
      <h2 class="insights__headline">Latest Insights</h2>
      <p>Read our latest insights from our best experts.</p>



      <section class="insights__grid">

        <?php 

     $homepagePosts = new WP_Query(array(
      'posts_per_page' => 3
     ));
      while ($homepagePosts->have_posts()): $homepagePosts->the_post();
      ?>

        <?php include get_template_directory() . '/modules/insights-card.php'; ?>

        <?php endwhile ?>

        <?php wp_reset_postdata() ?>
      </section>


    </section>
  </section>


  <?php include get_template_directory() . '/modules/email.php'; ?>


</main>
<?php get_footer(); ?>