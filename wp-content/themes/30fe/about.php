<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">


  <!-- Hero -->

  <section class="about__hero fullscreen full-height about__hero__transparent">
    <section class="max-width max-padding about__hero__padding">

      <section class="about__hero__wrapper">
        <img class="about__hero__video" src="<?php echo get_template_directory_uri(); ?>/images/about.gif"
          alt="About 30FE">
        <h1 class="about__hero__headline">We are 30</h1>



        <h3 class="about__hero__copy">With over <span class="orange">60 experts</span> in <span
            class="green">14&nbsp;practice
            areas</span>, we&nbsp;offer
          evidence-based solutions to&nbsp;<span class="blue">clients worldwide</span>.
        </h3>


      </section>







    </section>
  </section>

  <!-- Mission -->
  <?php
if( have_rows('mission') ):
while( have_rows('mission') ) : the_row(); 
?>
  <section class="about__mission fullscreen full-height">
    <section class="max-width max-padding">
      <section class="pill about__mission__pill">
        <p class="pill__label">mission</p>
      </section>
      <h1 class="about__mission__headline"><?php echo get_sub_field('mission_headline'); ?> </h1>
      <h4 class="about__mission__copy"><?php echo get_sub_field('mission_copy'); ?> </h4>
    </section>
  </section>
  <?php endwhile; endif; ?>



  <!-- 360 Investigations -->

  <?php
if( have_rows('360_services') ):
while( have_rows('360_services') ) : the_row(); 
?>
  <section class="about__investigations fullscreen full-height">
    <section class="max-width max-padding">
      <section class="about__investigations__wrapper">
        <article>
          <section class="pill">
            <p class="pill__label">360&deg; Services</p>
          </section>

          <h3 class="about__investigations__headline"><?php echo get_sub_field('services_headline'); ?></h3>
          <p class="about__investigations__copy"><?php echo get_sub_field('services_copy'); ?></p>
        </article>
        <ul class="about__investigations__bullets">
          <?php 
           $k=0;
          if( have_rows('services') ): 
          while( have_rows('services') ) : the_row();
          $list_headline = get_sub_field('list_headline');
          $list_copy = get_sub_field('list_copy');
          $colors = [ 'taupe', 'blue','green', 'orange' ];
          ?>
          <li class="about__investigations__bullet about__investigations__bullet--<?php echo $colors[$k]; ?>">
            <h3><?php echo $list_headline; ?></h3>
            <p><?php echo $list_copy; ?></p>
          </li>
          <?php $k++ ?>
          <?php
          endwhile; ?>
          <?php endif;
            ?>

        </ul>
      </section>
    </section>
  </section>
  <?php endwhile; endif; ?>





  <?php
if( have_rows('timeline') ):
while( have_rows('timeline') ) : the_row(); 
?>

  <section class="about__timeline fullscreen">

    <hr class="about__timeline__line">
    <h3 class="about__timeline__headline">Our Story
    </h3>

    <section id="slider5" class="splide splide-timeline" aria-labelledby="carousel-heading">

      <div class="splide__track">

        <ul class="splide__list">
          <?php 
          if( have_rows('milestone') ): 
          while( have_rows('milestone') ) : the_row();
          $year = get_sub_field('year');
          $story = get_sub_field('story');
          ?>
          <section data-splide="<?php echo get_row_index() ?>" class="splide__slide timeline">
            <section class="about__timeline__wrapper">
              <section class="about__timeline__pill about__timeline__pill">
                <p class="about__timeline__pill__text"><?php echo $year ?></p>
              </section>
              <section class="about__timeline__story">
                <?php echo $story ?>
              </section>
            </section>
          </section>

          <?php
          endwhile; ?>
          <?php endif;
            ?>

        </ul>

      </div>
    </section>
  </section>

  <?php endwhile; endif; ?>



  <!-- Hero-->
  <?php
if( have_rows('what_is_30') ):
while( have_rows('what_is_30') ) : the_row(); 
?>
  <section class="about__thirty fullscreen">
    <section class="max-width">
      <section class="about__whatis__card">
        <figure class="about__whatis__image">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif" alt="what is 30?"
            title="lock">
        </figure>
        <article class="about__whatis__detail about__whatis__detail--left" style="">
          <h3 class="about__whatis__headline"><?php echo get_sub_field('what_headline'); ?></h3>
          <p class="about__whatis__copy"><?php echo get_sub_field('what_copy'); ?>
          </p>
        </article>
      </section>
    </section>
  </section>
  <?php endwhile; endif; ?>
  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>



</main>

<?php 
get_footer();
?>