<?php /* Template Name: Seminars */ ?>

<?php 
get_header();
?>


<main class="main-container">
  <section class="single-post">
    <section class="single-blog fullscreen">
      <section class="max-width max-padding">
        <section class="single-blog__single-post">
          <?php
          while( have_posts()) {
          the_post();
          ?>
          <!-- Display Content -->
          <?php echo the_content();?>
        </section>
        <?php }  ?>

      </section>
    </section>
  </section>

</main>

<?php 
get_footer();
?>