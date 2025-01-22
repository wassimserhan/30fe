<?php 

global $template;



?>


<nav id="nav" data-page="<?php echo basename($template);?>" class="nav">
    <section class="nav__bar">
        <a href="<?php echo get_home_url(); ?>">
            <img class="nav__logo nav__logo__black"
                src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg"
                alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                width="100%">
        </a>



        <!-- Desktop Search -->



        <section class="search-overlay--desktop">
            <section class="search-overlay--desktop__top ">
                <section class="search-overlay--desktop__wrapper max-width">
                    <img class="search-overlay--desktop__icon"
                        src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" width="15" height="15"
                        alt="search icon">
                    <input id="search-term-desktop" type="text" class="search-term" autocomplete="off"
                        aria-label="Search">
                </section>
            </section>

        </section>





        <!-- Menu Search and Input -->

        <section class="nav__menu-search">
            <button class="nav__menu">
                Menu
            </button>
            <a href="<?php echo site_url('/submit')?>"><button class="nav__button">Submit an Assignment</button></a>
            <section class="nav__search search-trigger js-search-trigger">

                <img class="search-overlay__icon"
                    src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" width="15" height="15"
                    alt="search icon">
            </section>
        </section>
    </section>

    <!-- Nav Items -->
    <section class="max-width nav__links__container">
        <ul class="nav__links" role="menu">
            <li class="" role="menuitem">
                <a id="" class="nav__items" data-name="#" href="<?php echo site_url('/about')?>">About</a>
            </li>
            <!-- <li class="" role="menuitem">
                <a id="" class="nav__items" data-name="#" href="<?php echo site_url('/team')?>">Team</a>
            </li> -->
            <li class="nav-people" role="menuitem">
                <a id="" class="nav__items" data-name=" #" href="<?php echo site_url('/')?>">People</a>
                <img class="plus-nav plus-people" src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                    alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                    width="100%">
            </li>
            <li class="nav-expertise" role="menuitem">
                <a id="" class="nav__items" data-name=" #" href="<?php echo site_url('/expertise')?>">Expertise</a>
                <img class="plus-nav plus-expertise"
                    src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                    alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                    width="100%">
            </li>
            <li class="nav-sectors" role="menuitem">
                <a id="" class="nav__items" data-name="#" href="<?php echo site_url('/sectors')?>">Sectors</a>
                <img class="plus-nav plus-sectors"
                    src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                    alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                    width="100%">
            </li>
            <li class="" role="menuitem">
                <a id="" class="nav__items" data-name="#" href="<?php echo site_url('/education')?>">Education</a>
            </li>
            <li class="nav-latest" role="menuitem">
                <a id="" class="nav__items" data-name=" #" href="<?php echo site_url('/')?>">Latest</a>
                <img class="plus-nav plus-latest" src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                    alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                    width="100%">
            </li>
            <li class="" role="menuitem">
                <a id="" class="nav__items" data-name="#" href="<?php echo site_url('/contact')?>">Contact</a>
            </li>

        </ul>
    </section>

    <!-- Accordion Container -->
    <section class="nav-expertise__container max-width">
        <ul class="nav__dropdown-grid nav__dropdown-grid--expertise">
            <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'orderby' => 'title',
            'order'   => 'ASC',
          'post_type'=> 'Expertise'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
            <a class="nav__items nav-expertise__items" href="<?php echo the_permalink() ?>"
                target="_self"><?php the_title() ?></a>
            <?php endwhile ?>

            <?php wp_reset_postdata() ?>
        </ul>
    </section>

    <section class="max-width">
        <ul class="nav__dropdown-grid nav__dropdown-grid--sectors">
            <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'orderby' => 'title',
            'order'   => 'ASC',
          'post_type'=> 'Industry'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
            <a class="nav__items nav-expertise__items" href="<?php echo the_permalink() ?>"
                target="_self"><?php the_title() ?></a>
            <?php endwhile ?>

            <?php wp_reset_postdata() ?>

        </ul>
    </section>
    <section class="max-width">
        <ul class="nav__dropdown-grid nav__dropdown-grid--people">
            <a class="nav__items nav-expertise__items" href="<?php echo site_url('/team')?>" target="_self">Team</a>
            <a class="nav__items nav-expertise__items" href="<?php echo site_url('/careers')?>"
                target="_self">Careers</a>

        </ul>
    </section>
    <section class="max-width">
        <ul class="nav__dropdown-grid nav__dropdown-grid--latest">
            <a class="nav__items nav-expertise__items" href="<?php echo site_url('/insights')?>"
                target="_self">Insights</a>
            <a class="nav__items nav-expertise__items" href="<?php echo site_url('/news')?>" target="_self">News</a>
            <a class="nav__items nav-expertise__items" href="<?php echo site_url('/events')?>" target="_self">Events</a>

        </ul>
    </section>




    <!-- Mobile Menu -->
    <section class="nav__dropdown hide-nav max-padding">
        <section class="nav__links__list">
            <a class="nav__items--mobile nav-links" href="<?php echo site_url('/about')?>" target="_self">About</a>

            <article class="accordion-about">
                <div class="accordion-about__wrapper">
                    <p class="nav__items--mobile nav-links">People</p>
                    <img class="plus-nav plus-nav--mobile"
                        src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                        width="100%">
                </div>
                <section class="accordion-about__content">

                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo site_url('/team')?>" target="_self">Team</a>
                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo site_url('/team')?>" target="_self">Careers</a>



                </section>
            </article>
            <article class="accordion-about">
                <div class="accordion-about__wrapper">
                    <a class="nav__items--mobile nav-links" href="<?php echo site_url('/expertise')?>"
                        target="_self">Expertise</a>
                    <img class="plus-nav plus-nav--mobile"
                        src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                        width="100%">
                </div>
                <section class="accordion-about__content">
                    <?php 
                    $customQuery = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type'=> 'Expertise'
                    ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo the_permalink() ?>" target="_self"><?php the_title() ?></a>
                    <?php endwhile ?>

                    <?php wp_reset_postdata() ?>

                </section>
            </article>

            <article class="accordion-about">
                <div class="accordion-about__wrapper">
                    <a class="nav__items--mobile nav-links" href="<?php echo site_url('/sectors')?>"
                        target="_self">Sectors</a>
                    <img class="plus-nav plus-nav--mobile"
                        src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                        width="100%">
                </div>
                <section class="accordion-about__content">
                    <?php 
                    $customQuery = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type'=> 'industry'
                    ));

                    while ($customQuery->have_posts()): $customQuery->the_post();
                    ?>
                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo the_permalink() ?>" target="_self"><?php the_title() ?></a>
                    <?php endwhile ?>

                    <?php wp_reset_postdata() ?>

                </section>
            </article>

            <a class="nav__items--mobile nav-links" href="<?php echo site_url('/education')?>"
                target="_self">Education</a>

            <article class="accordion-about">
                <div class="accordion-about__wrapper">
                    <p class="nav__items--mobile nav-links">Latest</p>
                    <img class="plus-nav plus-nav--mobile"
                        src="<?php echo get_template_directory_uri(); ?>/images/nav-arrow.svg"
                        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
                        width="100%">
                </div>
                <section class="accordion-about__content">

                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo site_url('/insights')?>" target="_self">Insights</a>
                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo site_url('/news')?>" target="_self">News</a>
                    <a class="nav__items--mobile nav__items--mobile--accordion nav-links"
                        href="<?php echo site_url('/events')?>" target="_self">Events</a>



                </section>
            </article>

            <a class="nav__items--mobile nav-links" href="<?php echo site_url('/contact')?>" target="_self">Contact</a>



            <a href="<?php echo site_url('/submit')?>" class="button nav__button nav__button--mobile"
                aria-label="Submit an Assignment">
                Submit an Assignment
            </a>

        </section>
    </section>
</nav>