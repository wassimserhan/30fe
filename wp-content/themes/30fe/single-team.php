<?php get_header(); ?>
<main class="main-container">
  <?php 
      $name = get_the_title();
      $title = get_field('title');
      $phone = get_field('phone');
      $email = get_field('email');
      $img = get_field('headshot', $team_member);
      $image = $img['url'];
      $bio = get_field('bio');
    ?>
  <section class="member">
    <section class="member__card">
      <figure>
        <img src="<?php echo $image ?>" alt="" <?php echo get_bloginfo( 'name' ); ?> logo"
          title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
      </figure>
      <article class="member__person">
        <h2 class=" member__headline"><?php echo $name ?></h2>
        <article class="member__details">
          <p><?php echo $title ?></p>
          <p>Direct: <?php echo $phone ?></p>
          <p><?php echo $email ?></p>
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
</main>

<?php get_footer(); ?>