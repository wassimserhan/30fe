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
      <a class="nav__items nav-links" href="<?php echo site_url('/about')?>" target="_self">About</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/team')?>" target="_self">Team</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/expertise')?>" target="_self">Expertise</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/sectors')?>" target="_self">Sectors</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/insights')?>" target="_self">Insights</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/contact')?>" target="_self">Contact</a>
      <a class="nav__items nav-links" href="<?php echo site_url('/careers')?>" target="_self">Careers</a>
      <a class="nav__items nav-links" href="#" target="_self">Associations</a>
      <a class="nav__items nav-links" href="#" target="_self">Community</a>
    </section>
  </section>
</nav>