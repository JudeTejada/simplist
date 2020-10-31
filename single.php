<!--  TEMPLATE FOR POST ON OUR BLOG-->

<?php  get_header();?>



<article class="container mx-auto p-5 content-area">


    


    <?php 
    //pull our own theme file
    get_template_part('includes/section', 'blogcontent');?>

   
</article>


<?php  get_footer();?>