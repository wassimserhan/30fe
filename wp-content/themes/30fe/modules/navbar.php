<?php 

global $template;



?>


<nav data-page="<?php echo basename($template);?>" class="nav">
  <section class="nav__bar">
    <a href="<?php echo get_home_url(); ?>">
      <img class="nav__logo nav__logo__black" src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg"
        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
      <!-- <img class="nav__logo nav__logo__white" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg"
        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%"> -->
    </a>


    <!-- Menu Search and Input -->
    <section class="nav__menu-search">
      <button class="nav__menu">
        Menu
      </button>
      <button class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></button>
    </section>
  </section>

  <!-- Mobile Menu -->
  <section class="nav__dropdown hide-nav">
    <section class="nav__links__list">






      <article class="accordion-about">
        <div class="accordion-about__wrapper">
          <a class="nav__items nav-links" href="<?php echo site_url('/about')?>" target="_self">About</a>
          <div class="plus-nav"></div>
        </div>
        <section class="accordion-about__content">
          <a class="nav__items nav-links" href="<?php echo site_url('/careers')?>" target="_self">Careers</a>
          <br>
          <a class="nav__items nav-links" href="<?php echo site_url('/seminars')?>" target="_self">Seminars</a>
          <br>
          <a class="nav__items nav-links" href="#" target="_self">Community</a>

        </section>
      </article>

      <article class="accordion-about">
        <div class="accordion-about__wrapper">
          <a class="nav__items nav-links" href="<?php echo site_url('/expertise')?>" target="_self">Expertise</a>
          <div class="plus-nav"></div>
        </div>
        <section class="accordion-about__content">
          <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'Expertise'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
          <a class="nav__items nav-links" href="<?php echo the_permalink() ?>" target="_self"><?php the_title() ?></a>
          <?php endwhile ?>

          <?php wp_reset_postdata() ?>

        </section>
      </article>

      <article class="accordion-about">
        <div class="accordion-about__wrapper">
          <a class="nav__items nav-links" href="<?php echo site_url('/sectors')?>" target="_self">Sectors</a>
          <div class="plus-nav"></div>
        </div>
        <section class="accordion-about__content">
          <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'industry'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
          <a class="nav__items nav-links" href="<?php echo the_permalink() ?>" target="_self"><?php the_title() ?></a>
          <?php endwhile ?>

          <?php wp_reset_postdata() ?>

        </section>
      </article>

      <a class="nav__items nav-links" href="<?php echo site_url('/team')?>" target="_self">Team</a>

      <a class="nav__items nav-links" href="<?php echo site_url('/sectors')?>" target="_self">Sectors</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/insights')?>" target="_self">Insights</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/contact')?>" target="_self">Contact</a>

    </section>
  </section>
</nav>