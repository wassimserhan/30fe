<?php /* Template Name: Team */ ?>

<?php 
get_header();
?>


<main class="main-container">
  <section class="team whitesmoke-bg">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Our Team</p>
      </section>
      <h1 class="team__headline">Meet the people behind 30</h1>
      <p class="team__copy">Worlds of experience, working together. Our engineers, scientists, technical experts and
        support personnel work as teams across their many disciplines to provide a depth of expertise and services to
        our
        clients. Individually, they possess highly specialized knowledge and skills, and together, we work
        collaboratively
        to help ensure our clients benefit from a complete investigative approach, while following efficient management
        procedures for each file.</p>
      <br>
      <section class="team__search">
        <section class="team__dropdown">
          <select id="team__role" class=" team__expertise">
            <option value="all">All Roles</option>
            <option value="Associates">Associates</option>
            <option value="Leadership Team">Leadership Team</option>
            <option value="Support Team">Support Team</option>
          </select>
        </section>
        <section class="team__dropdown">
          <select id="team__expertise" class="team__expertise">
            <option value="all">All Expertise</option>
            <?php 
          $expertise = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'expertise'
          ));
          while ($expertise->have_posts()): $expertise->the_post();
         ?>
            <option value="<?php the_title() ?>"><?php the_title() ?></option>
            <?php endwhile ?>
            <?php wp_reset_postdata() ?>
          </select>
        </section>
        <input type="text" id="myFilter" class="form-control" placeholder="Search">
      </section>



      <section id="team" class="team__grid">
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
            <?php
          if( have_rows('headshots', $team_member) ): 
          while( have_rows('headshots', $team_member) ) : the_row();
            $headshotImg = get_sub_field('headshot', $team_member);
            $headshot = $headshotImg['url'];
            ?>
            <figure class="team__card__image">
              <img class="lazyload" src="<?php echo $headshot ?>" alt="<?php echo $name; ?>"
                title="<?php echo $name; ?>">
            </figure>

            <?php
          break;
            endwhile; ?>
            <?php endif;
            ?>
          </a>
          <h6 class="team__card__name">
            <?php echo $name ?>
          </h6>
          <p class="team__card__title">
            <?php echo $title ?>
          </p>


          <p class="team__card__expertise" style="display: none">
            <?php $expertise = get_field('expertise', $team_member);
        foreach ($expertise as $item):?>
            <?php echo get_the_title($item);  ?>
            <?php endforeach; ?></p>

          <?php 
        $role = get_field("role", $team_member)
        ?>
          <p class="team__card__role" style="display: none"><?php echo $role;  ?></p>

        </article>
        <?php endforeach; ?>
      </section>

    </section>
  </section>

</main>




<?php 
get_footer();
?>