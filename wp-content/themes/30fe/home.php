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
      <p>Find all past and future publications and reports by our finest writers.</p>
      <br>
      <section class="team__search">
        <div class="insights__filter-dropdown">
          <div class="insights__select">
            <span class="insights__selected selected-role">Filter By Category</span>
            <div class="insights__caret"></div>
          </div>
          <ul id="team__role" class="insights__menu team__expertise">
            <!-- <li value="all">All Categories</li> -->
            <?php $categories = get_categories(); 
                foreach($categories as $category): ?>
            <li value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
            <?php endforeach ;?>
          </ul>
        </div>



        <input type="text" id="blogFilter" class="insights__select" placeholder="Search">
      </section>


      <section id="insights" class="insights__grid"
        data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>"
        data-max="<?= $wp_query->max_num_pages; ?>">
        <?php 
        
          while (have_posts()):the_post(); ?> <?php include get_template_directory() . '/modules/insights-card.php'; ?>
        <?php endwhile ?> <?php wp_reset_postdata() ?> </section>
      <!-- <section class="paginate"> <?php echo paginate_links();?></section> -->
      <button class="insights__load">Load More</button>
    </section>
  </section>
</main>


<?php 
get_footer();
?>