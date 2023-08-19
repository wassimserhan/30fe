  <section class="team-card">

    <img class="lazyload team-card__image" src="<?php echo get_the_post_thumbnail_url($team_member); ?>" src="
        <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">

    <section class="pill team-card__pill">
      <p class="pill__label">Practice Leads</p>
    </section>
    <div class="team-card__name">
      <?php echo $name ;?>
    </div>
    <div class="team-card__title">
      <?php echo $title ;?>
    </div>
    <div class="team-card__email">
      e: <?php echo $email ;?>
    </div>
  </section>