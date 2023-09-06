<?php 
get_header();
?>

<main class="main-container">
  <section class="insights fullscreen">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Insights Category Archives</p>
      </section>
      <h1 class="insights__headline"><?php single_cat_title() ?> </h1>
      <p>Find all past and future publications and reports by our finest writers.</p>

      <section class="insights__grid">
        <?php 
        while(have_posts()) {
        the_post(); ?>
        <?php include get_template_directory() . '/modules/insights-card.php'; ?>
        <?php } ?>
      </section>
      <section class="paginate"> <?php echo paginate_links();?></section>
    </section>
  </section>
</main>


<?php 
get_footer();
?>