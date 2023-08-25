<?php /* Template Name: Expertise */ ?>

<?php 
get_header();
?>




<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">
  <section class="expertise green-bg fullscreen">
    <section class="max-width max-padding ">
      <section class="pill pill-white">
        <p class="pill__label">Expertise</p>
      </section>
      <section class="expertise__intro">
        <h1 class="expertise__title"><?php the_title() ?></h1>
        <p class="expertise__copy"><?php the_content() ?></p>
      </section>
    </section>
    <figure class="expertise__figure">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>




    <section class="expertise__list fullscreen">
      <section class="max-width max-padding">

        <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'Expertise'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
        <a href="<?php echo the_permalink() ?>">
          <article class="expertise__list-section">

            <p class="expertise__list-item"><?php the_title() ?></p>

            <img class="expertise__list-item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
              alt="arrow" tabindex=0>

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