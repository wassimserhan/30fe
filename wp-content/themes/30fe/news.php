<?php
/*
Template Name: News
*/
?>

<?php 
get_header();
?>

<main class="main-container">
  <section class="insights whitesmoke-bg fullscreen">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">News</p>
      </section>
      <h1 class="insights__hadline">30FE News</h1>
      <h6>Find all past and future news and reports by our finest writers.</h6>
      <br>



      <section id="insights" class="insights__grid">



        <?php 
          $Newspost = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'news'
          //  'category_name' => sanitize_title('Geotechnical Engineering')

          ));
          while ($Newspost->have_posts()): $Newspost->the_post(); ?>

        <?php include get_template_directory() . '/modules/insights-card.php'; ?>

        <?php endwhile ?>
        <?php wp_reset_postdata() ?>
      </section>
      <section class="paginate"> <?php echo paginate_links();?></section>
    </section>
  </section>
</main>


<?php 
get_footer();
?>