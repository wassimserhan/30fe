<?php /* Template Name: Expertise */ ?>

<?php 
get_header();
?>




<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">
  <section class="expertise black-bg">
    <section class="max-width max-padding full-height">
      <section class="pill pill-white">
        <p class="pill__label pill__label-white">Expertise</p>
      </section>
      <section class="expertise__intro">
        <figure class="expertise__figure">
          <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
            title="<?php echo $title; ?>">
        </figure>
        <p class="expertise__copy"><?php the_content() ?></p>
      </section>
    </section>





    <section class="expertise__list fullscreen">
      <section class="max-width max-padding">

        <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'Expertise'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();

          $color = get_field('category_color');

        ?>
        <a href="<?php echo the_permalink() ?>">
          <article data-color="<?php echo esc_html($color['value']); ?>" class="expertise__list-section">

            <h3 class="expertise__list-item"><?php the_title() ?></h3>

            <img class="expertise__list-item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
              width="20" height="20" alt="arrow" tabindex=0>

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