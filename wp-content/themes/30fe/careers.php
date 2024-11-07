<?php /* Template Name: Careers */ ?>


<?php 
get_header();
?>

<main class="main-container">

    <section class="careers__intro fullscreen">
        <section class="max-width max-padding">
            <section class="careers__intro__wrapper">
                <h1 class="careers__intro__headline">At 30, we share a fascination for how things work.
                    We love the mystery. The&nbsp;theory. The mechanics. The science. The rigour.
                    We’re&nbsp;tinkerers at heart. Detectives. Problem-solvers. Truth-seekers.
                    Perhaps most of all, we’re Reporters.
                    <br><br>
                    We’re always looking for more people like us to join us in our mission. Are you in?
                </h1>
                <a href="#positions"><button class="careers__intro__button">Open Positions</button></a>
            </section>

        </section>

    </section>

    <!-- Hero -->


    <!-- Add Career Slider -->

    <section id="slider6" class="splide splide-careers-banners" aria-labelledby="carousel-heading">
        <section class="max-width max-padding--side">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php 
              if( have_rows('banner_images') ): 
              while( have_rows('banner_images') ) : the_row();
              $img = get_sub_field('image');
              $image = $img['url'];
              $alt = $img['alt'];
              ?>
                    <li class="splide__slide">
                        <img loading="lazy" class="careers__banners" src="<?php echo $image ?>"
                            alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">

                    </li>
                    <?php
          endwhile; ?>
                    <?php endif;
            ?>
                </ul>
            </div>
        </section>
    </section>

    <!-- Headline -->
    <section class="quote fullscreen" style="min-height:0">
        <section class="max-width max-padding--side">
            <h3 class="quote__headline" style="padding: 0;">When talented and determined minds join forces, they achieve
                the impossible. At 30 Forensic Engineering, this isn’t just a belief—it’s our way of life. And we’re
                searching for
                individuals like you who share the same drive.</h3>
        </section>
    </section>


    <!-- Vision -->
    <?php
if( have_rows('vision') ):
while( have_rows('vision') ) : the_row(); 
?>
    <section class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <section class="careers__intro__wrapper">
                <h2 class="careers__headline careers__headline--orange"><?php echo get_sub_field('vision_headline') ;?>
                </h2>
                <p class="careers__copy"><?php echo get_sub_field('vision_copy') ;?></p>
            </section>
        </section>
    </section>
    <?php endwhile; endif; ?>


    <!-- Values Desktop -->

    <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
    <section class="careers__vision careers__vision--desktop fullscreen">
        <section class="max-width careers__vision__padding">
            <h2 class="careers__headline careers__headline--blue"><?php echo get_sub_field('values_headline') ;?></h2>
            <!-- Desktop Module -->
            <section class="career-values__container">
                <?php 
                          if( have_rows('values_items') ): 
                          while( have_rows('values_items') ) : the_row();
                          $value_item = get_sub_field('value_item');
                          ?>
                <section id="value-<?php echo get_row_index(); ?>" class="careers-values__card">
                    <p class="careers__slide__card__number"><?php echo get_row_index(); ?></p>
                    <p class="careers__slide__card__text"><?php echo $value_item; ?></p>
                </section>
                <?php endwhile; ?>
                <?php endif;?>
            </section>
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Values iPad/Mobile-->
    <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
    <section class="careers__vision careers__vision--mobile fullscreen">
        <section class="max-width careers__vision__padding">
            <h2 class="careers__headline careers__headline--blue"><?php echo get_sub_field('values_headline') ;?></h2>
            <section style="" id="careers-slider" class="splide splide-careers" aria-labelledby="carousel-heading">
                <section class="splide__track">
                    <section class="splide__list">
                        <?php 
                          if( have_rows('values_items') ): 
                          while( have_rows('values_items') ) : the_row();
                          $value_item = get_sub_field('value_item');
                          ?>
                        <section class="splide__slide careers__slide__card">
                            <p class="careers__slide__card__number"><?php echo get_row_index(); ?></p>
                            <p class="careers__slide__card__text"><?php echo $value_item; ?></p>
                        </section>
                        <?php endwhile; ?>
                        <?php endif;?>
                    </section>
                </section>
            </section>
            <!-- End Mobile Module-->
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Culture -->

    <section class="about__thirty fullscreen">
        <?php
          if( have_rows('culture') ):
          while( have_rows('culture') ) : the_row(); 
          ?>
        <section class="max-width">
            <section class="careers__culture__card">
                <figure class="careers__culture__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif"
                        alt="what is 30?" title="lock">
                </figure>
                <article class="careers__culture__detail careers__culture__detail--left" style="">
                    <h2 class="careers__culture__headline"><?php echo get_sub_field('culture_headline') ;?></h2>
                    <p class="careers__culture__copy"><?php echo get_sub_field('culture_copy') ;?>
                    </p>
                </article>
            </section>
        </section>
        <?php endwhile; endif; ?>
    </section>




    <!-- Benefits -->
    <?php
if( have_rows('benefits') ):
while( have_rows('benefits') ) : the_row(); 
?>
    <section class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <ul id="myList" class="careers__list">
                <?php 
          if( have_rows('benefits_items') ): 
          while( have_rows('benefits_items') ) : the_row();
          $benefits_item = get_sub_field('benefits_item');
          ?>
                <li>
                    <?php echo $benefits_item; ?>
                </li>
                <?php
          endwhile; ?>
                <?php endif;
            ?>
            </ul>
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Positions -->
    <?php
if( have_rows('positions') ):
while( have_rows('positions') ) : the_row(); 
?>
    <section id="positions" class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <h2 class="careers__headline careers__headline--white"><?php echo get_sub_field('positions_headline') ;?>
            </h2>



            <?php 
          $job_openings = get_field ( 'job_openings' ); 
          foreach ($job_openings as $item):     
          $title = get_the_title($item);
          $location = get_field('location', $item);
          $type = get_field('type', $item);
          $bamboo_link = get_field('cta', $item);
        ?>


            <section class="careers__openings">
                <a href="<?php echo $bamboo_link['url']; ?>">
                    <article class="careers__positions">
                        <div class="careers__positions__wrapper">
                            <p class="careers__positions__intro careers__positions__intro--bold">
                                <?php echo $title;?>
                            </p>
                            <p class="careers__positions__intro">
                                <?php echo $location;?>
                            </p>
                            <p class="careers__positions__intro">
                                <?php echo $type;?>
                            </p>
                            <img class="careers__positions__arrow"
                                src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="arrow"
                                width="20" height="20" tabindex="0">
                        </div>
                    </article>
                </a>
            </section>
            <?php endforeach; ?>
        </section>
    </section>
    <?php endwhile; endif; ?>
</main>

<?php 
get_footer();
?>