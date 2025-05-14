<?php 
   global $wp;
   $url = home_url( $wp->request );

   if (!isset($card_index)) $card_index = -1;
?>


<section class="team-card <?php if(strpos($url,'expertise')) echo 'team-card--slide'; ?>">
    <a href="<?php the_permalink($item); ?>">
        <img class="lazyload team-card__image" src="<?php echo get_the_post_thumbnail_url($item); ?>" src="
        <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
    </a>

    <?php 
if (
    $card_index === 0 &&
    strpos($url, 'expertise') !== false &&
    strpos($url, 'digital-media-analysis') === false
): ?>
    <section class="pill team-card__pill">
        <p class="pill__label">Practice Lead</p>
    </section>
    <?php endif; ?>

    <div class="team-card__name">
        <?php echo $name ;?>
    </div>
    <div class="team-card__title">
        <?php echo $title ;?>
    </div>
    <div class="team-card__email">
        e: <a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>
    </div>
</section>