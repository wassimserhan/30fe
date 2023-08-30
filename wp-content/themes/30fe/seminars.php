<?php /* Template Name: Seminars */ ?>

<?php 
get_header();
?>


<main class="main-container">

  <section class="seminars fullscreen">
    <section class="max-width max-padding">
      <section class="seminars">
        <?php
          while( have_posts()) {
          the_post();
          ?>
        <h1> <?php echo the_title();?></h1>
        <!-- Display Content -->
        <?php echo the_content();?>
      </section>
      <?php }  ?>

    </section>
  </section>


</main>

<?php 
get_footer();
?>