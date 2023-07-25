<?php /* Template Name: Industries */ ?>

<?php 
get_header();
?>


<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">

  <section class="industries">

    <section class="max-width max-padding dark-bg">
      <section class="pill pill-white">
        <p class="pill__label pill__label-white">Sectors</p>
      </section>
      <section class="industries__intro">
        <h1 class="industries__title"><?php the_title() ?></h1>
        <p class="industries__copy"><?php the_content() ?></p>
      </section>
    </section>
    <figure class="industries__figure">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>




    <section class="industries__list">
      <section class="max-width max-padding">

        <?php 
          $industries = new WP_Query(array(
          'posts_per_page' => 11,
          'post_type'=> 'industry'
          ));

          while ($industries->have_posts()): $industries->the_post();
         ?>
        <a href="<?php echo the_permalink() ?>">
          <article class="industries__list-section">

            <p class="industries__list-item"><?php the_title() ?></p>

            <img class="industries__list-item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
              alt="arrow" tabindex=0>

          </article>
        </a>
        <?php endwhile ?>

      </section>
    </section>

  </section>
</main>


<?php 
get_footer();
?>