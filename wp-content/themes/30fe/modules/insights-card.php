<article class="insights__card">
    <a href="<?php the_permalink() ?>" aria-label="Read more">

        <img class="insights__card__image" loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

    </a>
    <article class="insights__card__label">
        <a href="<?php the_permalink() ?>" aria-label="Read more">
            <?php require get_theme_file_path('/includes/blog-colors.php');?>
            <aside class="insights__card__label__category" style="border: 1px solid <?php echo $label_color ;?>">
                <p class="insights__card__label__category__text">
                    <?php echo get_the_category_list(', '); ?>
                </p>
            </aside>
            <a href="<?php the_permalink() ?>" aria-label="Read more">
                <p class="insights__card__label__read"><?php echo display_read_time(); ?></p>
            </a>
        </a>
    </article>
    <a href="<?php the_permalink() ?>" aria-label="Read more">
        <h4 class="insights__card__title">
            <?php echo wp_trim_words( get_the_title(), 6, '...' ); ?>
        </h4>
        <p class="insights__card__copy">
            <?php echo trim($subtitle) ?>
        </p>
        <p class="insights__card__label__date"><?php echo get_the_date( 'F j, Y' ); ?></p>
    </a>

</article>