<?php /* Template Name: Sectors */ ?>

<?php 
get_header();
?>


<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">

  <section class="sectors">

    <section class="max-width max-padding dark-bg">
      <section class="pill pill-white">
        <p class="pill__label pill__label-white">Sectors</p>
      </section>
      <section class="sectors__intro">
        <h1 class="sectors__title"><?php the_title() ?></h1>
        <p class="sectors__copy"><?php the_content() ?></p>
      </section>
    </section>
    <figure class="sectors__figure">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>




    <section class="sectors__list">
      <section class="max-width max-padding">

        <?php 
          $sectors = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'industry'
          ));

          while ($sectors->have_posts()): $sectors->the_post();
         ?>
        <a href="<?php echo the_permalink() ?>">
          <article class="sectors__list-section">

            <p class="sectors__list-item"><?php the_title() ?></p>

            <img class="sectors__list-item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
              alt="arrow" tabindex=0>

          </article>
        </a>
        <?php endwhile ?>
        <?php wp_reset_postdata() ?>
      </section>
    </section>

  </section>
</main>


<?php 
get_footer();
?>