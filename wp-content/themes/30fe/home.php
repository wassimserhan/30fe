<?php 
get_header();
?>

<main class="main-container">
  <section class="insights whitesmoke-bg fullscreen">
    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label">Insights</p>
      </section>
      <h1 class="insights__hadline">30 Publications</h1>
      <h6>Find all past and future publications and reports by our finest writers.</h6>
      <br>
      <section class="team__search">
        <div class="insights__filter-dropdown">
          <div class="insights__select">
            <span class="insights__selected selected-role">Filter By Category</span>
            <div class="insights__caret"></div>
          </div>
          <ul id="team__role" class="insights__menu team__expertise">
            <li value="all">All Categories</li>
            <?php $categories = get_categories(); 
                foreach($categories as $category): ?>
            <li value="<?php echo $category->name; ?>"><?php echo $category->name; ?></li>
            <?php endforeach ;?>
          </ul>
        </div>



        <input type="text" id="blogFilter" class="insights__select" placeholder="Search">
      </section>


      <section id="insights" class="insights__grid">



        <?php 
          $Insightpost = new WP_Query(array(
          'posts_per_page' => 20,
          'post_type'=> 'post'
          //  'category_name' => sanitize_title('Geotechnical Engineering')

          ));
          while ($Insightpost->have_posts()): $Insightpost->the_post(); ?>

        <?php include get_template_directory() . '/modules/insights-card.php'; ?>

        <?php endwhile ?>
        <?php wp_reset_postdata() ?>
      </section>
      <section class="paginate"> <?php echo paginate_links();?></section>
    </section>
  </section>
</main>


<?php 
get_footer();
?>