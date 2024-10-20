<?php /* Template Name: Careers */ ?>


<?php 
get_header();
?>

<main class="main-container">

  <section class="careers__intro fullscreen">
    <section class="max-width max-padding">
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

  <!-- Hero -->


  <section class="careers__hero fullscreen">
    <section class="max-width careers__hero__padding ">
      <section class="careers__hero__block">
        <h1 class="careers__hero__headline">&nbsp;</h1>
        <section class="careers__hero__box careers__hero__box--orange orange-bg"></section>
        <section class="careers__hero__box careers__hero__box--taupe taupe-bg"></section>
        <section class="careers__hero__box careers__hero__box--blue blue-bg"></section>
        <section class="careers__hero__box careers__hero__box--green green-bg"></section>
        <?php
        if( have_rows('banner_images') ):
        while( have_rows('banner_images') ) : the_row(); 
          $gif_1 = get_sub_field('gif_1')['url'];
          $gif_2 = get_sub_field('gif_2')['url'];
              $gif_3 = get_sub_field('gif_3')['url'];
              $gif_4 = get_sub_field('gif_4')['url'];
        ?>
        <img class="careers__hero__images careers__hero__images--one" src="<?php echo $gif_1 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--two" src="<?php echo $gif_2 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--three" src="<?php echo $gif_3 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--four" src="<?php echo $gif_4 ?>" alt="careers">
        <?php endwhile; endif; ?>

      </section>


    </section>
  </section>


  <!-- Vision -->
  <?php
if( have_rows('vision') ):
while( have_rows('vision') ) : the_row(); 
?>
  <section class="careers__vision fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline careers__headline--orange"><?php echo get_sub_field('vision_headline') ;?></h2>
      <p class="careers__copy"><?php echo get_sub_field('vision_copy') ;?></p>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Values -->
  <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
  <section class="careers__vision fullscreen">
    <section class="max-width careers__vision__padding">
      <h2 class="careers__headline careers__headline--blue"><?php echo get_sub_field('values_headline') ;?></h2>
      <section id="careers-slider" class="splide splide-careers" aria-labelledby="carousel-heading">
        <div class="splide__track">

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
            <?php
          endwhile; ?>
            <?php endif;
            ?>
          </section>


        </div>
      </section>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Culture -->
  <?php
if( have_rows('culture') ):
while( have_rows('culture') ) : the_row(); 
?>
  <section class="careers__vision fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline careers__headline--green"><?php echo get_sub_field('culture_headline') ;?></h2>
      <p class="careers__copy"><?php echo get_sub_field('culture_copy') ;?></p>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Benefits -->
  <?php
if( have_rows('benefits') ):
while( have_rows('benefits') ) : the_row(); 
?>
  <section class="careers__vision fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline careers__headline--taupe "><?php echo get_sub_field('benefits_headline') ;?></h2>
      <ul class="careers__list">
        <?php 
          if( have_rows('benefits_items') ): 
          while( have_rows('benefits_items') ) : the_row();
          $benefits_item = get_sub_field('benefits_item');
          ?>
        <li>
          <img class="careers__arrow" src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg"
            width="20" height="20" alt="arrow" tabindex="0">
          <p><?php echo $benefits_item; ?></p>
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
      <h2 class="careers__headline careers__headline--white"><?php echo get_sub_field('positions_headline') ;?></h2>



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
              <img class="careers__positions__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
                alt="arrow" width="20" height="20" tabindex="0">
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