  <?php 

  get_header(); 
  
   $subtitle = get_field ('subtitle')
   ?>

  <main class="main-container">
      <section class="fullscreen">
          <section class="max-width max-padding">
              <section class="news-post single-post">
                  <div class="news-post__container">
                      <article class="news-post__left">
                          <article class="news__card__label">
                              <a href="<?php the_permalink() ?>">
                                  <aside class="news__card__label__category" style="border: 1px solid #cbbea5;">
                                      <p class=" news-post__label__category__text">
                                          <?php echo get_the_term_list(get_the_ID(), 'news_category', '', ', ', ''); ?>
                                      </p>
                                  </aside>
                              </a>
                          </article>
                          <h2 class="news-post__headline"><?php the_title() ?></h2>

                          <p class="news-post__copy"> <?php echo the_content();?></p>
                      </article>

                      <!-- Related Expert -->
                      <?php if(get_field ( 'expert' ) ) : ?>
                      <section class="">
                          <?php 
                                $team_members = get_field ( 'expert' ); 
                                if($team_members ) :
                                foreach ($team_members as $item):     
                                $name = get_the_title($item);
                                $title = get_field('title', $item);
                                $phone = get_field('phone', $item);
                                $email = get_field('email', $item); ?>

                          <section class="news-post__card">
                              <a href="<?php the_permalink($item); ?>">
                                  <img class="lazyload blog-card__image"
                                      src="<?php echo get_the_post_thumbnail_url($item); ?>" src="
                        <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
                              </a>

                              <div class="blog-card__name">
                                  <?php echo $name ;?>
                              </div>
                              <div class="blog-card__title">
                                  <?php echo $title ;?>
                              </div>
                              <div class="blog-card__email">
                                  e: <a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>
                              </div>
                          </section>
                          <?php endforeach; ?>
                          <?php endif ;?>
                          <?php endif ;?>
                  </div>
              </section>
          </section>
      </section>
  </main>

  <?php get_footer() ?>