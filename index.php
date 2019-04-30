<?php get_header(); ?>
<h1 class="title">LagsWordpress Blog</h1>
            <div class="main-area">
                <div class="col-9">
                    <?php if(have_posts()):?>
                        <?php while(have_posts()):the_post(); ?>
                                <?php get_template_part('content') ?>
                        <?php endwhile; ?>
                        <div class="post-nav">
                            <?php previous_posts_link() ?>
                            <?php next_posts_link() ?>
                        </div>
                        <?php else: ?>
                        <h1 class="no-posts"><?php _e('No Posts Found'); ?></h1>
                    <?php endif; ?>
                </div>
               <?php get_footer(); ?>