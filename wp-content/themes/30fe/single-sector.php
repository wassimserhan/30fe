<?php  

/*
Template Name: Expertise
Template Post Type: post, industry
*/

get_header();
?>
<main class="main-container">
  <section class="industry">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Sectors</p>
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
      <article class="industry__categories dark-bg">
        <!-- display industry categories -->
        <?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>


        <section class="industry__category <?php if( get_row_index()== 2) echo "industry__category-bullets-border" ?>">
          <section class="max-width">
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
        </section>


        <?php
            endwhile; ?>
        <?php endif;
            ?>
      </article>
    </section>

  </section>



  <!-- Expert Form -->
  <section class="information">
    <section class="information__wrapper">
      <?php 
                $team = get_field('expert');
                foreach ($team_members as $team_member): 
                $name = get_the_title($team_member);
                $title = get_field('title', $team_member);
                $phone = get_field('phone', $team_member);
                $email = get_field('email', $team_member);
                $img =   get_field('headshot', $team_member);
                $image = $img['url'];
                ?>

      <?php include get_template_directory() . '/modules/team-card.php';?>
      <?php endforeach ?>

      <section class="information__form">
        <h3 class="information__headline">For more information</h3>
        <p class="information__form__copy">Fill up this form and someone from our team will be in touch with you
          shortly.</p>
        <p class="information__form__required">*REQUIRED</p>
        <!-- form inserted here -->
        <!-- <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?> -->
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
        <!-- form inserted here -->
      </section>


    </section>
  </section>

  <?php include get_template_directory() . '/modules/home-contact.php'; ?>


</main>
<?php 
get_footer();
?>