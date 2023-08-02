<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">
  <?php

    include get_template_directory() . '/modules/about-intro.php';
 include get_template_directory() . '/modules/about-mission.php';
  ?>
</main>

<?php 
get_footer();
?>