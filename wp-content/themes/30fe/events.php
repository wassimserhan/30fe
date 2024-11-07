<?php /* Template Name: Events */ ?>

<?php 
get_header();
?>
<main class="main-container">
    <section class="events fullscreen">
        <section class="events">
            <section class="events__intro">
                <section class="max-width max-padding">
                    <article>
                        <h2 class="email__headline">Events</h2>
                        <p class="email__copy">Enter your work email to receive these updates directly in your inbox.
                        </p>
                    </article>
                </section>
            </section>

        </section>
        <?php
            $today = date('Ymd');
             $events = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type'=> 'events',
            'order'          => 'ASC', // Show upcoming posts first (optional)
             'orderby'        => 'meta_value',
             'meta_key'       => 'event_date', // Replace with your ACF date picker field name
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
          while ($events->have_posts()): $events->the_post(); 
          
         $color = get_field('event_color');
          
          ?>
        <section style="background-color: <?php echo esc_html($color['value']); ?>">
            <section class="max-width max-padding--side">
                <h3 class="events__title"><?php echo get_the_title() ;?></h3>
            </section>
        </section>

        <section style="background-color: <?php echo esc_html($color['value']); ?>">

            <section class="events__card max-width" style="background-color: <?php echo esc_html($color['value']); ?>">
                <article class="events__detail">
                    <img class="events__detail__image" loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
                </article>
                <article class="events__detail events__detail--right"
                    style="background-color: <?php echo esc_html($color['value']); ?>">
                    <h3 class="events__headline events__headline--right"><?php echo get_the_content() ;?></h3>

                </article>
            </section>
        </section>

        <?php endwhile ?>
        <?php wp_reset_postdata() ?>

    </section>
</main>
<?php 
get_footer();
?>