<article class="news__card">
    <a href="<?php the_permalink(); ?>" class="news__card__link">

        <div class="news__card__label">
            <aside class="news__card__label__category" style="border: 1px solid #cbbea5;">
                <p class="news__card__label__category__text">
                    <?php
        $terms = wp_get_post_terms(get_the_ID(), 'news_category', array('fields' => 'names'));
        if (!empty($terms)) {
            echo esc_html(implode(', ', $terms)); // Outputs plain text categories
        }
        ?>
                </p>
            </aside>

        </div>

        <h4 class="news__card__title">
            <?php echo get_the_title(); ?>
        </h4>

        <img class="news__card__image" loading="lazy" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"
            alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">

        <p class="news__card__label__date"><?php echo esc_html(get_the_date('F j, Y')); ?></p>
        <p class="news__card__copy">
            <?php echo esc_html(wp_trim_words(get_the_content(), 10, '...')); ?>
        </p>

    </a>
</article>