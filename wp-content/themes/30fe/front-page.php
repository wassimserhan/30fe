<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">

  <section class="home__hero dark-bg">
    <section class="max-width max-padding">
      <h1 class="home__hero__headline">We are 30</h1>
      <h2 class="home__hero__copy">We are over <span class="orange">60 experts</span> in <span class="green">14
          practice
          areas</span>, we offer
        evidence-based solutions to
        <span class="blue">clients worldwide</span>.
      </h2>
    </section>
  </section>



  <?php
      // include get_template_directory() . '/modules/timeline.php';
      include get_template_directory() . '/modules/home-expertise.php';
      include get_template_directory() . '/modules/home-quote.php';
      include get_template_directory() . '/modules/home-stats.php';
      include get_template_directory() . '/modules/home-accordion.php';
      include get_template_directory() . '/modules/home-testimonials.php';
      include get_template_directory() . '/modules/home-blog.php';
      include get_template_directory() . '/modules/home-contact.php';

      // include get_template_directory() . '/modules/industries-form.php';
    ?>
</main>
<?php get_footer(); ?>