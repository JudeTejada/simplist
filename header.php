<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php  wp_head();?>
</head>
<body>
    
<header class="container mx-auto mt-2">
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