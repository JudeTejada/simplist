<?php get_header()?>



<main class="p-5">

    
    <header class='my-8'>
        <h1 class='text-6xl font-bold'>A blog for simplist</h1>
        <p class='text-base'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis excepturi quo, sint ducimus nam corrupti maiores, earum recusandae, laborum dolor adipisci.</p>
     </header>

    <section>
     <?php get_template_part('includes/section', 'content')?>

    </section>

    <div class='mt-5'>
        <?php  previous_posts_link();?>
        <?php  next_posts_link();?>
    </div>
 




<?php get_footer();?>

</main>