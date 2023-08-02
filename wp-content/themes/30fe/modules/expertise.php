<section class="expertise">
  <h3 class="expertise__headline">Expertise</h3>
  <section class="expertise__list">

    <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'expertise'
        ));

        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>


    <a href="<?php echo the_permalink() ?>">
      <button class="expertise__item"><?php the_title() ?>
        <img class="expertise__item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
          alt="arrow" tabindex=0>
      </button>
    </a>


    <?php endwhile ?>
    <?php wp_reset_postdata() ?>
  </section>

</section>