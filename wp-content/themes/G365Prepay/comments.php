<?php

if (comments_open ()) { ?>
    <div id="comments">
		<h2>Comments <span class="theme_color"><?php echo esc_html( get_comments_number('0', '1', '%') ); ?></span></h2>
	<?php
        if (eva_option('facebook_comment')) { ?>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo esc_html( eva_option('facebook_app_id') ); ?>";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="<?php echo esc_html( get_option('comments_per_page') ); ?>" data-width="100%"></div><?php
        } else {
            if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
                die('Please do not load this page directly. Thanks!');
            }
            if (post_password_required ()) { ?>
                <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'evatheme'); ?></p><?php
                return;
            }

            if (have_comments ()) { ?>

                <div class="comment-list">
                    <?php wp_list_comments(array('style' => 'div', 'callback' => 'mytheme_comment')); ?>
                </div>
                <div class="navigation">
                    <div class="left"><?php previous_comments_link() ?></div>
                    <div class="right"><?php next_comments_link() ?></div>
                </div><?php
            }


            $fields[ 'comment_notes_before' ]=$fields[ 'comment_notes_after' ] = '';
            $fields[ 'comment_field' ] =
                '<div class="comment-form-comment">'.
                    '<label>' . __('Message', 'evatheme') . '</label><textarea name="comment" id="comment" class="required" rows="8" tabindex="4"></textarea>'.
                '</div>';
//            $fields[ 'title_reply' ] = '<h4 id="reply-title">'.__('Leave a Comment', 'evatheme').'</h4>';
//            $fields[ 'title_reply_to' ] = '<h4 id="reply-title">'.__('Leave a Reply to %s', 'evatheme').'</h4>';
//            $fields[ 'cancel_reply_link' ] = __('Click here to cancel reply.','evatheme');

            //echo '<div class="row-fluid">';
            comment_form($fields);
            //echo '</div>';
        } ?>
    </div><?php
}
