<?php
global $eva_socials;
$eva_socials = array(
		'facebook' => array(
			'name' =>  'facebook_username',
			'link' => 'http://www.facebook.com/*',
		),
		'flickr'   => array(
			'name' =>  'flickr_username',
			'link' => 'http://www.flickr.com/photos/*'
		),
		'google-plus' => array(
			'name' => 'googleplus_username',
			'link' => 'https://plus.google.com/u/0/*'
		),
		'twitter' => array(
			'name' => 'twitter_username',
			'link' => 'http://twitter.com/*',
		),
		'instagram' => array(
			'name' => 'instagram_username',
			'link' => 'http://instagram.com/*',
		),
		'pinterest' => array(
			'name' => 'pinterest_username',
			'link' => 'http://pinterest.com/*',
		),
		'skype' => array(
			'name' => 'skype_username',
			'link' => 'skype:*'
		),
		'vimeo-square' =>  array(
			'name' => 'vimeo_username',
			'link' => 'http://vimeo.com/*',
		),
		'youtube' => array(
			'name' => 'youtube_username',
			'link' => 'http://www.youtube.com/user/*',
		),
		'dribbble' => array(
			'name' => 'dribbble_username',
			'link' => 'http://dribbble.com/*',
		),
		'linkedin' => array(
			'name' => 'linkedin_username',
			'link' => '*'
		),
		'rss' => array(
			'name' => 'rss_username',
			'link' => 'http://*/feed'
		)
);



// To excerpt
//=======================================================
if (!function_exists('to_excerpt')) {

	function to_excerpt($str, $length) {
		$str = strip_tags($str);
		$str = explode(" ", $str);
		return implode(" ", array_slice($str, 0, $length));
	}

}



// Go url
//=======================================================
if (!function_exists('to_url')) {

	function to_url($url) {
		if (!preg_match_all('!https?://[\S]+!', $url, $matches))
			$url = "http://" . $url;
		return $url;
	}

}



// Page,Post get, print content
//=======================================================
function loop_content() {
	global $eva_options, $more;
	$more = 0;
	$readMore = !empty($eva_options['more_text']) ? $eva_options['more_text'] : __('Read More', 'evatheme');

	if (has_excerpt()) {
		the_excerpt();
	} elseif (has_more()) {
		the_content("");
		echo '<a href="' . get_permalink() . '" class="btn more-link">' . apply_filters("widget_title", $readMore) . '</a>';
	} elseif (!empty($eva_options['excerpt_count'])) {
		echo apply_filters("the_content", to_excerpt(strip_shortcodes(get_the_content()), $eva_options['excerpt_count']));
		echo '<a href="' . get_permalink() . '" class="btn more-link">' . apply_filters("widget_title", $readMore) . '</a>';
	} else {

	}
}


function eva_option($index1, $index2=false) {
	global $smof_data;

	if($index2){
		$output = isset($smof_data[$index1][$index2]) ? $smof_data[$index1][$index2] : false;
		return $output;
	}
	$output = isset($smof_data[$index1]) ? $smof_data[$index1] : false;
	return $output;
}


// Page, Post custom metaboxes
//=======================================================
function get_metabox($name) {
	global $post;
	if ($post) {
		$metabox = get_post_meta($post->ID, 'evatheme_' . strtolower(THEMENAME) . '_options', true);
		return isset($metabox[$name]) ? $metabox[$name] : "";
	}
	return false;
}
function set_metabox($name,$val) {
	global $post;
	if ($post) {
		$metabox = get_post_meta($post->ID, 'evatheme_' . strtolower(THEMENAME) . '_options', true);
		$metabox[$name] = $val;
		return update_post_meta($post->ID, 'evatheme_' . strtolower(THEMENAME) . '_options', $metabox);
	}
	return false;
}



// Print menu
//=======================================================
function theme_menu(){
		wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'eva-menu-container clearfix',
			'menu_id' => 'menu',
			'theme_location' => 'main',
			'fallback_cb' => 'top_menu_fallback'
		));
}
function no_main(){
		echo "<div class='eva-menu-container clearfix'><ul id='menu' class='sf-menu'>";
			wp_list_pages(array('title_li' => ''));
		echo "</ul></div>";
}



