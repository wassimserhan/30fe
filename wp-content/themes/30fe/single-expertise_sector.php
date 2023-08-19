<?php while (have_posts()) {
      the_post();
    }
    ?>

<!-- <main class="main-container">
  <section class="industry">

    <section class="max-width max-padding">
      <section class="pill">
        <p class="pill__label"><?php echo $pillText ?></p>
      </section>
      <section class="industry__intro">
        <h1 class="industry__title industry__title"><?php the_title() ?></h1>
        <p class="industry__copy industry__copy"><?php the_content() ?></p>
      </section>
    </section>
    <figure class="industry__figure">
      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="<?php echo $alt; ?>"
        title="<?php echo $title; ?>">
    </figure>


    <section class="max-width">
      <article class="industry__categories">
        <!-- display industry categories -->
<?php
          if( have_rows('column_list') ): 
          while( have_rows('column_list') ) : the_row();
            $industryItems = get_sub_field('list_item'); ?>


<section class="industry__category <?php if( get_row_index()== 2) echo "industry__category-bullets-border" ?>">
  <section class="industry__category-items">
    <p><?php echo '0' . get_row_index() ?></p>
    <h4 class="industry__category-item"><?php echo $industryItems ?></h4>
  </section>

  <section class="industry__category-bullets">
    <?php
          if( have_rows('items') ): 
          while( have_rows('items') ) : the_row();
            $industryItem = get_sub_field('item'); ?>
    <section class=" industry__category-bullets__items">
      <figure class="industry__category-bullets__arrow">
        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/blue-arrow.svg"
          alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
      </figure>
      <article>
        <h5 class="industry__category-bullets__item"><?php echo $industryItem ?></h5>
        <?php
          if( have_rows('subitems') ): ?>
        <ul class="industry__category-bullets__subitem">
          <?php  
          while( have_rows('subitems') ) : the_row();
            $subItem = get_sub_field('subitem'); ?>
          <li><?php echo $subItem ?></li>


          <?php
            endwhile; ?>
          <?php endif;
            ?>
      </article>
    </section>
    <?php
            endwhile; ?>
    <ul>
      <?php endif;
            ?>
  </section>
</section>



<?php
            endwhile; ?>
<?php endif;
            ?>
</article>
</section>

</section>
</main> -->