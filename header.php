<?php
//heder
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
    <a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
    <p><?php bloginfo( 'description' ); ?></p>
     <details>
        <summary>Menu</summary>
    <nav>
        <?php wp_nav_menu( 
            array( 
            'theme_location' => 'menu-1',
            'menu_id' => 'primary-menu',
                )
            );	
        ?>
        </nav>
    </details>
    </div>
</header>

