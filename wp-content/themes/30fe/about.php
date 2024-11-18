<?php /* Template Name: About */ ?>

<?php 
get_header();
?>


<main class="main-container">


    <!-- Hero -->

    <section class="about__hero fullscreen full-height about__hero__transparent">
        <section class="max-width max-padding about__hero__padding">

            <section class="about__hero__wrapper">
                <img class="about__hero__video" src="<?php echo get_template_directory_uri(); ?>/images/about.gif"
                    alt="About 30FE">
                <h1 class="about__hero__headline">We are 30</h1>
                <h3 class="about__hero__copy">With over <span class="orange">60 experts</span> in <span
                        class="green">14&nbsp;practice
                        areas</span>, we&nbsp;offer
                    evidence-based solutions to&nbsp;<span class="blue">clients worldwide</span>.
                </h3>

            </section>
        </section>
    </section>

    <!-- Mission -->

    <section class="about__mission fullscreen full-height">
        <?php
if( have_rows('mission') ):
while( have_rows('mission') ) : the_row(); 
?>
        <section class="max-width max-padding">
            <section class="pill about__mission__pill">
                <p class="pill__label">mission</p>
            </section>
            <h1 class="about__mission__headline"><?php echo get_sub_field('mission_headline'); ?> </h1>
            <h4 class="about__mission__copy"><?php echo get_sub_field('mission_copy'); ?> </h4>
        </section>
        <?php endwhile; endif; ?>
    </section>




    <!-- 360 Investigations -->


    <section class="about__investigations fullscreen full-height">
        <?php
if( have_rows('360_services') ):
while( have_rows('360_services') ) : the_row(); 
?>
        <section class="max-width max-padding">
            <section class="about__investigations__wrapper">
                <article>
                    <section class="pill">
                        <p class="pill__label">360&deg; Services</p>
                    </section>

                    <h3 class="about__investigations__headline"><?php echo get_sub_field('services_headline'); ?></h3>
                    <p class="about__investigations__copy"><?php echo get_sub_field('services_copy'); ?></p>
                </article>
                <ul class="about__investigations__bullets">
                    <?php 
           $k=0;
          if( have_rows('services') ): 
          while( have_rows('services') ) : the_row();
          $list_headline = get_sub_field('list_headline');
          $list_copy = get_sub_field('list_copy');
          $colors = [ 'taupe', 'blue','green', 'orange' ];
          ?>
                    <li class="about__investigations__bullet about__investigations__bullet--<?php echo $colors[$k]; ?>">
                        <h3><?php echo $list_headline; ?></h3>
                        <p><?php echo $list_copy; ?></p>
                    </li>
                    <?php $k++ ?>
                    <?php
          endwhile; ?>
                    <?php endif;
            ?>

                </ul>
            </section>
        </section>
        <?php endwhile; endif; ?>
    </section>



    <?php include get_template_directory() . '/modules/swiper-timeline.php'; ?>


    <!-- Hero-->

    <section class="about__thirty fullscreen">
        <?php
      if( have_rows('what_is_30') ):
      while( have_rows('what_is_30') ) : the_row(); 
      ?>
        <section class="max-width">
            <section class="about__whatis__card">
                <article class="about__whatis__detail about__whatis__detail--left" style="">
                    <h3 class="about__whatis__headline"><?php echo get_sub_field('what_headline'); ?></h3>
                    <p class="about__whatis__copy"><?php echo get_sub_field('what_copy'); ?>
                    </p>
                </article>
                <figure class="about__whatis__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif"
                        alt="what is 30?" title="lock">
                </figure>
            </section>
        </section>
        <?php endwhile; endif; ?>
    </section>

    <!-- Hiring -->
    <section class="hiring fullscreen">
        <section class="max-width max-padding">
            <section class="pill">
                <p class="pill__label">careers</p>
            </section>
            <h3 class="hiring__headline">We're hiring!</h3>
            <p class="hiring__copy">We’re hiring! Visit our Careers page to view open positions or send your resume to
                <a href="mailto:careers@30fe.com">careers@30fe.com.</a>
            </p>
            <a href="<?php echo site_url('/careers')?>"><button class="hiring__button">OPEN POSITIONS</button></a>
        </section>
    </section>

    <!-- disclaimer -->
    <section style="background-color: #cbbea5;">
        <section class="max-width max-padding">
            <p class="careers__copy" style="line-height: 110%; font-weight: 700;color:#1d1c1d">Accessibility Commitment
                to Our Clients:</br>

                <span style="font-size: 16px; font-weight: 400; color:#1d1c1d">
                    At 30 Forensic Engineering, we are committed to providing accessible services to all our clients
                    across various sectors. We recognize that every client’s needs are unique, and we strive to deliver
                    clear, actionable insights in a manner that is accessible to all. Whether we are engaging with
                    insurers, legal firms, industry partners, or clients from other sectors, our goal is to ensure our
                    findings are comprehensible and actionable, empowering clients to make informed decisions.
                    <br><br>
                    Our commitment to accessibility includes providing or arranging for accessible formats and
                    communication supports tailored to meet the diverse needs of our clients. We are dedicated to
                    ensuring that all communications, reports, and deliverables are available in a way that supports
                    accessibility requirements and promotes effective engagement with our expertise.
                    <br><br>
                    If you require any specific accommodations or have accessibility needs to better engage with our
                    team or reports, please do not hesitate to contact us. We are committed to ensuring all clients can
                    access, understand, and benefit from our services.
                </span>
            </p>
        </section>
    </section>
    <!-- disclaimer -->
</main>

<?php 
get_footer();
?>