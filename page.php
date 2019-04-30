<?php get_header(); ?>
    <div class="main-area page">
        <div class="col-9">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>           
                    <div class="post">
                        <h1 class="the-title"><?php the_title(); ?></h1>
                        <h6 class="the-meta"><?php _e('Posted at '); the_time('F j, Y g:ia'); _e(' by ')?><a class="accent" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h6>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
<?php get_footer(); ?>