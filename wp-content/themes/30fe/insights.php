<?php /* Template Name: Insights */ ?>

<?php 
get_header();






?>

<main class="main-container">
  <section class="insights">
    <section class="pill">
      <p class="pill__label">Insights</p>
    </section>
    <h1 class="insights__headline">30 Publication Archive</h1>
    <h6>Find all past and future publications and reports by our finest writers.</h6>
    <br>
    <p>Search and Filter goes here</p>


    <section class="insights__grid">
      <article class="insights__card">
        <figure class="insights__card__image">
          <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
            alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
        </figure>
        <article class="insights__card__label">
          <aside class="insights__card__label__category">
            <p class="insights__card__label__category__text"><?php echo get_the_category() ?></p>
          </aside>
          <p class="insights__card__label__read">5 min read</p>
        </article>
        <h6 class="insights__card__title">
          Blog title heading will go here
        </h6>
        <p class="insights__card__copy">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
        </p>
        <p class="insights__card__more">Read More &raquo;</p>
      </article>
      <article class="insights__card">
        <figure class="insights__card__image">
          <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
            alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
        </figure>
        <article class="insights__card__label">
          <aside class="insights__card__label__category">
            <p class="insights__card__label__category__text">Category</p>
          </aside>
          <p class="insights__card__label__read">5 min read</p>
        </article>
        <h6 class="insights__card__title">
          Blog title heading will go here
        </h6>
        <p class="insights__card__copy">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
        </p>
        <p class="insights__card__more">Read More &raquo;</p>
      </article>

      <article class="insights__card">
        <figure class="insights__card__image">
          <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
            alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>" width="100%">
        </figure>
        <article class="insights__card__label">
          <aside class="insights__card__label__category">
            <p class="insights__card__label__category__text">Category</p>
          </aside>
          <p class="insights__card__label__read">5 min read</p>
        </article>
        <h6 class="insights__card__title">
          Blog title heading will go here
        </h6>
        <p class="insights__card__copy">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
        </p>
        <p class="insights__card__more">Read More &raquo;</p>
      </article>
    </section>
  </section>

</main>


<?php 
get_footer();
?>