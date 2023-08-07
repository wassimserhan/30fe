<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">





  <?php
      // include get_template_directory() . '/modules/timeline.php';
      include get_template_directory() . '/modules/home-hero.php';
      include get_template_directory() . '/modules/home-expertise.php';
      include get_template_directory() . '/modules/home-quote.php';
      include get_template_directory() . '/modules/home-stats.php';
      include get_template_directory() . '/modules/home-accordion.php';
      include get_template_directory() . '/modules/home-testimonials.php';
      include get_template_directory() . '/modules/home-blog.php';
      include get_template_directory() . '/modules/home-contact.php';

      // include get_template_directory() . '/modules/industries-form.php';
      // include get_template_directory() . '/modules/hiring.php';

    ?>
</main>
<?php get_footer(); ?>