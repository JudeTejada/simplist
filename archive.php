<?php get_header();?>


<main class="content-area mt-10 p-8">


    <form class='mb-20'>
      <h2 class='text-4xl font-bold'>Search for articles</h2>
      <input type="text" name="search post" id="searchPost" placeholder="Search articles" class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'>    
    </form>

    <section>
    <h2 class='text-4xl font-bold'>All Posts</h2>
      <?php
        $args = array( 'category' => 3, 'post_type' =>  'post' ); 
        $postslist = get_posts( $args );    
        foreach ($postslist as $post) :  setup_postdata($post); 
        ?>  
          
          <article class='mb-3 post'>
                        <a href="<?php the_permalink(); ?>">
                          <h3 class='text-3xl hover:underline font-bold post-title'><?php the_title(); ?></h3> 
                        </a>
                      

                          <p class='text-base post-body'>
                          <?php  the_excerpt(); ?>
                          </p>
                
          </article>

     
        <?php endforeach; ?> 



      


   
        </section>

  </main>
  

<?php get_footer();?>


<script>
const searchFilter = document.getElementById('searchPost');

function filterBlog(e){

  const value = e.target.value.toUpperCase();
  const posts = document.querySelectorAll('.post')
  console.log(posts)

  //get title and body
  posts.forEach(post => {
 
    const title = post.querySelector('.post-title').innerText.toUpperCase();
    const body = post.querySelector('.post-body').innerText.toUpperCase();

    if (title.indexOf(value) > -1 || body.indexOf(value) > -1) {
      post.style.display = 'block';
    } else {
      post.style.display = 'none';
    }


  });

}


searchFilter.addEventListener('input', filterBlog)

</script>