<?php
class sociallinkswidget extends WP_Widget {

    function sociallinkswidget() {
        $widget_ops = array('classname' => 'sociallinkswidget', 'description' => 'Displays your social profile.');

        parent::WP_Widget(false, 'Evatheme Social', $widget_ops);
    }

    function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo htmlspecialchars_decode( esc_html( $before_widget ) );
            if ($title){echo htmlspecialchars_decode( esc_html( $before_title . $title . $after_title ) );}
            global $eva_socials;
            echo '<div class="eva-social-icon clearfix">';
            foreach ($eva_socials as $key => $social) {
                if(!empty($instance[$social['name']])){
                    echo '<a href="'.str_replace('*', esc_attr( $instance[$social['name']] ), $social['link']).'" target="_blank" title="'.esc_attr( $key ).'" class="'.esc_attr( $key ).'"><i class="fa fa-'.esc_attr( $key ).'"></i></a>';
                }
            }
            echo '</div>';
        echo htmlspecialchars_decode( esc_html( $after_widget ) );
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance = $new_instance;
        /* Strip tags (if needed) and update the widget settings. */
        $instance['title'] = strip_tags($new_instance['title']);
        return $instance;
    }

    function form($instance) {
        global $eva_socials; ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">Title:</label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" type="text" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php echo isset($instance['title']) ? esc_attr( $instance['title'] ) : ''; ?>"  />
        </p> <?php
        foreach ($eva_socials as $key => $social) { ?>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id($social['name']) ); ?>"><?php echo esc_html( $key ); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id($social['name']) ); ?>" type="text" name="<?php echo esc_attr( $this->get_field_name($social['name']) ); ?>" value="<?php echo isset($instance[$social['name']]) ? esc_attr( $instance[$social['name']] ) : ''; ?>"  />
            </p><?php
        }
    }
}

add_action('widgets_init', create_function('', 'return register_widget("sociallinkswidget");'));
?>
