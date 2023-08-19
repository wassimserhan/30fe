<section class="home-expertise fullscreen">
  <section class="max-width max-padding">
    <h3 class="home-expertise__headline">Our Expertise</h3>
    <section class="home-expertise__list">
      <?php 
          $customQuery = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'expertise'
        ));
        while ($customQuery->have_posts()): $customQuery->the_post();
        ?>
      <a href="<?php echo the_permalink() ?>">
        <button class="home-expertise__item">
          <p><?php the_title() ?></p>
          <img class="home-expertise__item__arrow" src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"
            alt="arrow" tabindex=0>
        </button>
      </a>


      <?php endwhile ?>
      <?php wp_reset_postdata() ?>
    </section>
  </section>
</section>