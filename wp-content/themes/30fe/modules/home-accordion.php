  <section class="whitesmoke-bg">
    <section class="max-width">
      <div class="accordion accordion--horizontal fullscreen">

        <?php $k=0;
    if( have_rows('accordion_items') ): 
      while( have_rows('accordion_items') ) : the_row();
      $headline = get_sub_field('headline');
      $copy = get_sub_field('copy');
      $img = get_sub_field('image');
      $image = $img['url'];
      $alt = $img['alt'];
      $colors = [ 'whitesmoke-bg', 'blue-bg','green-bg', 'orange-bg', 'taupe-bg','dark-bg' ];
    ?>
        <div class="accordion__item <?php if(get_row_index() === 1) echo 'active' ?> <?php echo $colors[$k] ?>">
          <h1 class="accordion__heading"
            style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'dark-bg') echo 'color: #ffffff'?>">
            <?php echo $headline ?></h1>
          <div class="accordion__body">
            <!-- <h3 class="accordion__headline"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'dark-bg') echo 'color: #ffffff'?>">
              <?php echo $headline ?></h3> -->
            <p class="accordion__copy"
              style="<?php if($colors[$k] == 'blue-bg' || $colors[$k] == 'dark-bg') echo 'color: #ffffff'?>">
              <?php echo $copy; ?>
            </p>
            <figure class="accordion__image">
              <img class="lazyload" src="<?php echo $image ?>" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">
            </figure>
          </div>
          <?php $k++ ?>
        </div>

        <?php
  endwhile; ?>
        <?php endif;
            ?>

      </div>
    </section>
  </section>