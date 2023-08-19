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
      $img = get_field('headshot', $team_member);
      $image = $img['url'];
      $bio = get_field('bio');
    ?>
  <section class="member">
    <section class="max-width max-padding">
      <section class="member__card">
        <section class="fadein">
          <?php 
        
        $images = get_field('images');
        foreach($images as $item):?>

          <img class="member__image" src="<?php echo $item['url']; ?>" alt="<?php echo $name; ?>"
            title="<?php echo $name; ?>" width="100%">
          <?php endforeach; ?>
        </section>


        <article class="member__person">
          <h2 class="member__headline"><?php echo $name ?></h2>
          <article class="member__details">
            <p><?php echo $qualifications ?></p>
            <p><?php echo $title ?></p>
            <p><?php echo $location ?></p>
            <p><?php echo $phone ?></p>
            <a href="mailto:<?php echo $email ;?>"><?php echo $email ?></a>
            <?php if($cv) : ?>
            <a href="<?php echo $cv ?>"><button class="member__details__button">Download CV</button></a>
            <?php endif ?>

          </article>
          <article class="member__details member__details__bio">
            <p><?php echo $bio ?></p>
          </article>

          <?php 
          if( have_rows('specialized_competencies') ): ?>
          <h6 class="member__competencies">Specialised Competencies</h6>
          <hr class="member__line">
          <section class="member__pillbox">
            <?php
          while( have_rows('specialized_competencies') ) : the_row();
            $competency = get_sub_field('competency'); ?>
            <p class="pill member__pill"><?php echo $competency ?></p>
            <?php
            endwhile; ?>
          </section>
          <?php endif;
        ?>




        </article>
      </section>
    </section>
  </section>

  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>


</main>

<?php get_footer(); ?>