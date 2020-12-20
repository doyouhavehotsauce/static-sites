<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>





<div id="mobile-nav-wrap">
    <div class="nav-hamburger">&times;</div>
        <nav class="nav-mobile">

        <?php wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary'
            )
        ); 
        ?>
        </nav>
    </div>
    <div id="menu-toggle"><a id="show-menu">Menu</a></div>
    

<body>
