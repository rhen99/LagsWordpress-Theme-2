<?php get_header(); ?>
    <div class="featured-image">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </div>
    <div class="main-area">
        <div class="col-9">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post();?>
                    <?php get_template_part('content') ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
<?php get_footer(); ?>