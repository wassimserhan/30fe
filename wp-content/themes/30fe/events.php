<?php /* Template Name: Events */ ?>

<?php 
get_header();
?>
<main class="main-container">
    <section class="events fullscreen">

        <?php
            $today = date('Ymd');
             $events = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type'=> 'events',
            'order'          => 'ASC', // Show upcoming posts first (optional)
             'orderby'        => 'meta_value',
             'meta_key'       => 'event_date', 
                'meta_type'      => 'DATE',
                'meta_query'     => array(
                array(
            'key'     => 'event_date', // ACF date field name
            'value'   => $today,
            'compare' => '>=',
            'type'    => 'DATE'
        ),
     ),
             ));

       if ( $events->have_posts() ) : ?>
        <?php  while ($events->have_posts()): $events->the_post(); 
          
         $color = get_field('event_color');
        $event_date = get_field('event_date'); ?>


        <section style="background-color: <?php echo esc_html($color['value']); ?>">
            <section class="events__card" style="background-color: <?php echo esc_html($color['value']); ?>">
                <article class="events__detail">
                    <img class="events__detail__image events__detail__image--full-height" loading="lazy"
                        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"
                        title="<?php echo $title; ?>">
                </article>
                <article class="events__detail events__detail--right"
                    style="background-color: <?php echo esc_html($color['value']); ?>">
                    <article class="events__label">
                        <aside class="events__label__category" style="border: 1px solid <?php echo $label_color ;?>">
                            <p class="events__label__category__text">
                                UPCOMING
                            </p>
                        </aside>
                    </article>
                    <h3 class="events__title"><?php echo get_the_title() ;?></h3>
                    <p class="events__date"><?php echo $event_date ;?>
                    </p>
                    <p class="events__headline events__headline--right">
                        <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                    <a href="<?php the_permalink() ?>" aria-label="Read more">
                        <button class="events__button">Learn More</button>
                    </a>
                </article>
            </section>
        </section>
        <?php endwhile ?>
        <?php else : ?>
        <!-- Custom message when no posts are found-->
        <section class="events__intro">
            <section class=" max-width max-padding">
                <h2 class="events__title">No Upcoming Events. Please check back later.</h2>
                <?php endif; ?>
            </section>
        </section>
        <?php wp_reset_postdata() ?>

        <!-- <section class="events">
            <section class="events__intro">
                <section class="max-width max-padding">
                    <article>
                        <h2 class="email__headline">Event Updates</h2>
                        <p class="email__copy">Enter your work email to receive these updates directly in your inbox.
                        </p>
                    </article>
                </section>
            </section>
        </section> -->

        <!-- Past Events -->

        <?php include get_template_directory() . '/modules/past-events.php'; ?>

    </section>
</main>
<?php 
get_footer();
?>