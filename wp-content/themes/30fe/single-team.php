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

        <section id="slider4" class="splide splide-team" aria-labelledby="carousel-heading">

          <div class="splide__track">
            <ul class="splide__list">
              <?php 

               
        $images = get_field('images');
        foreach($images as $item):?>
              <li class="splide__slide">

                <img src="<?php echo $item; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" width="100%">

              </li>
              <?php endforeach ?>
            </ul>
          </div>
        </section>




        <!-- <section class="fadein"> -->



        <!-- </section> -->


        <article class="member__person">
          <h2 class="member__headline"><?php echo $name ?></h2>
          <article class="member__details">
            <p><?php echo $qualifications ?></p>
            <p><?php echo $title ?></p>
            <p><?php echo $location ?></p>
            <p><?php echo $phone ?></p>
            <p><a href="mailto:<?php echo $email ;?>"><?php echo $email ?></a></p>
            <?php if($cv) : ?>
            <a href="<?php echo $cv ?>"><button class="member__details__button">Download CV</button></a>
            <?php endif ?>

          </article>
          <article class="member__details member__details__bio">
            <p><?php echo $bio ?></p>
          </article>





          <?php 
$terms = get_field('competencies');
if( $terms ): ?>
          <h6 class="member__competencies">Specialized Expertise</h6>
          <hr class="member__line">
          <?php foreach( $terms as $term ): ?>

          <section class="pill">
            <p class="pill__label"><?php echo $term->name; ?></p>
            <?php endforeach; ?>
          </section>
          <?php endif; ?>
        </article>
      </section>
    </section>
  </section>

  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>


</main>

<?php get_footer(); ?>