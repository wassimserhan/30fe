<section class="information">
  <section class="information__wrapper">
    <section class="information__form">
      <h3 class="information__form__headline">For more information</h3>
      <p class="information__form__copy">Fill up this form and someone from our team will be in touch with you
        shortly.</p>
      <p class="information__form__required">*REQUIRED</p>
      <!-- form inserted here -->
      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
      <!-- form inserted here -->
    </section>
    <section class="information__card">

      <figure class="information__card__image">
        <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" alt=" #" title="#">
      </figure>

      <section class="pill">
        <p class="pill__label">Practice Leads</p>
      </section>
      <div class="information__card__name">
        Jeff Reitsman
      </div>
      <div class="information__card__title">
        Vice President and Practice lead, Remediation
      </div>
      <div class="information__card__email">
        e: jreitsma@30fe.com
      </div>


    </section>

  </section>
</section>