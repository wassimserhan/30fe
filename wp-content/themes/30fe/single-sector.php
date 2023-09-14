<?php  

/*
Template Name: Expertise
Template Post Type: post, industry
*/

get_header();
?>
<main class="main-container">
  <section class="industry fullscreen">
    <section class="max-width max-padding">
      <a href="<?php echo site_url('/sectors')?>">
        <section class="pill">
          <p class="pill__label">Sectors</p>
        </section>
      </a>
      <section class="industry__intro">
        <h2 class="industry__title industry__title"><?php the_title() ?></h2>
        <p class="industry__copy industry__copy"><?php echo get_field('intro') ;?></p>
      </section>
    </section>
    <figure class="industry__figure">
      <img class="industry__figure--desktop" loading="lazy" src="<?php echo get_the_post_thumbnail_url() ?>"
        alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">

      <img class="industry__figure--mobile" loading="lazy" src="<?php echo get_field('featured_image_mobile')['url'] ?>"
        alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
    </figure>


    <article class="industry__categories">
      <!-- display industry categories -->
      <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>


      <section class="industry__category industry__category-bullets-border">

        <section class="industry__category-items">
          <p class="industry__category-item <?php echo get_field('category_color')?>">
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
                src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field('category_color')?>-arrow.svg"
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



  <!-- Expert Form -->
  <section class="sector-form fullscreen">
    <section class="sector-form__wrapper max-width max-padding">
      <section class="sector-form__form">
        <h3 class="sector-form__headline">For more Information</h3>
        <p class="sector-form__form__copy">Fill up this form and someone from our team will be in touch with you
          shortly.</p>
        <p class="sector-form__form__required">*REQUIRED</p>
        <!-- form inserted here -->
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
      </section>
      <?php 
                  $team_members = get_field ( 'expert' ); 
                  foreach ($team_members as $item):   
                    $k;  
                    $name = get_the_title($item);
                    $title = get_field('title', $item);
                    $phone = get_field('phone', $item);
                    $email = get_field('email', $item); ?>

      <?php include get_template_directory() . '/modules/team-card.php'; ?>

      <?php endforeach; ?>
      <?php wp_reset_postdata() ?>


    </section>
  </section>

  <?php include get_template_directory() . '/modules/email.php'; ?>


</main>
<?php 
get_footer();
?>