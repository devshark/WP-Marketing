<?php

if (!class_exists('evatheme_Mega_menu')) {
	class evatheme_Mega_menu {
		var $_options;

		public function __construct() {
			$this->_options = self::options();
			$this->_add_filters();
		}

		public static function options() {
			return array(
				'_evatheme_mega_menu_icon'		=> array(
						'type' => 'text',
						'label' => __( 'Icon', 'evatheme' ),
						'default' => 'fa-image',
						'size' => 'wide',
						'class' => 'evatheme-hide-only-depth-0',
					),
				'_evatheme_mega_menu_subtitle'	=> array(
						'type' => 'text',
						'label' => __('Subtitle', 'evatheme'),
						'default' => '',
						'size' => 'wide',
						'class' => 'evatheme-hide-only-depth-0',
					),

				'_evatheme_mega_menu_enabled'	=> array(
						'type' => 'select',
						'label' => __( 'Enable mega menu', 'evatheme' ),
						'default' => 0,
						'options' => array(1=>__( 'Yes', 'evatheme' ), 0=>__( 'No', 'evatheme' )),
						'size' => 'thin',
						'class' => 'evatheme-show-only-depth-0',
					),
				'_evatheme_mega_menu_columns'	=> array(
						'type' => 'select',
						'label' => __( 'Columns', 'evatheme' ),
						'default' => '3',
						'options' => array(
							'1' => '1',
							'2' => '2',
							'3' => '3',
							'4' => '4',
						),
						'size' => 'thin',
						'class' => 'evatheme-show-only-depth-0',
					),
			);
		}

		private function _add_filters() {
			# Add custom options to menu
			add_filter('wp_setup_nav_menu_item', array($this, 'add_custom_options'));

			# Update custom menu options
			add_action('wp_update_nav_menu_item', array($this, 'update_custom_options'), 10, 3);

			# Set edit menu walker
			add_filter('wp_edit_nav_menu_walker', array($this, 'apply_edit_walker_class'), 10, 2);

			# Addition style
			add_action('admin_enqueue_scripts', array( $this, 'add_menu_css' ));

			# Addition js
//			add_action('admin_head-nav-menus.php', array( $this, 'add_menu_js' ));
		}

		/**
		 * Register custom options and load options values
		 *
		 * @param obj $item Menu Item
		 * @return obj Menu Item
		 */
		public function add_custom_options($item) {

			foreach($this->_options as $option => $params) {
				$item->$option = get_post_meta($item->ID, $option, true);
				if ($item->$option===false) {
					$item->$option = $params['default'];
				}
			}

			return $item;
		}

		public function update_custom_options($menu_id, $menu_item_id, $args) {
			foreach($this->_options as $option => $params) {
				$key = 'menu-item-'. $option;

				//$option_value = $params['default']; // ???
				$option_value = '';

				if (isset($_REQUEST[$key], $_REQUEST[$key][$menu_item_id])) {
					$option_value = $_REQUEST[$key][$menu_item_id];
				}

				update_post_meta($menu_item_id, $option, $option_value );
			}
		}

		public function apply_edit_walker_class( $walker, $menu_id ) {
			return EVATHEME_EDIT_MENU_WALKER_CLASS;
		}

		public function add_menu_css() {
			$css = "
				.menu-item .evatheme-show-only-depth-0 { display: none; }
				.menu-item.menu-item-depth-0 .evatheme-show-only-depth-0 { display: block; }
				.menu-item .evatheme-hide-only-depth-0 { display: block; }
				.menu-item.menu-item-depth-0 .evatheme-hide-only-depth-0 { display: none; }
			";
			wp_add_inline_style('wp-admin', $css);
		}

		/*
		public function add_menu_js() {
			$js = '<script type="text/javascript">'
					. 'jQuery(document).ready(function($) {'
					. 'var menu_icon = $("input.edit-menu-item-_evatheme_mega_menu_icon");'
					. 'if (0 == menu_icon.siblings("a").length && false == menu_icon.hasClass("iconname")) {'
					. 'menu_icon.addClass("iconname").after("<a href=\"#\" class=\"button crum-icon-add\">'.__('Add icon', 'evatheme').'</a>");'
					. '}'
					. '});'
					. '</script>';

			echo esc_html( $js );
		}
		*/
	}
}
