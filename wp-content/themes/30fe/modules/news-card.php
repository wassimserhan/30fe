<article class="news__card">

    <article class="news__card__label">
        <a href="<?php the_permalink() ?>" aria-label="Read more">
            <?php require get_theme_file_path('/includes/blog-colors.php');?>
            <aside class="news__card__label__category" style="border: 1px solid <?php echo $label_color ;?>">
                <p class="news__card__label__category__text">
                    <?php echo get_the_term_list(get_the_ID(), 'news_category', '', ', ', ''); ?>
                </p>
            </aside>
        </a>
    </article>
    <a href="<?php the_permalink() ?>" aria-label="Read more">
        <h4 class="news__card__title">
            <?php echo get_the_title(); ?>
        </h4>
        <a href="<?php the_permalink() ?>" aria-label="Read more">

            <img class="news__card__image" loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

        </a>
        <p class="news__card__label__date"><?php echo get_the_date( 'F j, Y' ); ?></p>
        <p class="news__card__copy">
            <?php echo wp_trim_words(get_the_content(), 10, '...' ); ?>
        </p>

    </a>

</article>