<?php /* Template Name: Careers */ ?>


<?php 
get_header();
?>

<main class="main-container">

    <section class="careers__intro fullscreen">
        <section class="max-width max-padding">
            <section class="careers__intro__wrapper">
                <h1 class="careers__intro__headline">At 30, we share a fascination for how things work.
                    We love the mystery. The&nbsp;theory. The mechanics. The science. The rigour.
                    We’re&nbsp;tinkerers at heart. Detectives. Problem-solvers. Truth-seekers.
                    Perhaps most of all, we’re Reporters.
                    <br><br>
                    We’re always looking for more people like us to join us in our mission. Are you in?
                </h1>
                <a href="#positions"><button class="careers__intro__button">Open Positions</button></a>
            </section>

        </section>

    </section>

    <!-- Hero -->


    <!-- Career Slider -->
    <section class="black-bg">
        <section class="max-width">
            <section id="careerIntro" class="splide splide-careers-intro splide-careers-banners"
                aria-labelledby="carousel-heading">
                <section class="max-padding max-padding--no-side">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php 
              if( have_rows('banner_images') ): 
              while( have_rows('banner_images') ) : the_row(); ?>
                            <?php 
              $img = get_sub_field('image');
              $image = esc_url($img['url']);
                $alt = esc_attr($img['alt']);
              ?>
                            <li class="splide__slide">
                                <img loading="lazy" class="careers__banners" src="<?php echo $image ?>"
                                    alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>">

                            </li>
                            <?php
          endwhile; ?>
                            <?php endif;
            ?>
                        </ul>
                    </div>
                </section>
            </section>
        </section>
    </section>

    <!-- Headline -->
    <section class="quote fullscreen" style="min-height:0">
        <section class="max-width max-padding">
            <h3 class="quote__headline" style="padding: 0;">When talented and determined minds join forces, they
                achieve
                the impossible. At 30 Forensic Engineering, this isn’t just a belief—it’s our way of life. And we’re
                searching for
                individuals like you who share the same drive.</h3>
        </section>
    </section>


    <!-- Vision -->
    <?php
if( have_rows('vision') ):
while( have_rows('vision') ) : the_row(); 
?>
    <section class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <section class="careers__intro__wrapper">
                <h2 class="careers__headline"><?php echo get_sub_field('vision_headline') ;?>
                </h2>
                <p class="careers__copy"><?php echo get_sub_field('vision_copy') ;?></p>
            </section>
        </section>
    </section>
    <?php endwhile; endif; ?>


    <!-- Values Desktop -->

    <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
    <section class="careers__vision careers__vision--desktop fullscreen">
        <h2 class="careers__headline careers__headline--center"><?php echo get_sub_field('values_headline') ;?></h2>

        <section class="max-width careers__vision__padding">
            <!-- Desktop Module -->
            <section class="career-values__container">
                <?php 
                          if( have_rows('values_items') ): 
                          while( have_rows('values_items') ) : the_row();
                          $value_item = get_sub_field('value_item');
                          ?>
                <section id="value-<?php echo get_row_index(); ?>" class="careers-values__card">
                    <p class="careers__slide__card__number"><?php echo get_row_index(); ?></p>
                    <p class="careers__slide__card__text"><?php echo $value_item; ?></p>
                </section>
                <?php endwhile; ?>
                <?php endif;?>
            </section>
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Values iPad/Mobile-->
    <?php
if( have_rows('values') ):
while( have_rows('values') ) : the_row(); 
?>
    <section class="careers__vision careers__vision--mobile fullscreen">
        <section class="max-width careers__vision__padding">
            <h2 class="careers__headline careers__headline--no-padding">
                <?php echo get_sub_field('values_headline') ;?>
            </h2>
            <section style="" id="careers-slider" class="splide splide-careers" aria-labelledby="carousel-heading"
                aria-roledescription="carousel" role="region">
                <section class="splide__track">
                    <section class="splide__list">
                        <?php 
                          if( have_rows('values_items') ): 
                          while( have_rows('values_items') ) : the_row();
                          $value_item = get_sub_field('value_item');
                          ?>
                        <section class="splide__slide careers__slide__card">
                            <p class="careers__slide__card__number"><?php echo get_row_index(); ?></p>
                            <p class="careers__slide__card__text"><?php echo $value_item; ?></p>
                        </section>
                        <?php endwhile; ?>
                        <?php endif;?>
                    </section>
                </section>
            </section>
            <!-- End Mobile Module-->
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Culture -->

    <section class="about__thirty fullscreen">
        <?php
          if( have_rows('culture') ):
          while( have_rows('culture') ) : the_row(); 
          ?>
        <section class="max-width max-padding">
            <section class="careers__culture__card">
                <figure class="careers__culture__image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/what-is-30.gif"
                        alt="what is 30?" title="lock">
                </figure>
                <article class="careers__culture__detail careers__culture__detail--left" style="">
                    <h2 class="careers__culture__headline"><?php echo get_sub_field('culture_headline') ;?></h2>
                    <p class="careers__culture__copy"><?php echo get_sub_field('culture_copy') ;?>
                    </p>
                </article>
            </section>
        </section>
        <?php endwhile; endif; ?>
    </section>




    <!-- Benefits -->
    <?php
