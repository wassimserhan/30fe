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
                      </section>


                  </div>
              </section>
          </section>
          <?php $images = get_field('event_image'); ?>
          <?php if ($images): ?>
          <!-- Gallery -->
          <section class="gallery">
              <section class="max-width max-padding">
                  <p class="gallery__title">Gallery from <?php the_title(); ?></p>
                  <div class="lightgallery">
                      <?php foreach ($images as $image): ?>
                      <a href="<?php echo esc_url($image['url']); ?>" data-src="<?php echo esc_url($image['url']); ?>"
                          data-thumb="<?php echo esc_url($image['sizes']['lightgallery-thumb']); ?>">
                          <img src="<?php echo esc_url($image['sizes']['lightgallery-thumb']); ?>"
                              alt="<?php echo esc_attr($image['alt']); ?>">
                      </a>
                      <?php endforeach; ?>
                  </div>
                  <!-- Load All Button -->
                  <button class="news__load" id="loadAllBtn">Load All</button>
              </section>
          </section>
          <?php endif; ?>
      </section>
  </main>

  <?php get_footer() ?>