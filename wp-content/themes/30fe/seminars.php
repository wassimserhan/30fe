<?php
/**
 * Template Name: Seminars
 */

get_header();
?>

<main class="main-container">
    <section class="seminars black-bg fullscreen">

        <!-- Upcoming Seminars -->
        <section class="max-width max-padding">
            <h2 class="seminars__headline">Upcoming Seminars</h2>

            <section class="seminars__grid"
                data-page="<?php echo esc_attr( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ); ?>"
                data-max="<?php echo esc_attr( $wp_query->max_num_pages ); ?>">

                <?php
                $today    = date( 'Ymd' );
                $upcoming = new WP_Query( [
                    'posts_per_page' => 10,
                    'post_type'      => 'seminars',
                    'order'          => 'ASC',
                    'orderby'        => 'meta_value',
                    'meta_key'       => 'seminar_date',
                    'meta_type'      => 'DATE',
                    'meta_query'     => [
                        [
                            'key'     => 'seminar_date',
                            'value'   => $today,
                            'compare' => '>=',
                            'type'    => 'DATE',
                        ],
                    ],
                ] );

                if ( $upcoming->have_posts() ) :
                    while ( $upcoming->have_posts() ) :
                        $upcoming->the_post();

                        $seminar_date    = get_field( 'seminar_date' );
                        $team_members    = get_field( 'expert' );
                        $expertise_posts = get_field( 'related_expertise' );

                        // Speakers
                        $speaker_names = [];
                        if ( $team_members ) {
                            foreach ( $team_members as $member ) {
                                $speaker_names[] = get_the_title( $member );
                            }
                        }

                        // Button color from first related expertise
                        $cta_color = '#cbbea5'; // fallback
                        if ( ! empty( $expertise_posts ) && is_array( $expertise_posts ) ) {
                            $primary_expertise = $expertise_posts[0];
                            $expertise_color   = get_field( 'category_color', $primary_expertise->ID );

                            if ( $expertise_color ) {
                                if ( is_array( $expertise_color ) && isset( $expertise_color['value'] ) ) {
                                    $cta_color = $expertise_color['value'];
                                } else {
                                    $cta_color = $expertise_color;
                                }
                            }
                        }

                        // Split date into "Month Day" and "Year"
                        $seminar_timestamp = strtotime( $seminar_date );
                        $seminar_day_month = $seminar_timestamp ? date_i18n( 'F j', $seminar_timestamp ) : $seminar_date;
                        $seminar_year      = $seminar_timestamp ? date_i18n( 'Y', $seminar_timestamp ) : '';
                        ?>
                        <article class="seminars__card">
                            <a href="<?php the_permalink(); ?>" aria-label="Register Here" class="seminars__card__link">
                                <div class="seminars__card__content">
                                    <p class="seminars__card__date">
                                        <span class="seminars__card__date-main">
                                            <?php echo esc_html( $seminar_day_month ); ?>
                                        </span><br>
                                        <?php if ( $seminar_year ) : ?>
                                            <span class="seminars__card__date-year">
                                                <?php echo esc_html( $seminar_year ); ?>
                                            </span>
                                        <?php endif; ?>
                                    </p>

                                    <p class="seminars__card__title">
                                        <?php the_title(); ?>
                                    </p>

                                    <?php if ( ! empty( $speaker_names ) ) : ?>
                                        <p class="seminars__card__speaker">
                                            <strong>Speakers:</strong>
                                            <?php echo esc_html( implode( ', ', $speaker_names ) ); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>

                                <button class="seminars__button"
                                        style="background-color: <?php echo esc_attr( $cta_color ); ?>;">
                                    Register Here
                                </button>
                            </a>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>No upcoming seminars at this time.</p>
                <?php endif; ?>

            </section>
        </section>

        <hr class="seminars-divider">

        <!-- Past Seminars -->
        <section class="max-width max-padding">
            <h2 class="seminars__headline">Past Seminars</h2>

            <section id="ajax-posts" class="seminars__grid"
                data-page="<?php echo esc_attr( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ); ?>"
                data-max="<?php echo esc_attr( $wp_query->max_num_pages ); ?>">

                <?php
                $past = new WP_Query( [
                    'posts_per_page' => 12,
                    'post_type'      => 'seminars',
                    'order'          => 'ASC',
                    'orderby'        => 'meta_value',
                    'meta_key'       => 'seminar_date',
                    'meta_type'      => 'DATE',
                    'meta_query'     => [
                        [
                            'key'     => 'seminar_date',
                            'value'   => $today,
                            'compare' => '<',
                            'type'    => 'DATE',
                        ],
                    ],
                ] );

                $total_past = $past->found_posts;

                if ( $past->have_posts() ) :
                    while ( $past->have_posts() ) :
                        $past->the_post();

                        get_template_part( 'modules/seminars-card' );

                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>No past seminars found.</p>
                <?php endif; ?>

            </section>

            <?php if ( $total_past > 12 ) : ?>
                <button
                    id="load-more"
                    class="seminars__load"
                    data-page="1"
                    data-post-type="seminars"
                    data-url="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>">
                    Load More
                </button>
            <?php endif; ?>

        </section>

    </section>
</main>

<?php
get_footer();