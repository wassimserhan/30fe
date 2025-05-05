<?php /* Template Name: Continuing Education */ ?>

<?php 
get_header();
?>
<main class="main-container">
    <section class="education fullscreen">
        <section class="events">
            <section class="events__intro">
                <section class="max-width max-padding">
                    <article>
                        <h2 class="email__headline">Continuing Education</h2>
                        <p class="email__copy">Welcome to 30 Forensic Engineering’s continuing education—your gateway to
                            expert-led professional development. Our complimentary, accredited courses cater to
                            professionals in the insurance and legal sectors. With a robust offering of over 40 courses,
                            we provide flexible learning formats, including webinars, in-person sessions, and customized
                            content to meet your team's unique needs. Please explore our curriculum below:
                        </p> <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>#contact-form"
                            aria-label="Read more">
                            <button class="education__button">Request a Course</button>
                        </a>
                    </article>

                </section>
            </section>
        </section>
        <div class="accordion-container education__accordion-container max-padding--side max-width">
            <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
                $arrow_color = 'black'; // fallback
$education_item = get_sub_field('education_item');

if ($education_item && is_object($education_item)) {
    $color = get_field('category_color', $education_item->ID);

    if (is_array($color)) {
        $arrow_color = isset($color['value']) ? $color['value'] : 'black';
    } elseif (is_string($color)) {
        $arrow_color = $color;
    }
}
                
                ?>
            <div class="ac">
                <div class="ac-header mobile-accordion__items mobile-accordion__items--education max-padding--side">
                    <p style="margin:0" class="mobile-accordion__number industry__category-item">
                        <?php echo str_pad(get_row_index(), 2, '0', STR_PAD_LEFT); ?></p>

                    <button type="button"
                        class="ac-trigger industry__category-item"><?php echo get_the_title($education_item) ?></button>
                    <!-- Inline SVG with dynamic fill color -->


                    <svg class="expertise__list-item__arrow" width="21" height="27" viewBox="0 0 21 27"
                        fill="<?php echo esc_attr($arrow_color); ?>" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.9489 26.9545L9.97159 24.9943L15.1619 19.804H3V16.9233H15.1619L9.97159 11.7415L11.9489 9.77273L20.5398 18.3636L11.9489 26.9545Z"
                            fill="<?php echo esc_attr($arrow_color); ?>" />
                    </svg>



                </div>
                <div class="ac-panel education--side">
                    <section class="industry__category-bullets education__category-bullets">
                        <?php echo get_sub_field('copy') ?>
                    </section>
                </div>
            </div>
            <?php
            endwhile; ?>
            <?php endif;
            ?>
        </div>
    </section>
</main>
<?php 
get_footer();
?>