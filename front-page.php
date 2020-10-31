<?php get_header()?>



<main class="container mx-auto p-5">

    
    <header class='my-8'>
        <h1 class='text-6xl font-bold'>A blog for simplist</h1>
        <p class='text-base text-gray-700'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis excepturi quo, sint ducimus nam corrupti maiores, earum recusandae, laborum dolor adipisci.</p>
     </header>

    <section>
     <?php get_template_part('includes/section', 'content')?>
    </section>

</main>



<?php get_footer();?>