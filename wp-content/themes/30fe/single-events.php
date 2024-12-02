  <?php 

  get_header(); 

    $color = get_field('event_color');
  
   ?>

  <main class="main-container">
      <section class="fullscreen">
          <section class="max-width max-padding">
              <section class="event-post">
                  <div class="event-post__container">
                      <article id="event-color" class="event-post__left"
                          data-color="<?php echo esc_html($color['value']); ?>">

                          <h2 class="event-post__headline"><?php the_title() ?></h2>

                          <p class="event-post__copy"> <?php echo the_content();?></p>
                      </article>

                      <!-- Related Expert-->

                      <section class="event-rsvp">
                          <?php if (has_post_thumbnail()) : ?>
                          <img class="events__detail__image" loading="lazy"
                              src="<?php echo get_the_post_thumbnail_url(); ?>"
                              alt="<?php echo esc_attr(get_the_title()); ?>"
                              title="<?php echo esc_attr(get_the_title()); ?>">
                          <?php endif; ?>

                          <section class="event-rsvp__form">
                              <h2>RSVP now!</h2>
                              <p>Let us know you’re coming and we’ll save you a seat!</p>
                              <p class="expertise-form__form__required">*REQUIRED</p>
                              <!-- form inserted here -->
                              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                              <!-- form inserted here -->
                          </section>


                      </section>


                  </div>
              </section>
          </section>
          <!-- Gallery -->
          <section class="gallery">
              <section class="max-width max-padding">
                  <p class="gallery__title">Gallery from <?php the_title() ?><?php ?></p>
                  <div class="lightgallery">
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>
                      <a href="<?php echo get_template_directory_uri(); ?>/images/Image.jpg"
                          data-src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/Image.jpg" alt="Thumbnail">
                      </a>

                  </div>
                  <!-- Load All Button -->
                  <button id="loadAllBtn">Load All</button>
              </section>
          </section>
      </section>
  </main>

  <?php get_footer() ?>