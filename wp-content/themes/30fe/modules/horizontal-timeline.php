  <section class="about__timeline fullscreen">
      <section class="max-padding max-width">

          <?php
if( have_rows('timeline') ):
while( have_rows('timeline') ) : the_row(); 
?>

          <section class="h--timeline js-h--timeline">


              <div class="h--timeline-events">
                  <ol>
                      <li class="h--timeline-event h--timeline-event--selected text-component">
                          <div class="event-wrapper">
                              <div class="h--timeline-event-content container">
                                  <h2 class="h--timeline-event-title">Horizontal Timeline</h2>

                                  <p class="h--timeline-event-description">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  </p>
                                  <p class="h--timeline-event-date">2002</p>
                              </div>
                              <figure class="h__timeline__image">
                                  <img loading="lazy"
                                      src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif"
                                      alt="what is 30?" title="lock">
                              </figure>
                          </div>

                      </li>

                      <?php 
                        if( have_rows('milestone') ): 
                        while( have_rows('milestone') ) : the_row();
                        $year = get_sub_field('year');
                        $story = get_sub_field('story');
                       $img = get_sub_field('image');
          $image = $img['url'];
                        ?>

                      <li class="h--timeline-event text-component">
                          <div class="event-wrapper">
                              <div class="h--timeline-event-content container">
                                  <h2 class="h--timeline-event-title">Event title here</h2>

                                  <p class="h--timeline-event-description">
                                      <?php echo nl2br($story) ?>
                                  </p>
                                  <p class="h--timeline-event-date"><?php echo $year ?></p>
                              </div>
                              <figure class="about__whatis__image">
                                  <img loading="lazy" src="<?php echo $image ?>" alt="<?php echo $alt; ?>"
                                      title="<?php echo $alt; ?>">
                              </figure>
                          </div>
                      </li>

                      <?php
                    endwhile; ?>
                      <?php endif;
                      ?>

                  </ol>
              </div> <!-- .h--timeline-events -->

              <div class="h--timeline-container">
                  <div class="h--timeline-dates">
                      <div class="h--timeline-line">
                          <ol>
                              <li><a href="#0" data-date="16/01/2001"
                                      class="h--timeline-date h--timeline-date--selected">2001</a>
                              </li>
                              <?php 
                                if( have_rows('milestone') ): 
                                while( have_rows('milestone') ) : the_row();
                                $year = get_sub_field('year');
                                $story = get_sub_field('story');
                                ?>

                              <li><a href="#0" data-date="01/01/<?php echo $year ?>"
                                      class="h--timeline-date"><?php echo $year ?></a></li>

                              <?php
          endwhile; ?>
                              <?php endif;
            ?>

                          </ol>

                          <span class="h--timeline-filling-line" aria-hidden="true"></span>
                      </div> <!-- .h--timeline-line -->
                  </div> <!-- .h--timeline-dates -->

                  <nav class="h--timeline-navigation-container">
                      <ul>
                          <li><a href="#0"
                                  class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">Prev</a>
                          </li>
                          <li><a href="#0"
                                  class="text-replace h--timeline-navigation h--timeline-navigation--next">Next</a>
                          </li>
                      </ul>
                  </nav>
              </div> <!-- .h--timeline-container -->
          </section>
          <?php endwhile; endif; ?>
      </section>
  </section>