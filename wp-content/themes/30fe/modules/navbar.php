<?php 

global $template;



?>


<nav id="nav" data-page="<?php echo basename($template);?>" class="nav">
  <section class="nav__bar">
    <a href="<?php echo get_home_url(); ?>">
      <img class="nav__logo nav__logo__black" src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg"
        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
      <!-- <img class="nav__logo nav__logo__white" src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg"
        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%"> -->
    </a>



    <!-- Desktop Search -->



    <section class="search-overlay--desktop">
      <section class="search-overlay--desktop__top ">
        <section class="search-overlay--desktop__wrapper max-width">
          <img class="search-overlay--desktop__icon"
            src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" width="15" height="15"
            alt="search icon">
          <input id="search-term-desktop" type="text" class="search-term"
            placeholder="SEARCH FOR PEOPLE, EXPERTISE, SECTORS, INSIGHTS" autocomplete="off">
        </section>
      </section>

    </section>





    <!-- Menu Search and Input -->

    <section class="nav__menu-search">
      <button class="nav__menu">
        Menu
      </button>
      <a href="<?php echo site_url('/submit')?>"><button class="nav__button">Submit an Assigment</button></a>
      <section class="nav__search search-trigger js-search-trigger">

        <img class="search-overlay__icon"
          src="https://wassims.sg-host.com/wp-content/themes/30fe/images/search-icon.svg" width="15" height="15"
          alt="search icon">
      </section>
    </section>









  </section>

  <!-- Nav Items -->
  <section class="max-width nav__links__container">
    <ul class="nav__links">
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/about')?>">About
          Us</a>
      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#" href="<?php echo site_url('/team')?>">Our
          People</a>
      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/expertise')?>">Expertise</a>

      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/sectors')?>">Sectors</a>
      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/insights')?>">Insights</a>
      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/contact')?>">Contact Us</a>
      </li>
    </ul>
  </section>




  <!-- Mobile Menu -->
  <section class="nav__dropdown hide-nav">
    <section class="nav__links__list">


      <a class="nav__items--mobile nav__items--main nav-links" href="<?php echo site_url('/about')?>"
        target="_self">About
        Us</a>

      <a class="nav__items--mobile nav-links" href="<?php echo site_url('/team')?>" target="_self">Our People</a>


      <article class="accordion-about">
        <div class="accordion-about__wrapper">
          <a class="nav__items--mobile nav__items--main nav-links" href="<?php echo site_url('/expertise')?>"
            target="_self">Expertise</a>
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
          <a class="nav__items--mobile nav-links" href="<?php echo the_permalink() ?>"
            target="_self"><?php the_title() ?></a>
          <?php endwhile ?>

          <?php wp_reset_postdata() ?>

        </section>
      </article>

      <article class="accordion-about">
        <div class="accordion-about__wrapper">
          <a class="nav__items--mobile nav__items--main nav-links" href="<?php echo site_url('/sectors')?>"
            target="_self">Sectors</a>
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
          <a class="nav__items--mobile nav-links" href="<?php echo the_permalink() ?>"
            target="_self"><?php the_title() ?></a>
          <?php endwhile ?>

          <?php wp_reset_postdata() ?>

        </section>
      </article>

      <a class="nav__items--mobile nav-links" href="<?php echo site_url('/insights')?>" target="_self">Insights</a>
      <a class="nav__items--mobile nav-links" href="<?php echo site_url('/contact')?>" target="_self">Contact Us</a>

    </section>
  </section>
</nav>