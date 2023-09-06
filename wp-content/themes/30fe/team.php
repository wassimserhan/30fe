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
            <span class="team__selected team__selected-role">Filter By Role</span>
            <div class="team__caret"></div>
          </div>
          <ul id="team__role" class="team__menu team__expertise">
            <li value="all">All Roles</li>
            <li value="Associates">Associates</li>
            <li value="Leadership Team">Leadership Team</li>
            <li value="Support Team">Support Team</li>
          </ul>
        </div>


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



      <section id="team" class="team__grid">
        <?php 
          $team_members = get_field ( 'team_member' ); 
          foreach ($team_members as $team_member):     
          $name = get_the_title($team_member);
          $title = get_field('title', $team_member);
        ?>
        <article class="team__card">
          <a href="<?php the_permalink($team_member) ?>">
            <figure class="team__card__image">
              <img class="lazyload " src="<?php echo get_the_post_thumbnail_url($team_member); ?>"
                alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
            </figure>
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

          <?php 
          $role = get_field("role", $team_member)
          ?>
          <p class="team__card__role" style="display: none"><?php echo $role;  ?></p>
        </article>
        <?php endforeach; ?>
      </section>
    </section>
  </section>
  <!-- Hiring -->
  <?php include get_template_directory() . '/modules/hiring.php'; ?>


</main>
<?php 
get_footer();
?>