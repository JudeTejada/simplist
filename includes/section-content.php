<?php 
    if( have_posts() ) :
        while( have_posts() ):
            the_post(); ?>
                <article class='mb-3'>
                    <a href="<?php the_permalink(); ?>">
                      <h3 class='text-3xl hover:underline'><?php the_title(); ?></h3> 
                     </a>
                   

                      <p class='text-base'>
                      <?php  the_excerpt(); ?>
                      </p>
             
                </article>
      

  <?php endwhile; else: endif ?>


