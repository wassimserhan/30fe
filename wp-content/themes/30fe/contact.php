<?php /* Template Name: Contact */ ?>

<?php 
get_header();
?>

<main class="main-container">
  <section class="contact fullscreen">

    <section class="max-width max-padding max-padding--top">
      <section class="contact__hero">

        <!-- <section id="vancouver" class="contact__hero__maps">
            <div id="vancouver-pin" class="contact__image__pin"></div>
          </section> -->

        <div class="map-container">
          <!-- 
            <img src="<?php echo get_template_directory_uri(); ?>/images/maps/vancouver.svg" /> -->


          <picture id="vancouver" class="map-image">
            <source media="(max-width:820px)"
              srcset="<?php echo get_template_directory_uri(); ?>/images/maps/Vancouver_Mobile.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maps/Vancouver_Desktop.svg"
              alt="Map of Vancouver">
            <div id="vancouver-pin" class="contact__image__pin"></div>
          </picture>

          <picture id="calgary" class="map-image">
            <source media="(max-width:820px)"
              srcset="<?php echo get_template_directory_uri(); ?>/images/maps/Calgary_Mobile.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maps/Calgary_Desktop.svg" alt="Map of Calgary">
            <div id="calgary-pin" class="contact__image__pin"></div>
          </picture>

          <picture id="toronto" class="map-image">
            <source media="(max-width:820px)"
              srcset="<?php echo get_template_directory_uri(); ?>/images/maps/Toronto_Mobile.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maps/Toronto_Desktop.svg" alt="Map of Toronto">
            <div id="toronto-pin" class="contact__image__pin"></div>
          </picture>


          <picture id="ottawa" class="map-image">
            <source media="(max-width:820px)"
              srcset="<?php echo get_template_directory_uri(); ?>/images/maps/Ottawa_Mobile.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/maps/Ottawa_Desktop.svg" alt="Map of Ottawa">
            <div id="ottawa-pin" class="contact__image__pin"></div>
          </picture>

        </div>

        <section class="max-width">
          <section class="contact__locations">
            <article class="contact__location">

              <h3 class="contact__location__city vancouver vancouver-color">Vancouver</h3>
              <a href="https://www.google.com/maps/place/555+Burrard+St,+Vancouver,+BC+V7X+1M8/@49.2863716,-123.1212611,17z/data=!3m1!4b1!4m5!3m4!1s0x548671822d969bd9:0x3899cbe47e0fa337!8m2!3d49.2863681!4d-123.1190724?shorturl=1"
                target="_blank">
                <p>555 Burrard Street <br>15th Floor, Suite 110<br>
                  Vancouver<br> BC V7X 1M8<br>Office (604) 674-1100</p>
              </a>
            </article>
            <article class="contact__location">

              <h3 class="contact__location__city calgary">Calgary</h3>
              <a href="https://www.google.com/maps/place/700+2+St+SW,+Calgary,+AB+T2P+2W3/@51.0463194,-114.0695824,17z/data=!3m1!4b1!4m5!3m4!1s0x53716ffcfa05cc9b:0x521d670e6bbed796!8m2!3d51.046316!4d-114.0673937"
                target="_blank">
                <p>700 2nd Street SW<br>19th Floor<br>
                  Calgary<br> AB T2P 2W2<br>Office (403) 208-4545</p>
              </a>
            </article>
            <article class="contact__location">
              <h3 id="toronto-color" class="contact__location__city toronto">Toronto</h3>
              <a href="https://www.google.com/maps/place/40+University+Ave+%23800,+Toronto,+ON+M5J,+Canada/@43.6460292,-79.3865919,17z/data=!3m1!4b1!4m5!3m4!1s0x882b34d3be43bda7:0x50f557a7fc8959ad!8m2!3d43.6460292!4d-79.3843979?shorturl=1"
                target="_blank">
                <p>40 University Avenue<br> Suite 902<br>
                  Toronto <br> ON M5J 1T1<br>Office (416) 368-1700</p>
              </a>
            </article>
            <article class="contact__location">

              <h3 id="ottawa-color" class="contact__location__city ottawa">Ottawa</h3>
              <a href="https://www.google.com/maps/place/280+Albert+St,+Ottawa,+ON+K1P+5G8/@45.4192483,-75.7038062,17z/data=!3m1!4b1!4m5!3m4!1s0x4cce05532ae00d19:0xd5ce26367f8c0b5a!8m2!3d45.4192446!4d-75.7016175"
                target="_blank">
                <p>280 Albert Street<br> Suite 206<br>
                  Ottawa, ON K1P 5G8<br>Office (613) 903-6900
                </p>
              </a>
            </article>




          </section>
        </section>



      </section>
    </section>



    <section class="contact__information max-width">
      <section class="contact__form">
        <section class="max-padding">
          <h3 class="email__headline"><?php echo get_field('headline') ?></h3>

          <?php echo get_field('form_code') ; ?>

        </section>
      </section>
      <section class="contact__details max-padding">
        <h3>More ways to reach us</h3>
        <ul class="contact__detail">
          <li> <img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Phone.svg"
              width="25" height="25" alt="Phone icon"> <a href="tel:1-800-564-5313">1 (800) 564-5313</a></li>
          <li><img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Email.svg"
              width="25" height="25" alt="Email icon"> <a href="mailto:info@30fe.com">info@30fe.com</a></li>
          <li><img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg"
              width="25" height="25" alt="Twitter icon"> <a href="https://twitter.com/30Forensics">@30Forensics</a>
          </li>
          <li> <img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/LinkedIn.svg"
              width="25" height="25" alt="LinkedIn icon"> <a
              href="https://ca.linkedin.com/company/-30-forensic-engineering">-30- Forensic
              Engineering</a></li>
        </ul>

        <section class="contact__details__press">
          <h4>Press Inquiries</h4>
          <p>If you are a member of the press and would like to connect with our experts or learn more about our work,
            please contact:
            <br><br>
            Paul Aquino <br>
            Director, Marketing <br>
            <a href="mailto:paquino@30fe.com">paquino@30fe.com</a>
          </p>
        </section>
      </section>
    </section>
  </section>
</main>


<?php 
get_footer();
?>