<article class="insights__card">
  <a href="<?php the_permalink() ?>">

  </a>

  <h4 class="insights__card__title">
    <?php echo wp_trim_words( get_the_title(), 5, '...' ); ?>
  </h4>
  <p class="insights__card__copy">
    <?php echo trim($subtitle) ?>
  </p>
  <p class="insights__card__label__date"><?php echo get_the_date( 'F j, Y' ); ?></p>

  <p class="insights__card__more"><a href="<?php the_permalink() ?>">Read more <img
        src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg" /></a></p>
</article>