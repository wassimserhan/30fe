<?php 
  get_header(); 
  $color = get_field('seminars_color');
?>

<main class="main-container">
    <section class="fullscreen">
        <section class="max-width max-padding">
            <section class="seminar-post">
                <section class="seminar-post__wrapper">
                    <!-- Left Column -->
                    <div class="seminar-post__container">
                        <article id="seminar-color" class="seminar-post__left">
                            <h2 class="seminar-post__headline"><?php the_title(); ?></h2>

                            <?php
                                $post_id = get_the_ID();

                                $seminar_date_raw = get_field('seminar_date', $post_id);   // e.g. "November 24, 2025"
                                $seminar_time_raw = get_field('seminar_time', $post_id);   // e.g. "11:00 am"

                                // Format date to "Thursday, Mar 24, 2026"
                                $seminar_date = '';
                                if ( $seminar_date_raw ) {
                                $timestamp    = strtotime( $seminar_date_raw );
                                $seminar_date = $timestamp
                                ? date_i18n( 'l, M j, Y', $timestamp )
                                : $seminar_date_raw;
                                }

                                // Default to empty
                                $seminar_time_est = '';
                                $seminar_time_pst = '';

                                if ( $seminar_date_raw && $seminar_time_raw ) {
                                // Build a full datetime string from ACF values
                                $datetime_raw = $seminar_date_raw . ' ' . $seminar_time_raw;

                                // Assume seminar time is stored in Eastern time
                                $tz_est = new DateTimeZone( 'America/New_York' );
                                $tz_pst = new DateTimeZone( 'America/Los_Angeles' );

                                $dt_est = new DateTime( $datetime_raw, $tz_est );
                                $dt_pst = clone $dt_est;
                                $dt_pst->setTimezone( $tz_pst );

                                $seminar_time_est = $dt_est->format( 'g:i a' );
                                $seminar_time_pst = $dt_pst->format( 'g:i a' );
                                }
                            ?>

                            <p class="seminar-post__date">
                                Date: <?php echo esc_html( $seminar_date ); ?>
                            </p>

                            <?php if ( $seminar_time_est && $seminar_time_pst ) : ?>
                                <p class="seminar-post__date">
                                Time: <?php echo esc_html( $seminar_time_est ); ?> EST /
                            <?php echo esc_html( $seminar_time_pst ); ?> PST
                                </p>
                            <?php endif; ?>
                        
                            <?php
                                $register_link = get_field('register_here');

                                if ($register_link) :
                                    $url    = $register_link['url'];
                                    $title  = $register_link['title'] ?: 'Register Here';
                                    $target = $register_link['target'] ?: '_blank';
                                ?>
                                    <a href="<?php echo esc_url($url); ?>"
                                    target="<?php echo esc_attr($target); ?>"
                                    aria-label="<?php echo esc_attr($title); ?>">
                                        <button style="margin: 20px 0; font-size: 1rem;" class="frm_button_submit">
                                            <?php echo esc_html($title); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>

                                <hr class="seminar-post-divider">


                            <p class="seminar-post__copy"><?php echo the_content(); ?></p>
                        </article>
                    </div>

                    <!-- Right Column -->
                    <section class="seminar-post__slide-wrapper">
                        <section id="slider2" class="splide splide-form seminar-post__slide-card" aria-labelledby="carousel-heading">
                            <h3 class="expertise-form__headline expertise-form__headline-splide">Speakers</h3>
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php 
                                        $team_members = get_field ( 'expert' ); 
                                        $card_index = 0;
                                        foreach ($team_members as $item):
                                        $name = get_the_title($item);
                                        $title = get_field('title', $item);
                                        $phone = get_field('phone', $item);
                                        $email = get_field('email', $item); ?>
                                    <li class="splide__slide">
                                        <?php 
                                        include get_template_directory() . '/modules/team-card.php'; ?>
                                    </li>
                                    <?php $card_index++;?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</main>

<?php get_footer(); ?>