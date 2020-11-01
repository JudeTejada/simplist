<?php get_header();?>


<section class="content-area mt-10">

<?php 
    if( have_posts() ) :
        while( have_posts() ):
            the_post(); ?>

                

            <?php  the_content();?>

  <?php endwhile; else: endif ?>

  </section>
  

<?php get_footer();?>