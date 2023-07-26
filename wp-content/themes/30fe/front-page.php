<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">



  <?php
    // include get_template_directory() . '/modules/timeline.php';
    include get_template_directory() . '/modules/expertise-form.php';
    include get_template_directory() . '/modules/industries-form.php';
    include get_template_directory() . '/modules/expertise.php';
    include get_template_directory() . '/modules/quote.php';
    include get_template_directory() . '/modules/hiring.php';
    include get_template_directory() . '/modules/work.php';

  ?>

</main>
<?php get_footer(); ?>