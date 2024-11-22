<?php 
get_header();
?>

<main class="main-container">
    <section class="news whitesmoke-bg fullscreen">
        <section class="max-width max-padding">
            <h1 class="news__headline"><?php echo get_the_term_list(get_the_ID(), 'news_category', '', ', ', ''); ?>
            </h1>
            <h2 class="news__subheadline">Keep up with the latest updates about 30 Forensic Engineering</h2>

            <section id="news" class="news__grid">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php include get_template_directory() . '/modules/news-card.php'; ?>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>

            </section>
        </section>
    </section>
</main>


<?php 
get_footer();
?>