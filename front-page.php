<?php get_header()?>



<main class="p-8">

    
    <header class='my-10'>
        <h1 class='text-6xl font-bold'>A blog for simplist</h1>
        <p class='text-base'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis excepturi quo, sint ducimus nam corrupti maiores, earum recusandae, laborum dolor adipisci.</p>
     </header>

    <section>
    <h2 class='text-4xl font-bold'>Recent Posts</h2>
     <?php get_template_part('includes/section', 'content')?>

    </section>






<?php get_footer();?>

</main>