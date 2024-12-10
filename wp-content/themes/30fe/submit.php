<?php /* Template Name: Submit */ ?>

<?php 
get_header();
?>

<main class="main-container">
    <section id="submit-assign" class="email fullscreen">
        <section class="max-width max-padding">
            <h2 class="email__headline"><?php echo get_field('title') ?></h2>
            <p class="email__copy"><?php echo get_field('subheading') ?></p>
            <section class="email__form">
                <?php echo get_field('form_code') ;?>
            </section>

        </section>
    </section>

</main>



<?php 
get_footer();
?>