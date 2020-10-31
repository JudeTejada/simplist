<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name')?></title>

    <?php  wp_head();?>
</head>
<body>
    
<header class="container mt-10 mx-auto">
    <nav class='flex justify-between'>
        <button>Dark Theme</button>
        <?php wp_nav_menu( 
            array(
                'container'=> false,
                'theme_location' => 'header-menu',
                'container_class' => 'nav-container',
                'menu_class' => 'flex main-nav'
            )
        
        )?>
    </nav>
</header>