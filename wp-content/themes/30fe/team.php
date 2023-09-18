<?php /* Template Name: Team */ ?>

<?php 
get_header();
?>


<main class="main-container">
  <section class="team fullscreen">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Our Team</p>
      </section>
      <h2 class="team__headline">Meet the people behind 30</h2>
      <p class="team__copy">Worlds of experience, working together. Our engineers, scientists, technical experts and
        support personnel work as teams across their many disciplines to provide a depth of expertise and services to
        our
        clients. Individually, they possess highly specialized knowledge and skills, and together, we work
        collaboratively
        to help ensure our clients benefit from a complete investigative approach, while following efficient management
        procedures for each file.</p>
      <br>
      <section class="team__search">



        <div class="team__filter-dropdown">
          <div class="team__select">
            <span class="team__selected team__selected-expertise">Filter By Expertise</span>
            <div class="team__caret"></div>
          </div>
          <ul id="team__expertise" class="team__menu team__expertise">
            <li value="all">All Expertise</li>
            <?php 
          $expertise = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'expertise'
          ));
          while ($expertise->have_posts()): $expertise->the_post();
         ?>
            <li value="<?php the_title() ?>"><?php the_title() ?></li>
            <?php endwhile ?>
            <?php wp_reset_postdata() ?>
          </ul>
        </div>
        <input type="text" id="teamFilter" class="team__select" placeholder="Search">
      </section>


      <section id="leadership">
        <h3 class="team__roles">Leadership Team</h3>
        <section id="team" class="team__grid">
          <?php 
          $team_members = get_field ( 'team_member' ); 
          foreach ($team_members as $team_member):     
          $name = get_the_title($team_member);
          $title = get_field('title', $team_member);

        ?>
          <article class="team__card">
            <a href="<?php the_permalink($team_member) ?>">
              <img class="lazyload team__card__image" src="<?php echo get_the_post_thumbnail_url($team_member); ?>"
                alt="<?php echo $name; ?>" title="<?php echo $name; ?>">

            </a>
            <h4 class="team__card__name">
              <?php echo $name ?>
            </h4>
            <p class="team__card__title">
              <?php echo $title ?>
            </p>
            <p class="team__card__expertise" style="display: none">
              <?php $expertise = get_field('expertise', $team_member);
            foreach ($expertise as $item):?>
              <?php echo get_the_title($item);  ?>
              <?php endforeach; ?></p>
          </article>
          <?php endforeach; ?>
        </section>
      </section>

      <section id="experts">
        <h3 class="team__roles">Experts</h3>
        <section id="team" class="team__grid">
          <?php 
          $experts = get_field ( 'experts' ); 
          foreach ($experts as $expert):     
          $name = get_the_title($expert);
          $title = get_field('title', $expert);

        ?>
          <article class="team__card">
            <a href="<?php the_permalink($expert) ?>">
              <img class="lazyload team__card__image" src="<?php echo get_the_post_thumbnail_url($expert); ?>"
                alt="<?php echo $name; ?>" title="<?php echo $name; ?>">

            </a>
            <h4 class="team__card__name">
              <?php echo $name ?>
            </h4>
            <p class="team__card__title">
              <?php echo $title ?>
            </p>
            <p class="team__card__expertise" style="display: none">
              <?php $expertise = get_field('expertise', $expert);
            foreach ($expertise as $item):?>
              <?php echo get_the_title($item);  ?>
              <?php endforeach; ?></p>


          </article>
          <?php endforeach; ?>
        </section>
      </section>

      <section id="support">
        <h3 class="team__roles">Shared Services Team</h3>
        <section id="team" class="team__grid">
          <?php 
          $shared_services = get_field ( 'shared_services' ); 
          foreach ($shared_services as $item):     
          $name = get_the_title($item);
          $title = get_field('title', $item);

        ?>
          <article class="team__card">
            <a href="<?php the_permalink($item) ?>">
              <img class="lazyload team__card__image" src="<?php echo get_the_post_thumbnail_url($item); ?>"
                alt="<?php echo $name; ?>" title="<?php echo $name; ?>">

            </a>
            <h4 class="team__card__name">
              <?php echo $name ?>
            </h4>
            <p class="team__card__title">
              <?php echo $title ?>
            </p>
            <p class="team__card__expertise" style="display: none">
              <?php $expertise = get_field('expertise', $item);
            foreach ($expertise as $item):?>
              <?php echo get_the_title($item);  ?>
              <?php endforeach; ?></p>


          </article>
          <?php endforeach; ?>
        </section>
      </section>


    </section>
  </section>
  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>


</main>
<?php 
get_footer();
?>