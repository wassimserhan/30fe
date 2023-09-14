<?php get_header(); ?>
<main class="main-container">
  <section class="error-404 fullscreen">
    <section class="max-width max-padding">
      <h2>404</h2>
      <h3>Uh oh! I'm afraid you've found a page that doesn't really exist. That can happen when
        you
        follow a link to
        something that has since been deleted. Or the link was incorrect to begin with. </h3>
      <a class="error-404__button" role="button" href="<?php echo get_home_url(); ?>/">To go back, please click HERE
      </a>
    </section>
  </section>
</main>
<?php get_footer(); ?>