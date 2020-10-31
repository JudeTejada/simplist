<?php 
    if( have_posts() ) :
        while( have_posts() ):
            the_post(); ?>
    <h1 class='text-6xl font-bold'><?php the_title();?></h1>
           
       
           
           <?php 
                $fname =  get_the_author_meta('first_name');
                $lname =  get_the_author_meta('last_name');
            ?>
                <span class='.text-xs text-gray-600 mb-5 mt-1 inline-block'>
                <?php echo $fname?> <?php echo $lname;?> /
                <?php echo get_the_date()?>
               </span>


    <?php
    //check if it has featured image
    if(has_post_thumbnail()): ?>  
       <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>


    <?php  the_content(); ?>


    <?php 
        //get the category of  a post
        $categories = get_the_category();

        foreach($categories as $cat):?>
            <a href="<?php echo get_category_link($cat->term_id);?>">             <?php echo $cat->name;?>
        </a>

    <?php endforeach; ?>



  <?php endwhile; else: endif ?>


  