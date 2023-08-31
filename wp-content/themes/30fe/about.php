<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">


  <!-- Hero -->

  <section class="about__hero fullscreen about__hero__transparent">
    <section class="max-width max-padding">
      <h1 class="about__hero__headline">We are 30</h1>
      <h3 class="about__hero__copy">We are over <span class="orange">60 experts</span> in <span class="green">14
          practice
          areas</span>, we offer
        evidence-based solutions to
        <span class="blue">clients worldwide</span>.
      </h3>
    </section>
  </section>

  <!-- Intro -->
  <?php
if( have_rows('intro') ):
while( have_rows('intro') ) : the_row(); 
?>
  <section class="about__intro fullscreen">
    <section class="max-width max-padding">
      <h3 class="about__intro__copy"><?php echo get_field('intro_copy') ;?></h3>
      <section class="about__intro__buttons">
        <a href="<?php echo site_url('/team')?>"><button class="about__intro__button">Browse Experts</button></a>
      </section>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- 360 Investigations -->

  <?php
if( have_rows('360_services') ):
while( have_rows('360_services') ) : the_row(); 
?>
  <section class="about__investigations fullscreen">
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


  <!-- Mission -->
  <?php
if( have_rows('mission') ):
while( have_rows('mission') ) : the_row(); 
?>
  <section class="about__mission fullscreen">
    <section class="max-width max-padding">
      <section class="pill about__mission__pill">
        <p class="pill__label">mission</p>
      </section>
      <h1 class="about__mission__headline"><?php echo get_sub_field('mission_headline'); ?> </h1>
      <h4 class="about__mission__copy"><?php echo get_sub_field('mission_copy'); ?> </h4>
    </section>
  </section>
  <?php endwhile; endif; ?>


  <?php include get_template_directory() . '/modules/timeline.php'; ?>




  <!-- Hero-->
  <?php
if( have_rows('what_is_30') ):
while( have_rows('what_is_30') ) : the_row(); 
?>
  <section class="about__thirty fullscreen">
    <section class="">
      <section class="about__whatis__card">
        <figure class="about__whatis__image">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif" alt=""
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