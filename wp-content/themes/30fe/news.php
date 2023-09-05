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
      <h1 class="insights__headline">News</h1>
      <p>Find all past and future news and reports by our finest writers.</p>
      <br>



      <section id="insights" class="insights__grid">



        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // changed all page to paged

          $Newspost = new WP_Query(array(
          'posts_per_page' => 12,
          'post_type'=> 'news',
          'paged' => $paged, // changed page to paged
          

          ));
          while ($Newspost->have_posts()): $Newspost->the_post(); ?>

        <?php include get_template_directory() . '/modules/news-card.php'; ?>

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