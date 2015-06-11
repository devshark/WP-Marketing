<?php
/*
Widget Name: Tabbed
*/

class Evatheme_Widget_Tabbed extends WP_Widget
{
    var $settings = array('number', 'pop', 'latest');


    public function __construct()
    {
        parent::__construct(
            'Evatheme_Tabbed', // Base ID
            'Evatheme Tabbed', // Name
            array('description' => __('Tabs: Popular posts, Recent Posts, Comments', 'evatheme'),) // Args
        );
    }

    function widget($args, $instance) {
        extract($args, EXTR_SKIP);

		if(isset($instance['title'])) {
			$title = apply_filters('widget_title', $instance['title']);
		} else {
			$title = '';
		}

        $instance = $this->aq_enforce_defaults($instance);
        extract($instance, EXTR_SKIP);
        $number = $instance['number'];


        echo htmlspecialchars_decode( esc_html( $before_widget ) );

        if ($title) {

            echo htmlspecialchars_decode( esc_html( $before_title ) );
            echo esc_html( $title );
            echo htmlspecialchars_decode( esc_html( $after_title ) );

        } ?>

		<div class="eva-tab">
			<ul>
				<li class="active"><a href="#tabitem_0_0"><?php _e('Popular', 'evatheme') ?></a></li>
				<li><a href="#tabitem_0_1"><?php _e('Recent', 'evatheme') ?></a></li>
				<li><a href="#tabitem_0_2"><?php _e('Comments', 'evatheme') ?></a></li>
			</ul>
			<div class="tab-content">
				<div id="tabitem_0_0" class="tab-pane active">
					<?php if (function_exists('aq_widget_tabs_popular')) aq_widget_tabs_popular( $number ); ?>
				</div>
				<div id="tabitem_0_1" class="tab-pane">
					<?php if (function_exists('aq_widget_tabs_latest')) aq_widget_tabs_latest( $number ); ?>
				</div>
				<div id="tabitem_0_2" class="tab-pane">
					<?php if (function_exists('aq_widget_tabs_comments')) aq_widget_tabs_comments($number); ?>
				</div>
			</div>
		</div>

        <?php echo htmlspecialchars_decode( esc_html( $after_widget ) );
    }

    /*----------------------------------------
       update()
       ----------------------------------------

     * Function to update the settings from
     * the form() function.

     * Params:
     * - Array $new_instance
     * - Array $old_instance
     ----------------------------------------*/

    function update($new_instance, $old_instance)
    {
        $new_instance = $this->aq_enforce_defaults($new_instance);
        $instance['title'] = strip_tags($new_instance['title']);
        return $new_instance;
    } // End update()

    function aq_enforce_defaults($instance)
    {
        $defaults = $this->aq_get_settings();
        $instance = wp_parse_args($instance, $defaults);
        $instance['number'] = intval($instance['number']);
        if ($instance['number'] < 1)
            $instance['number'] = $defaults['number'];


        return $instance;
    }

    /**
     * Provides an array of the settings with the setting name as the key and the default value as the value
     * This cannot be called get_settings() or it will override WP_Widget::get_settings()
     */
    function aq_get_settings()
    {
        // Set the default to a blank string
        $settings = array_fill_keys($this->settings, '');
        // Now set the more specific defaults
        $settings['number'] = 3;
        return $settings;
    }

    /*----------------------------------------
      form()
      ----------------------------------------

       * The form on the widget control in the
       * widget administration area.

       * Make use of the get_field_id() and
       * get_field_name() function when creating
       * your form elements. This handles the confusing stuff.

       * Params:
       * - Array $instance
     ----------------------------------------*/

    function form($instance)
    {
        $instance = $this->aq_enforce_defaults($instance);
        extract($instance, EXTR_SKIP);

        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php _e('Title:', 'evatheme'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('number') ); ?>"><?php _e('Number of posts:', 'evatheme'); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('number') ); ?>" name="<?php echo esc_attr( $this->get_field_name('number') ); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
        </p>
    <?php
    } // End form()

} // End Class

/*-----------------------------------------------------------------------------------*/
/*  Popular Posts */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('aq_widget_tabs_popular')) {
    function aq_widget_tabs_popular( $posts = 3 )
    {
        global $post;
        $popular = get_posts(array('suppress_filters' => false, 'ignore_sticky_posts' => 1, 'orderby' => 'comment_count', 'numberposts' => $posts));

        foreach ($popular as $post) :
            setup_postdata($post); ?>

            <div class="tabbed-popular-post">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php /* ?><span class="date"><?php the_time('j M Y'); ?></span><?php */ ?>
                <span class="date"><?php the_time( get_option( 'date_format', 'j M Y' ) ); ?></span>
            </div>

        <?php endforeach;
        wp_reset_query();

    }
}


/*-----------------------------------------------------------------------------------*/
/*  Latest Posts */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('aq_widget_tabs_latest')) {
    function aq_widget_tabs_latest( $posts = 3 )
    {
        global $post;
        $latest = get_posts('ignore_sticky_posts=1&numberposts=' . $posts . '&orderby=post_date&order=desc');
        foreach ($latest as $post) :
            setup_postdata($post); ?>

            <div class="tabbed-latest-post">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php /* ?><span class="date"><?php the_time('j M Y'); ?></span><?php */ ?>
                <span class="date"><?php the_time( get_option( 'date_format', 'j M Y' ) ); ?></span>
            </div>

        <?php endforeach;
        wp_reset_query();

    }
}
/*-----------------------------------------------------------------------------------*/
/*  Latest Comments */
/*-----------------------------------------------------------------------------------*/
if (!function_exists('aq_widget_tabs_comments')) {
    function aq_widget_tabs_comments($posts = 3)
    {
        global $wpdb;

        $comments = get_comments(array('number' => $posts, 'status' => 'approve'));

        if ($comments) {
            foreach ((array)$comments as $comment) {

                $post = get_post($comment->comment_post_ID);
                ?>

                <div class="tabbed-comment">
					<a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php echo esc_html( $post->post_title ); ?></a>
                    <div class="excerpt"><?php echo wp_trim_words(($comment->comment_content), 10); ?></div>
                </div>

            <?php
            }
        }
    }

    wp_reset_query();
}

add_action( 'widgets_init', create_function( '', 'register_widget("Evatheme_Widget_Tabbed");' ) );
