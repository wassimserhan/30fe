<article class="insights__card">
  <a href="<?php the_permalink() ?>">
    <figure>
      <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>
  </a>
  <article class="insights__card__label">

    <?php require get_theme_file_path('/includes/blog-colors.php');?>
    <aside class="insights__card__label__category <?php echo $label_color; ?>">
      <p class="insights__card__label__category__text">
        <?php echo get_the_category_list(', '); ?>
      </p>
    </aside>
    <p class="insights__card__label__read"><?php echo display_read_time(); ?></p>
  </article>
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