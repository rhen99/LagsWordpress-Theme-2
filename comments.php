<?php

    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields = [
        'author' => '<div class="horizontal"><div class="half">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" ' . $aria_req . ' /></div>',
    
        'email'  => '<div class="half"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" ' . $aria_req . ' /></div></div>',
    ];

    $args = [
        'callback'          => 'my_comments_callback',
	    'max_depth' => 2
    ];

    function my_comments_callback($comment, $args, $depth){
         $GLOBAL['comment'] = $comment;
         ?>
         <div <?php comment_class('comments'); ?> id="div-<?php comment_ID(); ?>">
            <div class="comment-head">
                <div class="comment-avatar">
                    <?php echo get_avatar($comment, 18); ?>
                </div>
                <div class="comment-info">
                    <div class="comment-meta">
                        <a class="comment-author"><?php comment_author(); ?></a>
                    </div>
                    <?php if($comment->comment_approved === '0'): ?>
                    <p class="on-moderation"><?php _e('Your comment is awaiting moderation.'); ?></p>
                <?php else: ?>
                <?php comment_text(); ?>
                <?php endif; ?>
                </div>
                <span class="comment-date"><?php comment_date(); ?></span>
                
                <div class="comment-action">
                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'lagstheme1' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div>
            </div>
        </div>
    <?php }

    $comment_args = [
        'fields' => $fields,
        // change the title of send button 
        'label_submit'=>'Post Comment',
        // change the title of the reply section
        'title_reply'=> null,
        // remove "Text or HTML to be displayed after the set of comment fields"
	'comment_notes_after' => null,
        // redefine your own textarea (the comment body)
	'comment_field' => '<div class="whole"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true" placeholder="Write Here..."></textarea></div>',
	'class_submit' => 'submit'
    ];


?>


<div class="comment-section">
        <?php if(comments_open()): ?>
            <?php comment_form($comment_args); ?>
            <?php wp_list_comments($args, $comments); ?>
            <?php else: ?>
            <p class="no-comments"><?php _e('Comments are not allowed.'); ?></p>
        <?php endif; ?>
</div>