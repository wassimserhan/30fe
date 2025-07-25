<?php  

/*
Template Name: Expertise  
Template Post Type: post, expertise
*/

get_header();
?>


<?php $color = get_field('category_color');?>

<main class="main-container">
    <section data-navColor="<?php echo esc_html($color['value']); ?>"
        class="industry <?php echo esc_html($color['label'])."-bg"; ?>">
        <section class="max-width max-padding">
            <a href="<?php echo site_url('/expertise')?>">
                <section class="pill">
                    <p class="pill__label">Expertise</p>
                </section>
            </a>
            <section class="industry__intro">
                <h2 class="industry__title industry__title"><?php the_title() ?></h2>
                <p class="industry__copy industry__copy"><?php echo get_field('intro') ;?></p>
                <?php
$file = get_field('download'); // returns file URL (if ACF return format is set to "File URL")
if ($file): ?>
                <a href="<?php echo esc_url($file); ?>" target="_blank" rel="noopener" aria-label="Download PDF">
                    <button style="margin-top: 20px"
                        class="education__button"><?php echo get_field('download_text'); ?></button>
                </a>
                <?php endif; ?>
            </section>
        </section>
        <figure class="industry__figure">
            <img class="industry__figure--desktop" loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>"
                alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

            <img class="industry__figure--mobile" loading="lazy"
                src="<?php echo get_field('featured_image_mobile')['url'] ?>" alt="<?php echo $alt; ?>"
                title="<?php echo $title; ?>">
        </figure>



        <article class="industry__categories">
            <!-- display industry categories -->
            <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>


            <section
                class="industry__category <?php if( get_row_index()== 2) echo "industry__category-bullets-border" ?>">

                <section class="industry__category-items">


                    <p class="industry__category-item <?php echo esc_html($color['label']); ?>">
                        <?php echo '0' . get_row_index() ?></p>
                    <h4 class="industry__category-item"><?php echo $industryItems ?></h4>
                </section>

                <section class="industry__category-bullets">
                    <?php
          if( have_rows('items') ): 
          while( have_rows('items') ) : the_row();
            $industryItem = get_sub_field('item'); ?>
                    <section class=" industry__category-bullets__items">
                        <figure class="industry__category-bullets__arrow">
                            <img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field('category_color')['label']?>-arrow.svg"
                                width="20" height="20" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
                        </figure>
                        <article>
                            <p class="industry__category-bullets__item"><?php echo $industryItem ?></p>
                            <?php
          if( have_rows('subitems') ): ?>
                            <ul class="industry__category-bullets__subitem">
                                <?php  
          while( have_rows('subitems') ) : the_row();
            $subItem = get_sub_field('subitem'); ?>
                                <li><?php echo $subItem ?></li>


                                <?php
            endwhile; ?>
                                <?php endif;
            ?>
                        </article>
                    </section>
                    <?php
            endwhile; ?>
                    <ul>
                        <?php endif;
            ?>
                </section>
            </section>



            <?php
            endwhile; ?>
            <?php endif;
            ?>
        </article>
    </section>



    <div class="accordion-container">
        <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>

        <div class="ac">
            <div class="ac-header mobile-accordion__items">
                <p class="mobile-accordion__number">
                    <?php echo '0' . get_row_index() ?></p>
                <button type="button" class="ac-trigger"><?php echo $industryItems ?></button>
            </div>



            <div class="ac-panel">
                <section class="industry__category-bullets">
                    <?php
                if( have_rows('items') ): 
                while( have_rows('items') ) : the_row();
                  $industryItem = get_sub_field('item'); ?>
                    <div class="industry__category-bullets__items">
                        <figure class="industry__category-bullets__arrow">
                            <img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field('category_color')['label']?>-arrow.svg"
                                width="20" height="20" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
                        </figure>
                        <article>
                            <p class="ac-text industry__category-bullets__item"><?php echo $industryItem ?></p>


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




    <!-- Form -->
    <section class="expertise-form fullscreen">
        <section class="max-width max-padding expertise-form--no-padding">
            <section class="expertise-form__wrapper">
                <section class="expertise-form__form">
                    <h3 class="sector-form__headline">Contact an Expert</h3>
                    <p class="expertise-form__form__required">*REQUIRED</p>
                    <!-- form inserted here -->
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8 ) ); ?>
                    <!-- form inserted here -->
                </section>
                <!-- slider -->
                <section class="expertise-form__wrapper">
                    <section id="slider2" class="splide splide-form" aria-labelledby="carousel-heading">
                        <h3 class="expertise-form__headline expertise-form__headline-splide">Meet the
                            <?php echo the_title()?> Team
                        </h3>
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
    <!-- Blog -->

    <?php 
     $homepagePosts = new WP_Query(array(
      'posts_per_page' => 3,
      'category_name' => $post->post_name,
      )); ?>

    <?php if($homepagePosts->have_posts()) :?>

    <section class="insights fullscreen">
        <section class="max-width max-padding">
            <section class="pill">
                <p class="pill__label">Blog</p>
            </section>
            <h2 class="insights__headline">Insights on <?php echo the_title() ?></h2>
            <p>Read the latest publications by our experts.</p>
            <br>


            <section class="insights__grid">


                <?php while ($homepagePosts->have_posts()): $homepagePosts->the_post();
      ?>

                <?php include get_template_directory() . '/modules/insights-card.php'; ?>

                <?php endwhile ?>


            </section>


        </section>
    </section>
    <?php endif?>

    <?php wp_reset_postdata() ?>
</main>

<?php 
get_footer();
?>