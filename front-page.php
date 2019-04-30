<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
     <style>
        .showcase{
            background: #333 url(<?php echo get_theme_mod('showcase_image'); ?>) no-repeat center center / cover;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <nav class="navbar">
                <div class="container navbar-content">
                    <div class="nav-branding">
                        
                        <div class="brand-logo">
                            <a id="hamburger" href="#"><i class="fas fa-bars mobile"></i></a></i><a href="<?php echo home_url(); ?>"><?php _e('LagsWordpress'); ?></a></div>
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

        <div class="showcase">
            <div class="showcase-inner">
                <h1><?php echo get_theme_mod('showcase_heading', 'Showcase Heading'); ?></h1>
                <p><?php echo get_theme_mod('showcase_secondary', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, corrupti.'); ?></p>
                <a href="<?php echo home_url().'/blog'; ?>" class="showcase-action"><?php echo get_theme_mod('showcase_btn_text', 'Read More'); ?></a>
            </div>
        </div>
        <div class="container">
            
            <h1 class="title"><?php _e('Recently Added Posts'); ?></h1>
            <div class="grid3x3">
                <?php
                $blogposts = new WP_Query([
                    'posts_per_page' => 6
                ]); 

                if($blogposts->have_posts()):
                    while($blogposts->have_posts()):$blogposts->the_post();?>
                    <div class="post-tidbit">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <h6><?php _e('Posted at '); the_time('F j, Y g:ia'); _e(' by ')?><a class="accent" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h6>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile;
                endif;

            ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <h6 class="promotion">LagsWordpress Theme 2 | Created by LagsDevs</h6>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>