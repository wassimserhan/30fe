<div class="container">
    <section class="max-padding max-width">
        <?php
                        if( have_rows('timeline') ):
                        while( have_rows('timeline') ) : the_row(); 
                        ?>
        <div class="swiper-container-wrapper swiper-container-wrapper--timeline">
            <!-- Swiper -->
            <div class="swiper swiper-container swiper-container--timeline">
                <div class="swiper-wrapper">
                    <!-- Slides -->


                    <?php 
                        if( have_rows('milestone') ): 
                        while( have_rows('milestone') ) : the_row();
                        $year = get_sub_field('year');
                        $story = get_sub_field('story');
                       $img = get_sub_field('image');
                        $image = $img['url'];
                        ?>
                    <div class="swiper-slide">
                        <div class="event-wrapper">
                            <div class="swiper-event-content">

                                <p class="h--timeline-event-description">
                                    Established in Toronto, Ontario, Canada.
                                </p>
                                <p class="swiper-date ">2002</p>
                            </div>
                            <figure class="h__timeline__image">
                                <img loading="lazy"
                                    src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif"
                                    alt="what is 30?" title="lock">
                            </figure>
                        </div>
                    </div>

                    <?php
                    endwhile; ?>
                    <?php endif;
                      ?>

                </div>
            </div>
            <!-- Timeline -->
            <ul class="swiper-pagination-custom">

                <?php 
                        if( have_rows('milestone') ): ?>
                <?php $row_index = 0; // Initialize row index ?>
                <?php while( have_rows('milestone') ) : the_row();
                        $year = get_sub_field('year');
                        $story = get_sub_field('story');
                       $img = get_sub_field('image');
                        $image = $img['url'];
                        ?>
                <li class='swiper-pagination-switch <?php if ($row_index === 0) echo 'first active' ;?>'><span
                        class='switch-title'><?php echo $year ;?></span></li>
                <?php
                    endwhile; ?>
                <?php endif;
                      ?>
                <?php $row_index++; // Increment row index ?>
            </ul>
            <!-- Progressbar -->
            <div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"></div>

        </div>
        <?php endwhile; endif; ?>
    </section>
</div>