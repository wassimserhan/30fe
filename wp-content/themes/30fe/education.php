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
                        </p>

                        <a href="<?php echo site_url('/contact/#contact-form'); ?>" aria-label="Read more">
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
            $educationItems = get_sub_field('list_item'); ?>
            <div class="ac">
                <div class="ac-header mobile-accordion__items mobile-accordion__items--education max-padding--side">
                    <p style="margin:0" class="mobile-accordion__number industry__category-item">
                        <?php echo str_pad(get_row_index(), 2, '0', STR_PAD_LEFT); ?></p>
                    <button type="button"
                        class="ac-trigger industry__category-item"><?php echo $educationItems ?></button>
                    <img class="expertise__list-item__arrow"
                        src="https://30fe.com/wp-content/themes/30fe/images/white-arrow.svg" width="20" height="20"
                        alt="arrow" tabindex="0">
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