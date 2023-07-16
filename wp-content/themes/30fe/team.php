<?php /* Template Name: Team */ ?>

<?php 
get_header();
?>

<main class="main-container">
  <section class="team">
    <section class="pill">
      <p class="pill__label">Our Team</p>
    </section>
    <h1 class="team__headline">Meet the people behind 30</h1>
    <h6>Worlds of experience, working together. Our engineers, scientists, technical experts and
      support personnel work as teams across their many disciplines to provide a depth of expertise and services to our
      clients. Individually, they possess highly specialized knowledge and skills, and together, we work collaboratively
      to help ensure our clients benefit from a complete investigative approach, while following efficient management
      procedures for each file.</h6>
    <br>
    <p>Search and Filter goes here</p>



    <section class="team__grid">

      <?php 
        $team_members = get_field ( 'team_member' ); 
        foreach ($team_members as $team_member):     
        $name = get_the_title($team_member);
        $title = get_field('title', $team_member);
        $img = get_field('headshot', $team_member);
        $image = $img['url'];
      ?>

      <article class="team__card">
        <a href="<?php the_permalink($team_member) ?>">
          <figure class="team__card__image">
            <img class="lazyload" src="<?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
          </figure>
        </a>
        <h6 class="team__card__name">
          <?php echo $name ?>
        </h6>
        <p class="team__card__title">
          <?php echo $title ?>
        </p>
      </article>
      <?php endforeach; ?>
    </section>


  </section>

</main>


<?php 
get_footer();
?>