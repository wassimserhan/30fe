<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">


  <!-- Hero -->

  <section class="about__hero dark-bg">
    <section class="max-width max-padding">
      <h1 class="about__hero__headline">We are 30</h1>
      <h2 class="about__hero__copy">We are over <span class="orange">60 experts</span> in <span class="green">14
          practice
          areas</span>, we offer
        evidence-based solutions to
        <span class="blue">clients worldwide</span>.
      </h2>
    </section>
  </section>

  <!-- Intro -->
  <section class="about__intro whitesmoke-bg">
    <section class="max-width max-padding">
      <h4 class="about__intro__copy">Our strengths are our diversity and our experience. With access to an in-house
        multidisciplinary team, each of
        our practices can explore every possible cause of an incident from a technical and scientific perspective while
        considering the relevant governing regulations, common practices, and legal precedents. Our experts are
        court-qualified, having provided expert evidence across Canada in support of trials, mediations, arbitrations,
        and
        depositions.</h4>
      <section class="about__intro__buttons">
        <button class="about__intro__button">Browse Experts</button>
        <!-- <button class="about__intro__button about__intro__button-transparent">Learn More</button> -->
      </section>

    </section>
  </section>

  <!-- 360 Investigations -->
  <section class="about__investigations whitesmoke-bg">
    <section class="max-width max-padding">
      <section class="about__investigations__wrapper">
        <article>
          <section class="pill">
            <p class="pill__label">360&deg; Services</p>
          </section>
          <?php 
          $k=0;
          $headline = get_field('headline');
          $copy = get_field('copy');
          ?>
          <h2 class="about__investigations__headline"><?php echo $headline; ?></h2>
          <p class="about__investigations__copy"><?php echo $copy; ?></p>
        </article>
        <ul class="about__investigations__bullets">
          <?php 
          if( have_rows('services') ): 
          while( have_rows('services') ) : the_row();
          $bullet_headline = get_sub_field('headline');
          $bullet_copy = get_sub_field('copy');
          $colors = [ 'taupe', 'blue','green', 'orange' ];
          ?>
          <li class="about__investigations__bullet about__investigations__bullet--<?php echo $colors[$k]; ?>">
            <h3><?php echo $bullet_headline; ?></h3>
            <p><?php echo $bullet_copy; ?></p>
          </li>
          <?php $k++ ?>
          <?php
          endwhile; ?>
          <?php endif;
            ?>
        </ul>
      </section>
    </section>

    <!-- Mission -->
    <section class="about__mission taupe-bg">
      <section class="max-width max-padding">
        <section class="pill about__mission__pill">
          <p class="pill__label">mission</p>
        </section>
        <h2 class="about__mission__headline">Precision in investigation, clarity in solutions. </h2>
        <p class="about__mission__copy">By applying science to evidence, our forensic experts uncover the truth behind
          each case. Our mission is to facilitate clear and unbiased understanding of the facts, allowing our clients to
          make decisions with confidence.</p>
      </section>
    </section>



    <?php include get_template_directory() . '/modules/timeline.php'; ?>



    <!-- Timeline 2 -->
    <section class="about__timeline">
      <h3 class="about__timeline__headline">Our Story</h3>

      <hr>
      <section id="slider3" class="splide splide-timeline" aria-labelledby="carousel-heading">

        <div class="splide__track">
          <ul class="splide__list">

            <li class="splide__slide">
              <section class="about__timeline__year">
                <h4 class="">2018</h4>
              </section>
              <section class="about__timeline__copy">
                <h4 class="">Lorem ipsum dolor sit amet.</h4>
              </section>
            </li>
            <li class="splide__slide">
              <section class="about__timeline__year">
                <h4 class="">2019</h4>
              </section>
              <section class="about__timeline__copy">
                <h4 class="">Lorem ipsum dolor sit amet.</h4>
              </section>
            </li>

          </ul>
        </div>
      </section>
    </section>


    <!-- Hero-->
    <section class="about__thirty whitesmoke-bg">
      <section class="">
        <section class="about__whatis__card">
          <figure class="about__whatis__image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/hero-image.jpg" alt=""
              title="lock">
          </figure>
          <article class="about__whatis__detail about__whatis__detail--left" style="">
            <h1 class="about__whatis__headline">What is 30?</h1>
            <p class="about__whatis__copy">From its inception, our firm has built a reputation for reporting facts
              intelligently,
              accurately, thoroughly, and without bias. Yes, we’re forensic investigators, but in a way, we’re really
              reporters. And that got us thinking. Years ago, when newspaper reporters submitted final copy to be
              published, they would type “-30-” at the bottom centre of the page. This would signify to the typesetter
              that it was the end of the piece, that the facts were all there—the whole story. We couldn’t think of a
              better way to describe who we are, and what we do.
            </p>
          </article>
        </section>
      </section>
    </section>

    <!-- Hiring -->
    <?php include get_template_directory() . '/modules/hiring.php'; ?>



</main>

<?php 
get_footer();
?>