if( have_rows('benefits') ):
while( have_rows('benefits') ) : the_row(); 
?>
    <section class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <ul id="myList" class="careers__list">
                <?php 
          if( have_rows('benefits_items') ): 
          while( have_rows('benefits_items') ) : the_row();
          $benefits_item = get_sub_field('benefits_item');
          ?>
                <li class="benefit-items">
                    <?php echo $benefits_item; ?>
                </li>
                <?php
          endwhile; ?>
                <?php endif;
            ?>
            </ul>
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- Positions -->
    <?php
if( have_rows('positions') ):
while( have_rows('positions') ) : the_row(); 
?>
    <section id="positions" class="careers__vision fullscreen">
        <section class="max-width max-padding">
            <h2 class="careers__headline careers__headline--white">
                <?php echo get_sub_field('positions_headline') ;?>
            </h2>



            <?php 
          $job_openings = get_field ( 'job_openings' ); 
          foreach ($job_openings as $item):     
          $title = get_the_title($item);
          $location = get_field('location', $item);
          $type = get_field('type', $item);
          $bamboo_link = get_field('cta', $item);
        ?>


            <section class="careers__openings">
                <a href="<?php echo $bamboo_link['url']; ?>">
                    <article class="careers__positions">
                        <div class="careers__positions__wrapper">
                            <p class="careers__positions__intro careers__positions__intro--bold">
                                <?php echo $title;?>
                            </p>
                            <p class="careers__positions__intro">
                                <?php echo $location;?>
                            </p>
                            <p class="careers__positions__intro">
                                <?php echo $type;?>
                            </p>
                            <img class="careers__positions__arrow"
                                src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="arrow"
                                width="20" height="20" tabindex="0">
                        </div>
                    </article>
                </a>
            </section>
            <?php endforeach; ?>
        </section>
    </section>
    <?php endwhile; endif; ?>

    <!-- disclaimer -->
    <section style="background-color: #1d1c1d">
        <section class="max-width max-padding">
            <p class="careers__copy" style="line-height: 110%; font-weight: 700">To Our Employees & Applicants:</br>

                <span style="font-size: 16px; font-weight: 400">
                    Welcome to 30 Forensic Engineering! We are committed to fostering a positive, inclusive
                    workplace
                    that values each employee’s growth, happiness, and well-being. As part of this commitment, we
                    provide an accessible recruitment and employment experience free from discrimination on any
                    prohibited grounds, including gender identity, race, ethnic origin, age, physical or mental
                    disability, sexual orientation, and any other category protected by law.
                    </br> </br>
                    We aim to support all employees and job applicants equally by providing necessary accommodations
                    for
                    individuals with disabilities, in alignment with provincial and federal laws. We encourage
                    applicants and employees to communicate any accommodation needs, as we are dedicated to ensuring
                    a
                    supportive environment that allows everyone to thrive professionally and personally.
                    </br> </br>
                    In keeping with our values, we welcome applicants and employees to engage in an interactive
                    process
                    to identify reasonable accommodations. If you require support or assistance in performing
                    essential
                    job functions, please reach out to your manager, our HR department, or any member of our
                    management
                    team.</span>
            </p>
            </br> </br>
            <p class="careers__copy" style="line-height: 110%; font-weight: 700">Our Recruitment Process:</br>

                <span style="font-size: 16px; font-weight: 400">
                    Aligned with our vision to foster a workplace built on diverse knowledge, perspectives, and an
                    inclusive culture, our recruitment process is designed to offer a positive and equitable
                    experience
                    for all candidates. Most candidates complete the process in three meetings, though occasionally
                    an
                    additional conversation may be required:
                    </br> </br>
                    <ul style="list-style: circle; margin-left: 50px;">
                        <li class="careers__copy">Recruiter Phone Interview – An introductory conversation with our
                            Talent Team.</li>
                        <li class="careers__copy">Hiring Manager Interview(s) – A discussion with the hiring
                            manager,
                            which may include one or
                            two interviews to explore the role and team dynamics in more depth.</li>
                    </ul>
                    <br>
                    <p style="font-size: 16px; font-weight: 400; color: #f2f1ed">If you require accommodation at any
                        stage of the
                        process, please let us
                        know. We are dedicated to
                        making adjustments that enable you to present your skills and talents fully.</p>
                </span>
            </p>
        </section>
    </section>
    <!-- disclaimer -->

</main>

<?php 
get_footer();
?>