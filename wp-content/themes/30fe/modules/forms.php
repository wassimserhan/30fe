<section class="information">
  <section class="information__wrapper">
    <section class="information__form">
      <h3 class="information__form__headline">For more information</h3>
      <p class="information__form__copy">Fill up this form and someone from our team will be in touch with you
        shortly.</p>
      <p class="information__form__required">*REQUIRED</p>
      <form action="POST">
        <label for="firstName">First Name</label>
        <input id="firstName" type="text" name="firstName" value="" placeholder="First Name" />
        <label for="lastName">Last Name</label>
        <input id="lastName" type="text" name="lastName" value="" placeholder="Last Name" />
        <label for="email">Email</label>
        <input id="email" type="text" name="email" value="" placeholder="Email*" />
        <label for="phone">Telephone Number</label>
        <input id="phone" type="number" name="phone" value="" placeholder="Telephone Number*" />
        <label for="company">Company</label>
        <input id="company" type="text" name="company" value="" placeholder="Company*" />
        <label for="position">Position</label>
        <input id="position" type="text" name="position" value="" placeholder="Position" />

        <input id="submit" type="submit" name="cagnote-don-envoi" id="submit" class="information__form__submit"
          value="Submit" />
      </form>
    </section>

    <section class="information__card">

      <figure class="information__card__image">
        <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/people.png"" alt=" #" title="#">
      </figure>

      <section class="information__card__oval">
        <p class="information__card__oval__label">Practice Lead</p>
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