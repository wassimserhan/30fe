<section id="splide-timeline" class="splide" aria-labelledby="carousel-heading">
  <hr class="timeline__line">
  <section class="timeline__card timeline__card-box">
    <div class="timeline__card__name">

    </div>
  </section>
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            &nbsp;
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2002
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2003
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2005
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2010
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2020
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            2023
          </div>
        </section>
      </li>
      <li class="splide__slide">
        <section class="timeline__card">
          <div class="timeline__card__name">
            &nbsp;
          </div>
        </section>
      </li>
    </ul>
  </div>
</section>


<section class="timeline__wrapper">
  <section class="timeline__form">
    <h3 class="timeline__headline">For more information</h3>
    <p class="timeline__form__copy">Fill up this form and someone from our team will be in touch with you
      shortly.</p>
    <p class="timeline__form__required">*REQUIRED</p>
    <!-- form inserted here -->
    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
    <!-- form inserted here -->
  </section>
  <section class="splide timeline__splide" aria-labelledby="carousel-heading">


    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <section class="timeline__card">

            <figure class="timeline__card__image">
              <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
            </figure>

            <section class="pill">
              <p class="pill__label">Practice Leads</p>
            </section>
            <div class="timeline__card__name">
              Jeff Reitsman
            </div>
            <div class="timeline__card__title">
              Vice President and Practice lead, Remediation
            </div>
            <div class="timeline__card__email">
              e: jreitsma@30fe.com
            </div>


          </section>
        </li>
        <li class="splide__slide">
          <section class="timeline__card">

            <figure class="timeline__card__image">
              <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
            </figure>

            <section class="pill">
              <p class="pill__label">Practice Leads</p>
            </section>
            <div class="timeline__card__name">
              Jeff Reitsman
            </div>
            <div class="timeline__card__title">
              Vice President and Practice lead, Remediation
            </div>
            <div class="timeline__card__email">
              e: jreitsma@30fe.com
            </div>


          </section>
        </li>
        <li class="splide__slide">
          <section class="timeline__card">

            <figure class="timeline__card__image">
              <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" src="
                <?php echo $image ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
            </figure>
            <section class="pill">
              <p class="pill__label">Practice Leads</p>
            </section>
            <div class="timeline__card__name">
              Test Reitsman
            </div>
            <div class="timeline__card__title">
              Vice President and Practice lead, Remediation
            </div>
            <div class="timeline__card__email">
              e: jreitsma@30fe.com
            </div>
          </section>
        </li>
      </ul>
    </div>
  </section>


</section>