<article class="insights__card">
  <a href="<?php the_permalink() ?>">
    <figure>
      <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
        alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
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
  <h6 class="insights__card__title">
    <?php the_title() ?>
  </h6>
  <p class="insights__card__copy">
    <?php echo $subtitle ?>
  </p>
  <p class="insights__card__more"><a href="<?php the_permalink() ?>">Read more <img
        src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg" /></a></p>
</article>