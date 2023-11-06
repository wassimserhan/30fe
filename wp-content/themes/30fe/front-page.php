<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">


  <section class="home__hero fullscreen">
    <section id="hero--desktop">

      <section class="max-width home__hero__padding-top">

        <section class="wrapper">
          <aside class="aside aside-1">
            <h1 id="banner-text" class="home__banner__headline"> Precision&nbsp;in <br>Investigation, <br>Clarity
              in <br>Solutions.
            </h1>

            <h1 class="home__banner__headline--mobile"> Precision&nbsp;in <br>Investigation,
              <br>Clarity
              in <br>Solutions.
            </h1>

          </aside>
          <aside class="aside aside-2">
            <article class="home__hero__wrapper">
              <section class="home__hero__container">
                <p class="home__hero__text">We are a team of investigators, engineers, scientists, and problem solvers.
                  We
                  bring clarity to complex scientific problems to help our clients make decisions with confidence. All
                  our
                  work is backed by uncompromising investigative forensic reporting.
                  <br><br>
                  <strong>We are 30.</strong>
                </p>
                <section class="home__hero__buttons">
                  <a href="<?php echo site_url('/submit-an-assignment')?>" target="_self"><button
                      class="home__hero__button home__hero__button__arrow">Work with Us</button></a>
                  <a href="<?php echo site_url('/about')?>"><button
                      class="home__hero__button home__hero__button--white">Learn
                      More</button></a>
                </section>
                <img class="home__hero__image" src="<?php echo get_template_directory_uri(); ?>/images/banner.gif"
                  alt="">
              </section>
              <section class="home__hero__buttons">
                &nbsp;
              </section>
            </article>
          </aside>
        </section>
      </section>

    </section>



    <section id="hero--mobile">

      <!-- mobile -->

      <section class="max-width home__hero__padding-top">
        <h1 class="home__banner__headline--mobile"> Precision&nbsp;in <br>Investigation,
          <br>Clarity
          in <br>Solutions.
        </h1>
      </section>

      <section class="max-width home__hero__padding-bottom">

        <article class="home__hero__wrapper">
          <section class="home__hero__container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.gif" alt="">
          </section>
          <section class="home__hero__buttons">
            <a href="<?php echo site_url('/submit-an-assignment')?>" target="_self"><button
                class="home__hero__button home__hero__button__arrow">Work with Us</button></a>
            <a href="<?php echo site_url('/about')?>"><button class="home__hero__button home__hero__button--white">Learn
                More</button></a>
          </section>

          <p class="home__hero__text--mobile">We are a team of investigators, engineers, scientists and problem solvers.
            We
            bring
            clarity to complex scientific problems to help our clients make decisions with confidence, all backed by
            uncompromising investigative forensic reporting.
            <br><br>
            <strong>We are 30.</strong>
          </p>
        </article>
      </section>


    </section>

  </section>

  <section id="accordion-scroll" class="fullscreen">
    <section class="max-width max-padding">
      <section class="accordion__header">
        <h2 class="accordion__header__headline">Explore the 30 Approach</h2>
        <p class="accordion__header__subheadline">A comprehensive and systematic methodology that underpins our
          forensic&nbsp;investigation&nbsp;services.</p>
      </section>

      <div id="accordion" class="accordion accordion--horizontal ">
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
          <article class="accordion__tab">
            <h1 class="accordion__heading"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
              <?php echo $headline ?></h1>
            <p class="accordion__number"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
              <?php echo '0'. get_row_index() ?></p>
          </article>
          <section class="accordion__body active">
            <section class="accordion__wrapper">
              <section>
                <h3 class="accordion__headline"
                  style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
                  <?php echo $headline ?></h3>
                <p class="accordion__copy"
                  style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
                  <?php echo $copy; ?>
                </p>
              </section>

              <img loading="lazy" class="accordion__image" src="<?php echo $image ?>" alt="<?php echo $alt; ?>"
                title="<?php echo $alt; ?>">
            </section>
          </section>
          <?php $k++ ?>
        </div>

        <?php
        endwhile; ?>
        <?php endif;
            ?>

      </div>



      <!-- //Mobile -->
      <section id="accordion-mobile">

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
          class="accordion-mobile__heading item tab <?php if(get_row_index() === 1) echo 'active' ?> <?php echo $colors[$k] ?>">
          <div class="title"
            style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
            <?php echo $headline ?></h1>
          </div>
          <div class="accordion-mobile__body content">

            <img loading="lazy" class="accordion-mobile__image" src="<?php echo $image ?>" alt="<?php echo $alt; ?>"
              title="<?php echo $alt; ?>">

            <p class="accordion-mobile__copy"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'black-bg') echo 'color: #f2f1ed;'?>">
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

  </section>









  <section class="quote fullscreen">
    <section class="max-width max-padding">
      <h3 class="quote__headline"><?php echo get_field('intro') ?></h3>
      <section class="quote__buttons">
        <a href="<?php echo site_url('/expertise')?>" target="_self"><button class="home__hero__button">Browse
            Expertise</button></a>
        <a href="<?php echo site_url('/sectors')?>"><button class="home__hero__button home__hero__button--white">Browse
            Sectors</button></a>
      </section>
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
            <div id="stats-3" class="stats__overlay-percent">20+</div>
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




  <section class="mobile-stats max-padding">
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
          <h2>20+</h2>
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


  <section class="testimonials fullscreen">
    <section class="max-width max-padding">
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
                <section class="testimonials__card__wrapper">
                  <p class="testimonials__quote">&ldquo;<?php echo $quote ?>&rdquo;</p>
                </section>
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

      <h2 class="insights__headline">Latest Insights</h2>
      <section class="home__insights__section">
        <p>Read our latest publications.</p>
        <a href="<?php echo site_url('/insights')?>"><button class="home__insights__button">View All</button></a>
      </section>

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

</main>
<?php get_footer(); ?>