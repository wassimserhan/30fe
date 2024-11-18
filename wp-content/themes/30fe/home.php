<?php 
get_header();

global $wp_query;
?>

<main class="main-container">
    <section class="insights whitesmoke-bg fullscreen">
        <section class="max-width max-padding">
            <section class="pill">
                <p class="pill__label">Insights</p>
            </section>
            <h1 class="insights__headline">30 Insights</h1>
            <p>Read the latest publications from our experts.</p>
            <br>
            <section class="team__search">
                <div class="insights__filter-dropdown">
                    <div class="insights__select">
                        <span class="insights__selected selected-role">Filter By Category</span>
                        <div class="insights__caret"></div>
                    </div>
                    <ul id="team__role" class="insights__menu team__expertise">
                        <li value="">All Categories</li>
                        <?php $categories = get_categories(); 
                foreach($categories as $category): ?>
                        <li value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
                        <?php endforeach ;?>
                    </ul>
                </div>
            </section>


            <section id="ajax-posts" class="insights__grid"
                data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
                data-max="<?= $wp_query->max_num_pages; ?>">
                <?php 
        
          while (have_posts()):the_post(); ?>

                <?php include get_template_directory() . '/modules/insights-card.php'; ?>
                <?php endwhile ?>
            </section>
            <button id="load-more" class="insights__load" data-page="1" data-post-type="post"
                data-url="<?php echo admin_url('admin-ajax.php'); ?>">Load More</button>
        </section>
    </section>
</main>


<?php 
get_footer();
?>