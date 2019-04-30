<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <main>
        <header>
            <nav class="navbar">
                <div class="container navbar-content">
                    <div class="nav-branding">
                        
                        <div class="brand-logo">
                            <a id="hamburger" href="#=<?php echo home_url();?>"><i class="fas fa-bars mobile"></i></a></i><a href="#"><?php _e('LagsWordpress'); ?></a></div>
                    </div>
                    <?php wp_nav_menu( array(
		        'menu'              => 'primary',
		        'menu_id' 			=> 'primary-menu',
		        'theme_location'    => 'primary',
		        'depth'             =>  2,
		        'container'         => '',
		        'menu_class' 		=> 'navigation desktop',
				'walker'			=>	new LagsTheme2_Walker_Nav_Menu(),
            ));  ?>
                </div>
            </nav>
            
        </header>
        <div class="overlay hide">
            <div class="sidenav" id="sidenav">
                <ul>
                    <li><a href="#" class="close"><i class="fas fa-times"></i></a></li>
                </ul>
                <?php wp_nav_menu( array(
		        'menu'              => 'primary',
		        'menu_id' 			=> 'primary-menu',
		        'theme_location'    => 'primary',
		        'depth'             =>  2,
		        'container'         => '',
		        'menu_class' 		=> 'mobile-navigation',
				'walker'			=>	new LagsTheme2_Walker_Nav_Menu(),
            ));  ?>
            </div>
        </div>
        <section class="container">
            