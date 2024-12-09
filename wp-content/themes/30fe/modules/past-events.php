<section class="news black-bg fullscreen">
    <section class="max-width max-padding">
        <h2 class="news__headline">Past Events</h2>

        <section id="news" class="news__grid" data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
            data-max="<?= $wp_query->max_num_pages; ?>">
            <?php
            $today = date('Ymd');
            $events = new WP_Query(array(
                'posts_per_page' => 9,
                'post_type'      => 'events',
                'order'          => 'ASC', // Show upcoming posts first (optional)
                'orderby'        => 'meta_value',
                'meta_key'       => 'event_date', // Replace with your ACF date picker field name
                'meta_type'      => 'DATE',
                'meta_query'     => array(
                    array(
                        'key'     => 'event_date', // ACF date name
                        'value'   => $today,
                        'compare' => '<',
                        'type'    => 'DATE'
                    ),
                ),
            ));

            // Get the total number of posts for this query
            $total_posts = $events->found_posts;

            while ($events->have_posts()): $events->the_post();

            $event_date = get_field('event_date');
            ?>
            <article class="news__card">
                <a href="<?php the_permalink() ?>" aria-label="Read more">
                    <h4 class="news__card__title">
                        <?php echo get_the_title(); ?>
                    </h4>
                    <a href="<?php the_permalink() ?>" aria-label="Read more">
                        <img class="news__card__image" loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt="<?php echo esc_attr(get_the_title()); ?>"
                            title="<?php echo esc_attr(get_the_title()); ?>">
                    </a>
                    <p class="news__card__label__date"><?php echo $event_date; ?></p>
                    <p class="news__card__copy">
                        <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                    </p>
                </a>
            </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>

        <?php if ($total_posts > 9): ?>
        <button id="load-more" class="news__load" data-page="1" data-post-type="events"
            data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load More</button>
        <?php endif; ?>
    </section>
</section>