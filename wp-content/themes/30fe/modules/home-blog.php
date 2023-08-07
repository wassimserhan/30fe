 <section class="insights fullscreen whitesmoke-bg">
   <section class="max-width max-padding">
     <section class="pill">
       <p class="pill__label">Blog</p>
     </section>
     <h1 class="insights__headline">30 Publications</h1>
     <h6>Read our latest insights from our best experts.</h6>
     <br>


     <section class="insights__grid">

       <?php 

     $homepagePosts = new WP_Query(array(
      'posts_per_page' => 4
     ));
      while ($homepagePosts->have_posts()): $homepagePosts->the_post();
      ?>

       <article class="insights__card">
         <figure>
           <img class="lazyload" src="<?php echo get_template_directory_uri(); ?>/images/blog-image.jpg"
             alt="<?php echo get_bloginfo( 'name' ); ?> logo" title="<?php echo get_bloginfo( 'name' ); ?>"
             width="100%">
         </figure>
         <article class="insights__card__label">
           <aside class="insights__card__label__category">
             <p class="insights__card__label__category__text">
               <?php echo get_the_category_list(', '); ?>
             </p>
           </aside>
           <p class="insights__card__label__read"><?php echo display_read_time(); ?></p>
         </article>
         <h6 class="insights__card__title">
           <?php the_title() ?>
         </h6>
         <p class="insights__card__copy">
           <?php echo $subtitle ?>
         </p>
         <p class="insights__card__more"><a href="<?php the_permalink() ?>">Read more <img
               src="<?php echo get_template_directory_uri(); ?>/images/chevron.svg" /></a></p>
       </article>
       <?php endwhile ?>

       <?php wp_reset_postdata() ?>
     </section>


   </section>
 </section>