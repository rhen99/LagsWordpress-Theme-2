<?php if(!is_singular()): ?>
    <div class="excerpt-card">
        <?php if(has_post_thumbnail()): ?>
            <div class="excerpt-thumbnail"><?php the_post_thumbnail(); ?></div>
        <?php endif; ?>
        <div class="post-excerpt">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h6 class="post-meta"><?php _e('Posted at '); the_time('F j, Y g:ia'); _e(' by ')?><a class="accent" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h6>
            <?php the_excerpt(); ?>
        </div>
    </div>
    <?php else: ?>
        <div class="post">
            <h1 class="the-title"><?php the_title(); ?></h1>
            <h6 class="the-meta"><?php _e('Posted at '); the_time('F j, Y g:ia'); _e(' by ')?><a class="accent" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h6>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php if(is_single()): ?>
            <?php comments_template(); ?>
        <?php endif; ?>
<?php endif; ?>