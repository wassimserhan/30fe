<?php /* Template Name: Expertise */ ?>

<?php 
get_header();
?>

<!-- mobile-->


<?php while (have_posts()) {
  the_post();

} ?>

<main class="main-container">
    <section class="expertise-mobile black-bg">
        <section class="max-width max-padding full-height">
            <section class="expertise-mobile__intro">
                <h2 class="expertise__title">Sectors</h2>
                <p class="expertise-mobile__copy"><?php the_content() ?></p>
            </section>
        </section>





        <section class="expertise-mobile__list fullscreen">
            <section class="max-width max-padding">

                <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'Industry'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();

          $color = get_field('category_color');

        ?>
                <a href="<?php echo the_permalink() ?>">
                    <article data-color="<?php echo esc_html($color['value']); ?>"
                        class="expertise-mobile__list-section">

                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="image" /> -->



                        <h3 class="expertise-mobile__list-item"><?php the_title() ?></h3>


                        <img class="expertise-mobile__list-item__arrow"
                            src="<?php echo get_template_directory_uri(); ?>/images/white-arrow.svg" width="20"
                            height="20" alt="arrow" tabindex=0>

                    </article>
                </a>
                <?php endwhile ?>

                <?php wp_reset_postdata() ?>

            </section>
        </section>

        <?php include get_template_directory() . '/modules/email.php'; ?>
    </section>






    <!-- //desktop -->

    <?php while (have_posts()) {
  the_post();
} ?>
    <section class="expertise">
        <section class="max-width max-padding">
            <section class="vertical-section" style="display: flex; overflow: hidden;">
                <section class="left-column">
                    <section>
                        <h2 class="expertise__title">Sectors</h2>
                        <p class="expertise__copy"><?php the_content() ?></p>
                    </section>
                </section>
                <section class="expertise__list fullscreen right-column">
                    <section class="large-child">
                        <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type'=> 'Industry'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
      
        ?>
                        <a href="<?php echo the_permalink() ?>">
                            <article class="expertise__list-section sectors-hover">
                                <h3 class="expertise__list-item"><?php the_title() ?></h3>
                            </article>
                        </a>
                        <?php endwhile ?>
                        <?php wp_reset_postdata() ?>
                    </section>
                </section>
            </section>
        </section>
        <?php include get_template_directory() . '/modules/email.php'; ?>
    </section>

</main>


<?php 
get_footer();
?>