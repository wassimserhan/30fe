<?php /* Template Name: Careers */ ?>


<?php 
get_header();
?>

<main class="main-container">

  <!-- Hero -->
  <section class="careers__hero black-bg fullscreen">
    <section class="max-width max-padding">
      <section class="careers__hero__block">
        <h1 class="careers__hero__headline">Careers</h1>
        <section class="careers__hero__box careers__hero__box--orange orange-bg"></section>
        <section class="careers__hero__box careers__hero__box--taupe taupe-bg"></section>
        <section class="careers__hero__box careers__hero__box--blue blue-bg"></section>
        <section class="careers__hero__box careers__hero__box--green green-bg"></section>
        <?php
        if( have_rows('banner_images') ):
        while( have_rows('banner_images') ) : the_row(); 
          $gif_1 = get_sub_field('gif_1')['url'];
          $gif_2 = get_sub_field('gif_2')['url'];
              $gif_3 = get_sub_field('gif_3')['url'];
              $gif_4 = get_sub_field('gif_4')['url'];
        ?>
        <img class="careers__hero__images careers__hero__images--one" src="<?php echo $gif_1 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--two" src="<?php echo $gif_2 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--three" src="<?php echo $gif_3 ?>" alt="careers">
        <img class="careers__hero__images careers__hero__images--four" src="<?php echo $gif_4 ?>" alt="careers">
        <?php endwhile; endif; ?>

      </section>


    </section>
  </section>


  <!-- Vision -->
  <?php
if( have_rows('vision') ):
while( have_rows('vision') ) : the_row(); 
?>
  <section class="careers__vision orange-bg fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline"><?php echo get_sub_field('vision_headline') ;?></h2>
      <p class="careers__copy"><?php echo get_sub_field('vision_copy') ;?></p>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Values -->
  <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
  <section class="careers__vision blue-bg fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline careers__headline--white"><?php echo get_sub_field('values_headline') ;?></h2>
      <ul class="careers__list">
        <?php 
          if( have_rows('values_items') ): 
          while( have_rows('values_items') ) : the_row();
          $value_item = get_sub_field('value_item');
          ?>
        <li>
          <p style="color: #f2f1ed"><?php echo $value_item; ?></p>
        </li>
        <?php
          endwhile; ?>
        <?php endif;
            ?>
      </ul>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Culture -->
  <?php
if( have_rows('culture') ):
while( have_rows('culture') ) : the_row(); 
?>
  <section class="careers__vision green-bg fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline"><?php echo get_sub_field('culture_headline') ;?></h2>
      <p class="careers__copy"><?php echo get_sub_field('culture_copy') ;?></p>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Benefits -->
  <?php
if( have_rows('benefits') ):
while( have_rows('benefits') ) : the_row(); 
?>
  <section class="careers__vision taupe-bg fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline"><?php echo get_sub_field('benefits_headline') ;?></h2>
      <ul class="careers__list careers__list--black">
        <?php 
          if( have_rows('benefits_items') ): 
          while( have_rows('benefits_items') ) : the_row();
          $benefits_item = get_sub_field('benefits_item');
          ?>
        <li>
          <p style="color: #1d1c1d"><?php echo $benefits_item; ?></p>
        </li>
        <?php
          endwhile; ?>
        <?php endif;
            ?>
      </ul>
    </section>
  </section>
  <?php endwhile; endif; ?>

  <!-- Positions -->
  <?php
if( have_rows('positions') ):
while( have_rows('positions') ) : the_row(); 
?>
  <section class="careers__vision black-bg fullscreen">
    <section class="max-width max-padding">
      <h2 class="careers__headline careers__headline--white"><?php echo get_sub_field('positions_headline') ;?></h2>



      <?php 
          $job_openings = get_field ( 'job_openings' ); 
          foreach ($job_openings as $item):     
          $title = get_the_title($item);
          $location = get_field('location', $item);
          $type = get_field('type', $item);
          $description = get_field('description', $item);
          $cta = get_field('cta', $item);
        ?>


      <article class="accordion-careers">
        <div class="accordion-careers__wrapper">
          <p class="accordion-careers__intro">
            <?php echo $title;?>
          </p>
          <p class="accordion-careers__intro">
            <?php echo $location;?>
          </p>
          <p class="accordion-careers__intro accordion-careers__intro--hide">
            <?php echo $type;?>
          </p>
          <!-- <img class="arrow-down" src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg"
            alt="arrow-down"> -->
          <!-- <div class="arrow"></div> -->
        </div>
        <section class="accordion-careers__content">
          <p><?php echo $description;?></p>
          <!-- CTA -->
          <?php if ($cta) {
             $link_target = $cta['target'] ? $cta['target'] : '_self';?>
          <button class="accordion-careers__button">
            <a href="<?php echo $cta['url'] ?>" target="<?php echo $link_target; ?>"><?php echo $cta['title'] ?></a>
          </button>
          <?php } ;?>

          <!-- CTA -->
        </section>
      </article>

      <?php endforeach; ?></p>
    </section>
  </section>
  <?php endwhile; endif; ?>
</main>

<?php 
get_footer();
?>