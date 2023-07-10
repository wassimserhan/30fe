<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>
<main class="main-container">

  <?php
include get_template_directory() . '/modules/hiring.php';
include get_template_directory() . '/modules/work.php';

?>

</main>
<?php get_footer(); ?>