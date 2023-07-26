<section class="expertise-form">
  <section class="expertise-form__wrapper">
    <section class="expertise-form__form">
      <h3 class="expertise-form__headline">For more information</h3>
      <p class="expertise-form__form__copy">Fill up this form and someone from our team will be in touch with you
        shortly.</p>
      <p class="expertise-form__form__required">*REQUIRED</p>
      <!-- form inserted here -->
      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
      <!-- form inserted here -->
    </section>
    <section id="splide" class="splide" aria-labelledby="carousel-heading">
      <h3 class="expertise-form__headline expertise-form__headline-splide">Meet the Materials and Product Failure Team
      </h3>
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <section class="expertise-form__card">
              <figure class="expertise-form__card__image">
                <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                  <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
              </figure>

              <section class="pill">
                <p class="pill__label">Practice Leads</p>
              </section>
              <div class="expertise-form__card__name">
                Jeff Reitsman
              </div>
              <div class="expertise-form__card__title">
                Vice President and Practice lead, Remediation
              </div>
              <div class="expertise-form__card__email">
                e: jreitsma@30fe.com
              </div>


            </section>
          </li>
          <li class="splide__slide">
            <section class="expertise-form__card">

              <figure class="expertise-form__card__image">
                <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                  <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
              </figure>

              <section class="pill">
                <p class="pill__label">Practice Leads</p>
              </section>
              <div class="expertise-form__card__name">
                Ryan Bridge
              </div>
              <div class="expertise-form__card__title">
                Vice President and Practice lead, Remediation
              </div>
              <div class="expertise-form__card__email">
                e: jreitsma@30fe.com
              </div>


            </section>
          </li>
          <li class="splide__slide">
            <section class="expertise-form__card">

              <figure class="expertise-form__card__image">
                <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                  <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
              </figure>

              <section class="pill">
                <p class="pill__label">Practice Leads</p>
              </section>
              <div class="expertise-form__card__name">
                Sophie Hunter
              </div>
              <div class="expertise-form__card__title">
                Vice President and Practice lead, Remediation
              </div>
              <div class="expertise-form__card__email">
                e: jreitsma@30fe.com
              </div>


            </section>
          </li>
        </ul>
      </div>
    </section>

  </section>
</section>