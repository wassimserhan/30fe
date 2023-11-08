<?php get_header(); ?>
<main class="main-container">
  <?php 
      $name = get_the_title();
      $qualifications = get_field('qualifications');
      $title = get_field('title');
      $location = get_field('location');
      $phone = get_field('phone');
      $email = get_field('email');
      $cv = get_field('cv');
      $bio = get_field('bio');
    ?>
  <section class="member fullscreen">
    <section class="max-width max-padding">
      <section class="member__card">

        <section class="member__card__wrapper">
          <section id="slider4" class="splide splide-team" aria-labelledby="carousel-heading">
            <div class="splide__track">
              <ul class="splide__list">
                <?php 
              $images = get_field('images');
              foreach($images as $item):?>
                <li class="splide__slide splide__slide__team">
                  <img src="<?php echo $item; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" width="100%">
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </section>


        </section>





        <article class="member__person">
          <article class="member__details">
            <p><?php echo $qualifications ?></p>
            <p><?php echo $title ?></p>
            <p><?php echo $location ?></p>
            <p><?php echo $phone ?></p>
            <p><a href="mailto:<?php echo $email ;?>"><?php echo $email ?></a></p>


          </article>
          <h2 class="member__headline"><?php echo $name ?></h2>



        </article>
      </section>

      <section>
        <hr class="member__line">
        <article class="member__details__bio">
          <p><?php echo $bio ?></p>
          <?php if($cv) : ?>
          <a href="<?php echo $cv ?>" target="_blank"><button class="member__details__button">Download CV</button></a>
          <?php endif ?>
        </article>
        <hr class="member__line">

        <section class="member__card__competencies">


          <?php 
              $terms = get_field('competencies');
              if( $terms ): ?>


          <?php foreach( $terms as $term ): ?>

          <section class="pill">
            <p class="pill__label"><?php echo $term->name; ?></p>
          </section>
          <?php endforeach; ?>
          <?php endif; ?>

        </section>

      </section>
    </section>
  </section>

  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>


</main>

<?php get_footer(); ?>