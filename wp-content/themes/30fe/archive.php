<?php 
get_header();
?>

<main class="main-container">
  <section class="insights whitesmoke-bg">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Insights Category Archives</p>
      </section>
      <h1 class="insights__headline"><?php single_cat_title() ?> </h1>
      <h6>Find all past and future publications and reports by our finest writers.</h6>
      <br>
      <p>Search and Filter goes here</p>


      <section class="insights__grid">

        <?php 
        while(have_posts()) {
        the_post();
        $subtitle = get_field ('subtitle'); ?>

        <article class="insights__card">
          <figure>
            <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
              alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
              width="100%">
          </figure>
          <article class="insights__card__label">
            <?php require get_theme_file_path('/includes/blog-colors.php');?>
            <aside class="insights__card__label__category <?php echo $label_color; ?>">
              <p class="insights__card__label__category__text">
                <?php echo get_the_category_list(', '); ?>
              </p>
            </aside>
            <p class="insights__card__label__read"><?php echo display_read_time(); ?></p>
          </article>
          <h6 class="insights__card__title">
            <?php the_title() ?>
          </h6>
          <p class="insights__card__copy">
            <?php echo $subtitle ?>
          </p>
          <p class="insights__card__more"><a href="<?php the_permalink() ?>">Read more <img
                src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg" /></a></p>
        </article>
        <?php } ?>
      </section>
      <section class="paginate"> <?php echo paginate_links();?></section>
    </section>
  </section>
</main>


<?php 
get_footer();
?>