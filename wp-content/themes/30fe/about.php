<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">


  <!-- Hero -->

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
        <button class="about__intro__button">Work with Us</button>
        <button class="about__intro__button about__intro__button-transparent">Learn More</button>
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
        <p class="about__mission__copy">Fugiat eiusmod dolore enim officia nulla nulla esse labore fugiat amet tempor
          minim
          magna proident consequat. Duis labore labore nostrud laboris duis do commodo sunt. Aliquip velit do aliqua
          cupidatat aliquip irure id est. Est dolor sint excepteur irure Lorem est fugiat consequat.</p>


      </section>
    </section>


</main>

<?php 
get_footer();
?>