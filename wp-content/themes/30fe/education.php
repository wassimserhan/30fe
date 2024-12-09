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
                        <p class="email__copy">We offer continuing education courses, seminars and webinars for
                            insurance and legal professionals. Our experts are certified by the California State Bar and
                            our courses are accredited by the Law Society of Ontario and the Law Society of BC. Seminars
                            can be combined or customized as requested. To schedule a complimentary session for any of
                            the topics listed below, or to book a custom seminar, please reach out to our Vancouver,
                            Toronto or LA contact.
                        </p> <a href="<?php the_permalink() ?>" aria-label="Read more">
                            <button class="education__button">Hire Us</button>
                        </a>
                    </article>

                </section>
            </section>
        </section>
        <div class="accordion-container education__accordion-container max-width max-padding max-padding--no-top">
            <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $educationItems = get_sub_field('list_item'); ?>

            <div class="ac">
                <div class="ac-header mobile-accordion__items mobile-accordion__items--education">
                    <p class="mobile-accordion__number education__number">
                        <?php echo '0' . get_row_index() ?></p>
                    <button type="button" class="ac-trigger education__items"><?php echo $educationItems ?></button>
                </div>
                <div class="ac-panel">
                    <section class="industry__category-bullets education__category-bullets">
                        <?php
                if( have_rows('items') ): 
                while( have_rows('items') ) : the_row();
                  $educationItem = get_sub_field('item'); ?>
                        <div class="industry__category-bullets__items">
                            <figure class="industry__category-bullets__arrow education__arrow">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/images/education-arrow.svg"
                                    width="20" height="20" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
                            </figure>
                            <article>
                                <p class="ac-text industry__category-bullets__item"><?php echo $educationItem ?></p>


                                <?php
                if( have_rows('subitems') ): ?>
                                <ul class="industry__category-bullets__subitem">
                                    <?php  
                      while( have_rows('subitems') ) : the_row();
                       $subItem = get_sub_field('subitem'); ?>
                                    <li><?php echo $subItem ?></li>
                                    <?php
                      endwhile; ?>
                                </ul>
                                <?php endif;?>
                            </article>
                        </div>
                        <?php
                    endwhile; ?>
                        <?php endif;?>
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