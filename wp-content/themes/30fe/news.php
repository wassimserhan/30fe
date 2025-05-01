<?php
/*
Template Name: News
*/
?>

<?php 
get_header();
?>

<main class="main-container">
    <section class="news whitesmoke-bg fullscreen">
        <section class="max-width max-padding">
            <h1 class="news__headline">News</h1>
            <h2 class="news__subheadline">Keep up with the latest updates about 30 Forensic Engineering</h2>

            <section id="ajax-posts" class="news__grid insights__grid"
                data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
                data-max="<?= $wp_query->max_num_pages; ?>">
                <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // changed all page to paged

          $Newspost = new WP_Query(array(
          'posts_per_page' => 9,
          'post_type'=> 'news',
          
          ));
          while ($Newspost->have_posts()): $Newspost->the_post(); ?>

                <?php include get_template_directory() . '/modules/news-card.php'; ?>

                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            </section>
            <?php if ($Newspost->found_posts > 12): ?>
            <button id="load-more" class="news__load" data-page="1" data-post-type="news"
                data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load More</button>
            <?php endif; ?>
        </section>
    </section>
</main>
<?php 
get_footer();
?>