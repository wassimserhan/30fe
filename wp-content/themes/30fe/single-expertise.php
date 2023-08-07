<?php  

/*
Template Name: Expertise  
Template Post Type: post, expertise
*/

get_header();
?>

<main class="main-container">
  <section class="industry">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Expertise</p>
      </section>
      <section class="industry__intro">
        <h1 class="industry__title industry__title"><?php the_title() ?></h1>
        <p class="industry__copy industry__copy"><?php the_content() ?></p>
      </section>
    </section>
    <figure class="industry__figure">
      <img loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>


    <section class="max-width">
      <article class="industry__categories">
        <!-- display industry categories -->
        <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>


        <section class="industry__category <?php if( get_row_index()== 2) echo "industry__category-bullets-border" ?>">
          <section class="industry__category-items">
            <p><?php echo '0' . get_row_index() ?></p>
            <h4 class="industry__category-item"><?php echo $industryItems ?></h4>
          </section>

          <section class="industry__category-bullets">
            <?php
          if( have_rows('items') ): 
          while( have_rows('items') ) : the_row();
            $industryItem = get_sub_field('item'); ?>
            <section class=" industry__category-bullets__items">
              <figure class="industry__category-bullets__arrow">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/blue-arrow.svg"
                  alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
              </figure>
              <article>
                <h5 class="industry__category-bullets__item"><?php echo $industryItem ?></h5>
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

  </section>



  <!-- Form -->
  <section class="expertise-form">
    <section class="max-width">
      <section class="expertise-form__wrapper">
        <section class="expertise-form__form">
          <h3 class="expertise-form__headline">For more information</h3>
          <p class="expertise-form__form__copy">Fill up this form and someone from our team will be in touch with you
            shortly.</p>
          <p class="expertise-form__form__required">*REQUIRED</p>
          <!-- form inserted here -->
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
          <!-- form inserted here -->
        </section>
        <!-- slider -->
        <section class="expertise-form__wrapper">
          <section id="slider2" class="splide splide-form" aria-labelledby="carousel-heading">
            <h3 class="expertise-form__headline expertise-form__headline-splide">Meet the <?php echo the_title()?> Team
            </h3>
            <div class="splide__track">
              <ul class="splide__list">
                <?php 
                $team = get_field('expert');
                foreach ($team as $item): 
                $name = get_the_title($item);
                $title = get_field('title', $item);
                $phone = get_field('phone', $item);
                $email = get_field('email', $item);
                $img =   get_field('headshot', $item);
                $image = $img['url'];
                ?>
                <li class="splide__slide">
                  <section class="expertise-form__card">
                    <figure class="expertise-form__card__image">
                      <img class="lazyload" src="<?php echo get_the_post_thumbnail_url($item) ?>"
                        alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
                    </figure>
                    <section class="pill">
                      <p class="pill__label">Practice Leads</p>
                    </section>
                    <div class="expertise-form__card__name">
                      <?php echo $name; ?>
                    </div>
                    <div class="expertise-form__card__title">
                      <?php echo $title; ?>
                    </div>
                    <div class="expertise-form__card__email">
                      <?php echo $email; ?>
                    </div>
                  </section>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </section>
        </section>
      </section>
    </section>
  </section>
  <!-- Blog -->

  <section class="insights whitesmoke-bg ">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Blog</p>
      </section>
      <h1 class="insights__headline">Insights on <?php echo the_title() ?></h1>
      <h6>Read our latest insights from our best experts.</h6>
      <br>


      <section class="insights__grid">

        <?php 

     $homepagePosts = new WP_Query(array(
      'posts_per_page' => 3,
      'category_name' => $post->post_name,
      ));
      while ($homepagePosts->have_posts()): $homepagePosts->the_post();
      ?>

        <article class="insights__card">
          <figure>
            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
              alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
              width="100%">
          </figure>
          <article class="insights__card__label">
            <aside class="insights__card__label__category">
              <p class="insights__card__label__category__text">
                <?php echo get_the_category_list(', '); ?>
              </p>
            </aside>
            <p class="insights__card__label__read"><?php echo display_read_time(); ?></p>
          </article>
          <h6 class="insights__card__title">
            <?php the_title() ?>
          </h6>
          <p class="insights__card__copy">
            <?php echo $subtitle ?>
          </p>
          <p class="insights__card__more"><a href="<?php the_permalink() ?>">Read more <img
                src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg" /></a></p>
        </article>
        <?php endwhile ?>

        <?php wp_reset_postdata() ?>
      </section>


    </section>
  </section>
</main>
<?php 
get_footer();
?>