<?php
// modules/seminars-card.php

$seminar_date    = get_field('seminar_date');
$team_members    = get_field('expert');
$expertise_posts = get_field('related_expertise');

$speaker_names = [];

// Experts
if ($team_members) {
    foreach ($team_members as $member) {
        $speaker_names[] = get_the_title($member);
    }   
}

// Split date into "Month Day" and "Year"
$seminar_timestamp = strtotime( $seminar_date );
$seminar_day_month = $seminar_timestamp ? date_i18n( 'F j', $seminar_timestamp ) : $seminar_date;
$seminar_year      = $seminar_timestamp ? date_i18n( 'Y', $seminar_timestamp ) : '';

// Button color from first related expertise (optional)
$cta_color = '#f2f1ed';?>

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

            <?php if (!empty($speaker_names)) : ?>
                <p class="seminars__card__speaker">
                    <strong>Speakers:</strong>
                    <?php echo esc_html(implode(', ', $speaker_names)); ?>
                </p>
            <?php endif; ?>
        </div>

        <button class="seminars__button"
                style="background-color: <?php echo esc_attr($cta_color); ?>;">
            Registration Closed
        </button>
    </a>
</article>