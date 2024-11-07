  <section class="email fullscreen">
      <section class="max-width max-padding">
          <h2 class="email__headline"><?php echo get_field('title', get_option( 'page_on_front' )) ?></h2>
          <p class="email__copy"><?php echo get_field('subheading', get_option( 'page_on_front' )) ?></p>
          <section class="email__form">
              <?php echo get_field('form_code', get_option( 'page_on_front' )) ;?>
          </section>

      </section>
  </section>