// Print logo
//=======================================================
function theme_logo() {
	$top = eva_option('logo_top')!="" ? (' margin-top:'.eva_option('logo_top').'px;') : '';
	$bottom = eva_option('logo_bottom')!="" ? (' margin-bottom:'.eva_option('logo_bottom').'px;') : '';
	echo '<div class="eva-logo" style="'.$top.$bottom.'">';
	echo '<a class="logo" href="' . esc_url( home_url( '/' ) ) . '">';
	if (eva_option("theme_logo")=="") {
		bloginfo('name');
	} else {
		if(eva_option("logo_retina"))
			echo '<img class="logo-img" src="' . esc_url( eva_option("theme_logo_retina") ) . '" style="width:'.eva_option('logo_width').'px" alt="' . get_bloginfo('name') . '" />';
		else
			echo '<img class="logo-img" src="' . esc_url( eva_option("theme_logo") ) . '" alt="' . get_bloginfo('name') . '" />';
	}
	echo '</a>';
	echo '</div>';
}



// Footer logo
//=======================================================
function theme_footer_logo() {
	if (eva_option("theme_footer_logo")) {
		echo '<div id="footer_logo" class="span2">';
		echo '<a class="logo" href="' . esc_url( home_url( '/' ) ) . '">';
		if (eva_option("theme_footer_logo")=="") {
			bloginfo('name');
		} else {
			echo '<img src="' . esc_url( eva_option("theme_footer_logo") ) . '" alt="' . get_bloginfo('name') . '" />';
		}
		echo '</a>';
		echo '</div>';
	} else {}
}




// Get featured text
//=======================================================
function get_featuredtext() {
	global $post;

	if (is_singular()) {
		$return = "<h2>" . $post->post_title . "</h2>";
		return $return;
	} elseif (is_category()) {
		$return = "<h2>";
		$return .= __("Category", "evatheme") . " : " . single_cat_title("", false);
		$return .= "</h2>";
		return $return;
	} elseif (is_tax('portfolios')) {
		$return = "<h2>";
		$return .= __("Portfolio", "evatheme") . " : " . single_cat_title("", false);
		$return .= "</h2>";
		return $return;
	} elseif (is_tag()) {
		$return = "<h2>";
		$return .= __("Tag", "evatheme") . " : " . single_tag_title("", false);
		$return .= "</h2>";
		return $return;
	} elseif (is_404()) {
		$return = "<h2>" . __("Nothing Found!", "evatheme") . "</h2>";
		return $return;
	} elseif (is_author()) {
		$return = "<h2>" . __("Author: ", "evatheme") . get_the_author() . "</h2>";
		return $return;
	} elseif (is_archive()) {
		$return = "<h2>";
		if (is_day()){
			$return .= __("Daily Archives", "evatheme") . " : " . get_the_date();
		}elseif (is_month()) {
			$return .= __("Monthly Archives", "evatheme") . " : " . get_the_date("F Y");
		}elseif (is_year()) {
			$return .= __("Yearly Archives", "evatheme") . " : " . get_the_date("Y");
		}else {
			$return .= __("Blog Archives", "evatheme");
		}
		$return .= "</h2>";
		return $return;
	} elseif (is_search()) {
		$return = "<h2>" . __("Search results for", "evatheme") . " : " . get_search_query() . "</h2>";
		return $return;
	}
}



// Sidebar
//=======================================================
function sidebar($sidebar = 'sidebar') {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar($sidebar)) {

	}
}

function print_styles($links) {
	for ($i = 0; $i < count($links); $i++) {
		echo '<link type="text/css" rel="stylesheet" href="' . file_require(get_template_directory_uri() . '/' . $links[$i], true) . '" />';
	}

	echo '<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=' . str_replace(" ", "+", get_settings_value('head_felement')) . ':300,300italic,400,400italic,700,700italic,600,600italic" />';
	if (get_settings_value('body_felement') != get_settings_value('head_felement')) {
		echo '<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=' . str_replace(" ", "+", get_settings_value('body_felement')) . ':400,400italic,700,700italic" />';
	}
}


