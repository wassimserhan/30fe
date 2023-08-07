  <section class="testimonials whitesmoke-bg">
    <section class="max-width max-padding">
      <h2 class="testimonials__headline">Testimonials</h2>
      <section id="slider1" class="splide splide-testimonials" aria-labelledby="carousel-heading">
        <div class="splide__track">
          <ul class="splide__list">

            <?php 
    if( have_rows('testimonials') ): 
      while( have_rows('testimonials') ) : the_row();
      $quote = get_sub_field('quote');
    ?>
            <li class="splide__slide">
              <section class="testimonials__card">
                <h3 class="testimonials__quote">&ldquo;<?php echo $quote ?>&rdquo;</h3>
              </section>

            </li>
            <?php
  endwhile; ?>
            <?php endif;
            ?>
          </ul>
        </div>
      </section>
    </section>

  </section>