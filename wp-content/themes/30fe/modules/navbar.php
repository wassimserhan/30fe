<?php ?>

<nav data-page="<?php the_title()?>" class="nav">
  <section class="nav__bar">
    <!-- Logo -->
    <figure class="">
      <a id="<?php echo wsj_link_id( 'header logo', 'home' ); ?>" class="brand__container__fig--a"
        href="<?php echo get_home_url(); ?>">
        <img class="brand__logo" src="<?php echo get_template_directory_uri(); ?>/images/30fe-logo-black.svg"
          alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
      </a>
    </figure>
    <!-- Nav Items -->
    <ul class="nav__links">
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/about')?>">About</a>
      </li>
      <li class="nav__links__list" role="menuitem">
        <a id="" class="nav__items nav__items--main nav-links" data-name="#"
          href="<?php echo site_url('/team')?>">Team</a>
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
          href="<?php echo site_url('/contact')?>">Contact</a>
      </li>
    </ul>


    <!-- Menu Search and Input -->
    <section class="nav__menu-search">
      <button class="nav__search search-trigger js-search-trigger">
        Search
      </button>
      <button class="nav__menu">
        Menu
      </button>
      <button class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></button>
    </section>
  </section>

  <!-- Mobile Menu -->
  <section class="nav__dropdown">
    <section class="nav__links__list">
      <a class="nav__items nav-links" href="<?php echo site_url('/about')?>" target="_self">About</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/team')?>" target="_self">Team</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/expertise')?>" target="_self">Expertise</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/sectors')?>" target="_self">Sectors</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/insights')?>" target="_self">Insights</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/contact')?>" target="_self">Contact</a>
    </section>
  </section>
</nav>