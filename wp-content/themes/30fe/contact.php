<?php /* Template Name: Contact */ ?>

<?php 
get_header();
?>

<main class="main-container">
  <section class="contact">
    <section class="contact__hero full-height fullscreen">

      <section id="vancouver" class="contact__hero__maps">
        <div id="vancouver-pin" class="contact__image__pin"></div>
        <section class="contact__locations">
          <article class="contact__location">

            <h3 class="contact__location__city" style="color:#08cb80 ">Vancouver</h3>
            <a
              href="https://www.google.com/maps/place/555+Burrard+St,+Vancouver,+BC+V7X+1M8/@49.2863716,-123.1212611,17z/data=!3m1!4b1!4m5!3m4!1s0x548671822d969bd9:0x3899cbe47e0fa337!8m2!3d49.2863681!4d-123.1190724?shorturl=1">
              <p>555 Burrard Street <br>15th Floor, Suite 110<br>
                Vancouver, BC V7X 1M8<br>Office (604) 674-1100</p>
            </a>
          </article>
          <article class="contact__location">

            <h3 id="showCA" class="contact__location__city" style="color: #cbbea5">Calgary</h3>
            <a
              href="https://www.google.com/maps/place/700+2+St+SW,+Calgary,+AB+T2P+2W3/@51.0463194,-114.0695824,17z/data=!3m1!4b1!4m5!3m4!1s0x53716ffcfa05cc9b:0x521d670e6bbed796!8m2!3d51.046316!4d-114.0673937">
              <p>30 Forensic Engineering<br>c/o WeWorkFloor <br>19700 2nd Street SW<br>
                Calgary, AB T2P 2W2<br>Office (403) 208-4545</p>
            </a>
          </article>
          <article class="contact__location">
            <h3 class="contact__location__city" style="color:#ff6f48">Toronto</h3>
            <a
              href="https://www.google.com/maps/place/40+University+Ave+%23800,+Toronto,+ON+M5J,+Canada/@43.6460292,-79.3865919,17z/data=!3m1!4b1!4m5!3m4!1s0x882b34d3be43bda7:0x50f557a7fc8959ad!8m2!3d43.6460292!4d-79.3843979?shorturl=1">
              <p>40 University Avenue<br> Suite 902<br>
                Toronto, ON M5J 1T1<br>Office (416) 368-1700<br>Emergency Services Line<br> 1 (800)
                564-5313</p>
            </a>
          </article>
          <article class="contact__location">

            <h3 id="showOT" class="contact__location__city" style="color: #0175df">Ottawa</h3>
            <a
              href="https://www.google.com/maps/place/280+Albert+St,+Ottawa,+ON+K1P+5G8/@45.4192483,-75.7038062,17z/data=!3m1!4b1!4m5!3m4!1s0x4cce05532ae00d19:0xd5ce26367f8c0b5a!8m2!3d45.4192446!4d-75.7016175">
              <p>280 Albert Street, Suite 206<br>
                Ottawa, ON K1P 5G8<br>Office (613) 903-6900
              </p>
            </a>
          </article>




        </section>


      </section>

    </section>



    <section class="contact__information fullscreen">
      <section class="contact__form whitesmoke-bg max-padding">
        <h3>Submit an assignment</h3>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
      </section>
      <section class="contact__details taupe-bg  max-padding">
        <h3>More ways to reach us</h3>
        <ul class="contact__detail">
          <li> <img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Phone.svg"
              width="25" height="25" alt="Phone icon"> <a href="tel:1-800-564-5313">1 (800) 564-5313</a></li>
          <li><img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Email.svg"
              width="25" height="25" alt="Email icon"> <a href="mailto:info@30fe.com">info@30fe.com</a></li>
          <li><img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg"
              width="25" height="25" alt="Twitter icon"> <a href="https://twitter.com/30Forensics">@30Forensics</a></li>
          <li> <img class="contact__details__icon" src="<?php echo get_template_directory_uri(); ?>/images/LinkedIn.svg"
              width="25" height="25" alt="LinkedIn icon"> <a
              href="https://ca.linkedin.com/company/-30-forensic-engineering">-30- Forensic Engineering</a></li>
        </ul>
      </section>
    </section>
  </section>

</main>


<?php 
get_footer();
?>