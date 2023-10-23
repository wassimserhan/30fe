<?php /* Template Name: Sectors */ ?>

<?php 
get_header();
?>



<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">
  <section class="sectors black-bg">
    <section class="max-width max-padding  full-height">
      <section class="pill pill-white">
        <p class="pill__label pill__label-white">Sectors</p>
      </section>
      <section class="sectors__intro">
        <figure class="expertise__figure">
          <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
            title="<?php echo $title; ?>">
        </figure>
        <p class="sectors__copy"><?php the_content() ?></p>
      </section>
    </section>





    <section class="sectors__list fullscreen black-bg">
      <section class="max-width max-padding">

        <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> "industry"
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
        <a href="<?php echo the_permalink() ?>">
          <article class="sectors__list-section">

            <h3 class="sectors__list-item"><?php the_title() ?></h3>

            <img class="sectors__list-item__arrow"
              src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg" alt="arrow" tabindex=0>

          </article>
        </a>
        <?php endwhile ?>

        <?php wp_reset_postdata() ?>

      </section>
    </section>
    <?php include get_template_directory() . '/modules/email.php'; ?>

  </section>
</main>


<?php 
get_footer();
?>