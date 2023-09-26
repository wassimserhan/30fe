<?php
if( have_rows('timeline') ):
while( have_rows('timeline') ) : the_row(); 
?>

<section class="about__timeline fullscreen">

  <hr class="about__timeline__line">
  <h3 class="about__timeline__headline">Our Story
  </h3>

  <section id="slider5" class="splide splide-timeline" aria-labelledby="carousel-heading">

    <div class="splide__track">

      <ul class="splide__list">
        <?php 
          if( have_rows('milestone') ): 
          while( have_rows('milestone') ) : the_row();
          $year = get_sub_field('year');
          $story = get_sub_field('story');
          ?>
        <section data-splide="<?php echo get_row_index() ?>" class="splide__slide timeline">
          <section class="about__timeline__wrapper">
            <section class="about__timeline__pill about__timeline__pill">
              <p class="about__timeline__pill__text"><?php echo $year ?></p>
            </section>
            <section class="about__timeline__story">
              <?php echo $story ?>
            </section>
          </section>
        </section>

        <?php
          endwhile; ?>
        <?php endif;
            ?>

      </ul>

    </div>
  </section>
</section>

<?php endwhile; endif; ?>