// Favicon
//=======================================================
function eva_favicon() {
	if (eva_option('theme_favicon')=="") {
		echo '<link rel="shortcut icon" href="' . THEME_DIR . '/assets/img/favicon.ico"/>';
	} else {
		echo '<link rel="shortcut icon" href="' . eva_option('theme_favicon') . '"/>';
	}
	if(eva_option('favicon_retina')) {
		echo eva_option('favicon_iphone')!="" ? ('<link rel="apple-touch-icon" href="' . esc_url( eva_option('favicon_iphone') ) . '"/>') : '';
		echo eva_option('favicon_iphone_retina')!="" ? ('<link rel="apple-touch-icon" sizes="114x114" href="' . esc_url( eva_option('favicon_iphone_retina') ) . '"/>') : '';
		echo eva_option('favicon_ipad')!="" ? ('<link rel="apple-touch-icon" sizes="72x72" href="' . esc_url( eva_option('favicon_ipad') ) . '"/>') : '';
		echo eva_option('favicon_ipad_retina')!="" ? ('<link rel="apple-touch-icon" sizes="144x144" href="' . esc_url( eva_option('favicon_ipad_retina') ) . '"/>') : '';
	}
}


// Portfolio Image
//=======================================================
function portfolio_image($height="", $width=660, $title=false) {
	global $post;
	if (has_post_thumbnail($post->ID)) {
		$_fakeThumb = get_the_post_thumbnail(); ?>
		<div class="loop-image">
			<div class="portfolio-img-wrap">
				<?php
					if (eva_option('wrapper')!="full_width") {
						echo post_image_show(700,555);
					} else {
						echo post_image_show($width,$height);
					}
				?>
				<a class="portfolio-zoom" rel="prettyPhoto" href="<?php echo post_image_show(0,0,true); ?>"><i class="fa fa-plus"></i></a>
			</div>
			<div class="portfolio-descr">
				<?php if($title) { ?>
					<h2 class="portfolio-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<span class="portfolio-date"><?php echo get_the_date(); ?></span>
					<?php echo like_btn_get(); ?>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}



// Post Standart
//=======================================================
function format_standard($portfolio=false, $height="", $width=1170) {
	global $post;
	if (has_post_thumbnail($post->ID)) {
		$link = get_permalink();
		$width = $portfolio ? $width : 380;
		$height = $portfolio ? $height : 300;
		if($portfolio) {
			$width = $portfolio ? $width : 1170;
			$height = $portfolio ? $height : get_metabox('image_height');
		}
		if(is_single()) {
			$lrg_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
			$link = $lrg_img[0];
			$width = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
			$height = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
		}

		if(is_single()) {
			?>
			<div class="loop-image">
				<?php echo post_image_show($width,$height); ?>
			</div>
			<?php
		} else {
			?>
			<div class="loop-image">
				<a href="<?php echo esc_url( $link ); ?>">
					<?php echo post_image_show($width,$height); ?>
				</a>
			</div>
			<?php
		}
	}
}



// Post Gallery
//=======================================================
function format_gallery($portfolio=false,$height=250,$width=370,$title=false) {
	global $post;
	$ids = get_post_meta($post->ID, 'gallery_image_ids', true);
	$class = $title ? ' with-title' : '';
	if(!empty($ids)) {
		?>
		<div class="loop-gallery flexslider">
			<ul class="slides clearfix" style="margin:0; list-style:none;">
				<?php
					$width = $portfolio ? $width : 380;
					$height = $portfolio ? $height : 300;
					if(is_single()&&$portfolio) {
						$width = 1170;
						$height = 520;
					}
					$i = 0;
					foreach(explode( ',', $ids ) as $id) {
						if(!empty($id)) {
							$i++;
							$imgurl0 = aq_resize(wp_get_attachment_url($id), $width, $height, true);
							$imgurl = !empty($imgurl0) ? $imgurl0 : wp_get_attachment_url($id);
							if(is_single()) {
								$i++;
								$imgurl0 = aq_resize(wp_get_attachment_url($id), true);
								$imgurl = !empty($imgurl0) ? $imgurl0 : wp_get_attachment_url($id);
							}
							?>
							<li>
								<img src="<?php echo esc_url( $imgurl ); ?>" alt="<?php the_title(); ?>">
							</li>
				<?php   }
					}
				?>
			</ul>
		</div>
		<div class="portfolio-descr">
			<?php if($title) { ?>
				<h2 class="portfolio-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<span class="portfolio-date"><?php echo get_the_date(); ?></span>
			<?php } ?>
		</div>
	<?php
	}
}

function format_image() {
	format_standard();
}

function jplayer_script() {
	wp_enqueue_script('jplayer_script', THEME_DIR.'/assets/js/jquery.jplayer.min.js', false, false, true);
}

function format_audio() {
	global $post;

	$audio_url = get_post_meta($post->ID, 'format_audio_mp3', true);
	$embed = get_post_meta($post->ID, 'format_audio_embed', true);
	if (!empty($embed)) {
		echo apply_filters("the_content", htmlspecialchars_decode($embed));
	} else {
		echo post_image_show();
		if (!empty($audio_url)) {
			add_action('wp_footer', 'jplayer_script');
			?>
			<div id="jquery_jplayer_<?php echo esc_attr( $post->ID ); ?>" class="jp-jplayer jp-jplayer-audio" data-pid="<?php echo esc_attr( $post->ID ); ?>" data-mp3="<?php echo esc_url( $audio_url ); ?>"></div>
			<div class="jp-audio-container">
				<div class="jp-audio">
					<div class="jp-type-single">
						<div id="jp_interface_<?php echo esc_attr( $post->ID ); ?>" class="jp-interface">
							<ul class="jp-controls">
								<li><div class="seperator-first"></div></li>
								<li><div class="seperator-second"></div></li>
								<li><a href="#" class="jp-play" tabindex="1"><i class="fa fa-play"></i></a></li>
								<li><a href="#" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
								<li><a href="#" class="jp-mute" tabindex="1"><i class="fa fa-volume-up"></i></a></li>
								<li><a href="#" class="jp-unmute" tabindex="1"><i class="fa fa-volume-off"></i></a></li>
							</ul>
							<div class="jp-progress-container">
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
							</div>
							<div class="jp-volume-bar-container">
								<div class="jp-volume-bar">
									<div class="jp-volume-bar-value"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
}

function format_video($portfolio=false,$video_embed="",$video_thumb="",$video_m4v="",$height="") {
	global $post;
	$start = $end = '';
	if($portfolio){
		if(!empty($height)) { $start = '<div class="video-height" style="height:'.$height.'px;">'; $end = '</div>'; }
	} else {
		if(empty($video_embed))
			$video_embed = get_post_meta($post->ID, 'format_video_embed', true);
		$video_thumb = get_post_meta($post->ID, 'format_video_thumb', true);
		$video_m4v = get_post_meta($post->ID, 'format_video_m4v', true);
	}

	if (!empty($video_embed)) {
		echo esc_html( $start );
		if($portfolio && !is_single()){
			echo '<a href="'.get_permalink().'">';
			echo vimeo_youtube_image(htmlspecialchars_decode($video_embed));
			echo '<div class="image-overlay hover-link"></div>';
			echo '</a>';
		} else {
			echo apply_filters("the_content", htmlspecialchars_decode($video_embed));
		}
		echo esc_html( $end );
	} elseif (!empty($video_m4v)) {
		add_action('wp_footer', 'jplayer_script');
		?>

		<div id="jquery_jplayer_<?php echo esc_attr( $post->ID ); ?>" class="jp-jplayer jp-jplayer-video" data-pid="<?php echo esc_attr( $post->ID ); ?>" data-m4v="<?php echo esc_attr( $video_m4v ); ?>" data-thumb="<?php echo esc_attr( $video_thumb ); ?>"></div>
		<div class="jp-video-container">
			<div class="jp-video">
				<div class="jp-type-single">
					<div id="jp_interface_<?php echo esc_attr( $post->ID ); ?>" class="jp-interface">
					   <ul class="jp-controls">
							<li><div class="seperator-first"></div></li>
							<li><div class="seperator-second"></div></li>
							<li><a href="#" class="jp-play" tabindex="1"><i class="fa fa-play"></i></a></li>
							<li><a href="#" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
							<li><a href="#" class="jp-mute" tabindex="1"><i class="fa fa-volume-up"></i></a></li>
							<li><a href="#" class="jp-unmute" tabindex="1"><i class="fa fa-volume-off"></i></a></li>
						</ul>
						<div class="jp-progress-container">
							<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>
								</div>
							</div>
						</div>
						<div class="jp-volume-bar-container">
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
   <?php
   }
}


function format_link() {
	global $post;

	$link_url = get_post_meta($post->ID, 'format_link_url', true);
	$url = !empty($link_url) ? to_url($link_url) : "#";
	echo '<div class="link-content">';
	echo '<h2 class="link-text"><a href="' . esc_url( $url ) . '" target="_blank">' . get_the_title() . '</a></h2>';
	echo '<a href="' . esc_url( $url ) . '" target="_blank"><span class="sub-title">- ' . $url . '</span></a></div>';
}



// Pagination
//=======================================================
function pagination() {
	global $wp_query;

	$pages = $wp_query->max_num_pages;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	if (empty($pages)) {
		$pages = 1;
	}

	if (1 != $pages) {

		$big = 9999; // need an unlikely integer
		echo "<div class='eva-pagination pagination clearfix'>";

		echo paginate_links(
				array(
					'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
					'end_size' => 3,
					'mid_size' => 6,
					'format' => '?paged=%#%',
					'current' => max(1, get_query_var('paged')),
					'total' => $wp_query->max_num_pages,
					'type' => '',
					'prev_text' => __('Previous', 'evatheme'),
					'next_text' => __('Next', 'evatheme'),
		));

		echo "</div>";

	}
}
if (!function_exists('infinite')) {

	function infinite() {
		global $wp_query;
		$pages = intval($wp_query->max_num_pages);
		$paged = (get_query_var('paged')) ? intval(get_query_var('paged')) : 1;
		if (empty($pages)) {
			$pages = 1;
		}
		if (1 != $pages) {
			echo '<div class="eva-pagination eva-infinite-scroll" data-has-next="'.($paged===$pages?'false':'true').'">';
			echo '<a class="btn-infinite-scroll no-more" href="#">' . __('No more posts', 'evatheme') . '</a>';
			echo '<a class="btn-infinite-scroll loading" href="#">' . __('Loading', 'evatheme') . '<i class="fa fa-refresh"></i></a>';
			echo '<a class="btn-infinite-scroll next" href="' . get_pagenum_link($paged + 1) . '">' . __('Show more', 'evatheme') . '<i class="fa fa-refresh"></i></a>';
			echo '</div>';
		}
	}

}



// Comments
//=======================================================
function comment_count() {

	if (comments_open()) {

		if (eva_option('facebook_comment')) {
			return '';//'<fb:comments-count data-href="' . get_permalink() . '"></fb:comments-count>';
		} else {

			$comment_count = get_comments_number('0', '1', '%');
			if ($comment_count == 0) {
					$comment_trans = __('No comment', 'evatheme');
			} else {
					$comment_trans = __('comments', 'evatheme') .' ('. $comment_count .')';
			}
			return "<li class='comments'><i class='fa fa-comment'></i><a href='" . get_comments_link() . "' title='" . esc_attr( $comment_trans ) . "' class='comment-count'>" . $comment_trans . "</a></li>";
		}
	}
}

if (!function_exists('mytheme_comment')) {

	function mytheme_comment($comment, $args, $depth) {

		$GLOBALS['comment'] = $comment;
		print '<div class="comment-block">';
		?>
		<div class="comment" id="comment-<?php comment_ID();?>">
			<?php echo get_avatar($comment, $size = '70'); ?>
			<div class="comment-content">
				<span class="reply-line"></span>
				<h6 class="comment-author-link"><?php echo __('','evatheme'). " " . get_comment_author_link(); ?></h6>
				<span class="comment-date theme_color"><?php printf(__('%1$s', 'evatheme'), get_comment_date('j F Y'));?></span>
				<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				<div class="comment-text"><?php comment_text() ?></div>
			</div>
		</div><?php
	}

}



if (!function_exists('eva_comment_form')) {

	function eva_comment_form($fields) {
		global $id, $post_id;
		if (null === $post_id)
			$post_id = $id;
		else
			$id = $post_id;

		$commenter = wp_get_current_commenter();

		$req = get_option('require_name_email');
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$fields = array(
			'author' => '<div class="row-fluid"><p class="comment-form-author span4">' .
			'<label>' . __('Name <span>(required)</span>', 'evatheme') . '</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
			'email' => '<p class="comment-form-email span4">' .
			'<label>' . __('E-mail <span>(required)</span>', 'evatheme') . '</label><input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
			'url' => '<p class="comment-form-url span4">' .
			'<label>' . __('Web Site', 'evatheme') . '</label><input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p></div>',
		);
		return $fields;
	}

	add_filter('comment_form_default_fields', 'eva_comment_form');

}
if (!function_exists('post_image_show')) {
	function post_image_show($width = 0, $height = "", $returnURL=false) {
		is_array($height) && $height = '';
		global $post;
		if (has_post_thumbnail($post->ID)) {
			$attachment = get_post(get_post_thumbnail_id($post->ID));
			if (isset($attachment)) {
				$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
				$alt = !empty($alt) ? $alt : $attachment->post_title;
				$lrg_img = wp_get_attachment_image_src($attachment->ID, 'full');
				$url = $lrg_img[0];
				if ($width != 0) {
					$url = aq_resize($url, $width, $height, true);
				}
				$urll = !empty($url)?$url:$lrg_img[0];
				if($returnURL){
					return $urll;
				}else{
					$style = (is_single()&&!empty($height)) ? (' style="height:'.$height.'px"') : '';
					return '<img src="' . esc_url( $urll ) . '" alt="' . $alt . '"'.$style.'/>';
				}
			}
			else
				return false;
		}
		return false;
	}
}
if (!function_exists('about_author')) {
	function about_author() {
		$eva_author = false;
		if (get_metabox("post_authorr") == "true") {
			$eva_author = true;
		} else if (get_metabox("post_authorr") != "false") {
			if (eva_option('post_author')) {
				$eva_author = true;
			}
		}
		if ($eva_author) { ?>
			<div class="eva-author clearfix">
				<div class="author-image"><?php
					$eva_author_email = get_the_author_meta('email');
					echo get_avatar($eva_author_email, $size = '56'); ?>
				</div>
				<h3><?php _e("Written by ", "evatheme");
					if (is_author())
						the_author();
					else
						the_author_posts_link(); ?>
				</h3>
				<div class="author-title-line"></div>
				<p><?php
					$description = get_the_author_meta('description');
					if ($description != '')
						echo esc_html( $description );
					else
						_e('The author did not add any Information to his profile yet', 'evatheme'); ?>
				</p>
			</div><?php
		}
	}
}

function related_portfolios() {

	global $post, $eva_options;


	$tags = wp_get_post_terms($post->ID, 'portfolios', array("fields" => "ids"));

	if ($tags) {
		$tag_ids = "";
		foreach ($tags as $tag)
			$tag_ids .= $tag . ",";


		$query = Array(
			'post_type' => 'portfolio',
			'posts_per_page' => '4',
			'post__not_in' => array($post->ID),
			'tax_query' => Array(Array(
					'taxonomy' => 'portfolios',
					'terms' => $tag_ids,
					'field' => 'id'
				))
		);
		query_posts($query);
		$eva_options['pagination'] = 'none';
		echo '<div class="eva-portfolio">';
		get_template_part("loop", "portfolio");
		echo '</div>';
	}
}


function eva_social() {
	global $eva_socials;
	foreach ($eva_socials as $key => $social) {
		if(eva_option($social['name'])!=""){
			echo '<a href="'.str_replace('*',eva_option($social['name']),$social['link']).'" target="_blank" title="'.$key.'" class="'.$key.'"><i class="fa fa-'.$key.'"></i></a>';
		}
	}
}


function vimeo_youtube_image($embed) {

	preg_match('/src=\"(.*?)\"/si', $embed, $filteredContent);

	if(!empty($filteredContent[1])) {
		$url = $filteredContent[1];
		$youtube = strpos($url, 'youtube.com');
		$youtu = strpos($url, 'youtu.be');
		$vimeo = strpos($url, 'vimeo.com');

		$video_id = '';
		$spliturl = explode("/", $url);
		$video_id = $spliturl[count($spliturl) - 1];
		if ($video_id == "") {
			$video_id = $spliturl[count($spliturl) - 2];
		}
	} else {
		$url = $embed;
		$youtube = strpos($url, 'youtube.com');
		$youtu = strpos($url, 'youtu.be');
		$vimeo = strpos($url, 'vimeo.com');

		$video_id = '';
		$spliturl = explode("/", $url);
		$video_id = $spliturl[count($spliturl) - 1];
		if ($video_id == "") {
			$video_id = $spliturl[count($spliturl) - 2];
		} else {
			$spliturl = explode("=", $url);
			$video_id = $spliturl[count($spliturl) - 1];
		}
	}

	$video_img = '';

	if ($youtube || $youtu) {
		$video_img = '<img src="http://img.youtube.com/vi/' . $video_id . '/0.jpg" class="image_youtube" />';
	} else if ($vimeo) {
		$json = @file_get_contents("http://vimeo.com/api/oembed.json?url=http%3A//vimeo.com/" . $video_id, true);
		if (strpos($http_response_header[0], "200")) {
			$data = json_decode($json, true);
			$video_thumb = $data['thumbnail_url'];
			$video_thumb = str_replace("_1280", "_640", $video_thumb);
			$video_img = '<img src="' . $video_thumb . '" class="image_vimeo" />';
		}
		if (strlen($video_img) < 1) {
			$video_img = "";
		}
	}

	return $video_img;
}



/* ================================================================================== */
/*      Like Button
/* ================================================================================== */
/*LIKE BTN FUNCTION*/
function like_btn_get() {
   global $post;
	$likeit = get_post_meta($post->ID, 'post_likeit', true);
	$likecount = empty($likeit) ? '0' : $likeit;
	$likedclass = 'likeit';
	if (isset($_COOKIE['likeit-' . $post->ID])) {
		$likedclass .= ' liked';
	}
	$output = '<div data-ajaxurl="'.home_url().'" data-pid="'.$post->ID.'" class="'.$likedclass.'">';
		$output .= '<i class="fa fa-heart-o"></i><span>'.$likecount.(is_single() ? __(' Likes', 'evatheme') : ''). '</span>';
	$output .= '</div>';
	return $output;
}

if (isset($_REQUEST['liked_pid'])) {
	$pid = intval($_REQUEST['liked_pid']);
	$liked = get_post_meta($pid, 'post_likeit', true);
	if (!isset($_COOKIE['likeit-' . $pid])) {
		if (empty($liked)) {
			$liked = 1;
		} else {
			$liked = (intval($liked) + 1);
		}
		update_post_meta($pid, 'post_likeit', $liked);
		setcookie('likeit-' . $pid, 1);
	}
	print "<div><div id='portfolio_liked'>$liked</div></div>";
	die;
}
?>
