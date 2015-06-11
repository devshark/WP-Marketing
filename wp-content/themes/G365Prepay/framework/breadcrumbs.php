<?php
/*

	Source: http://dimox.net/wordpress-breadcrumbs-without-a-plugin/

*/

if (!function_exists('breadcrumbs')) {
    function breadcrumbs() {

	/* === OPTIONS === */
	$text['location'] = __('', 'evatheme'); // text for the 'Home' link
	$text['home']     = __('Home', 'evatheme'); // text for the 'Home' link
	$text['category'] = __('Archive by Category "%s"', 'evatheme'); // text for a category page
	$text['search']   = __('Search Results for "%s" query', 'evatheme'); // text for a search results page
	$text['tag']      = __('Posts Tagged "%s"', 'evatheme'); // text for a tag page
	$text['author']   = __('Articles Posted by %s', 'evatheme'); // text for an author page
	$text['404']      = __('Error 404', 'evatheme'); // text for the 404 page

	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$showOnHome  = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter   = ''; // delimiter between crumbs
	$before      = '<span class="current">'; // tag before the current crumb
	$after       = '</span>'; // tag after the current crumb
	/* === END OF OPTIONS === */

	global $post;
	$homeLink = home_url() . '';
	$linkBefore = '<span>';
	$linkAfter = '</span>';
	$linkAttr = '';
	$link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;


        echo '<div id="breadcrumbs-wrap">' . esc_html( $text['location'] );

	if (is_home() || is_front_page()) {

		if ($showOnHome == 1) echo '<span><a href="' . esc_url( $homeLink ) . '">' . esc_html( $text['home'] ) . '</a></span>';

	} else {

		echo sprintf($link, esc_url( $homeLink ), esc_html( $text['home'] )) . esc_html( $delimiter );

		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) {
				$cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo htmlspecialchars_decode( esc_html( $cats ) );
			}
			echo htmlspecialchars_decode( esc_html( $before ) ) . sprintf($text['category'], single_cat_title('', false)) . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_search() ) {
			echo htmlspecialchars_decode( esc_html( $before ) ) . sprintf($text['search'], get_search_query()) . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_day() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . esc_html( $delimiter );
			echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . esc_html( $delimiter );
			echo htmlspecialchars_decode( esc_html( $before ) ) . get_the_time('d') . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_month() ) {
			echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . esc_html( $delimiter );
			echo htmlspecialchars_decode( esc_html( $before ) ) . get_the_time('F') . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_year() ) {
			echo htmlspecialchars_decode( esc_html( $before ) ) . get_the_time('Y') . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
				if ($showCurrent == 1) echo esc_html( $delimiter ) . htmlspecialchars_decode( esc_html( $before ) ) . get_the_title() . htmlspecialchars_decode( esc_html( $after ) );
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, $delimiter);
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
				$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
				$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
				echo htmlspecialchars_decode( esc_html( $cats ) );
				if ($showCurrent == 1) echo htmlspecialchars_decode( esc_html( $before ) ) . get_the_title() . htmlspecialchars_decode( esc_html( $after ) );
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo htmlspecialchars_decode( esc_html( $before ) ) . $post_type->labels->singular_name . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, $delimiter);
			$cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
			$cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
			echo htmlspecialchars_decode( esc_html( $cats ) );
			printf($link, get_permalink($parent), $parent->post_title);
			if ($showCurrent == 1) echo esc_html( $delimiter ) . htmlspecialchars_decode( esc_html( $before ) ) . get_the_title() . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_page() && !$post->post_parent ) {
			if ($showCurrent == 1) echo htmlspecialchars_decode( esc_html( $before ) ) . get_the_title() . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo htmlspecialchars_decode( esc_html( $breadcrumbs[$i] ) );
				if ($i != count($breadcrumbs)-1) echo esc_html( $delimiter );
			}
			if ($showCurrent == 1) echo esc_html( $delimiter ) . htmlspecialchars_decode( esc_html( $before ) ) . get_the_title() . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_tag() ) {
			echo htmlspecialchars_decode( esc_html( $before ) ) . sprintf($text['tag'], single_tag_title('', false)) . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_author() ) {
	 		// global $eva_author;
			// $userdata = get_userdata($eva_author);
			$userdata = get_user_by( 'id', $post->post_author );
			echo htmlspecialchars_decode( esc_html( $before ) ) . sprintf($text['author'], $userdata->display_name) . htmlspecialchars_decode( esc_html( $after ) );

		} elseif ( is_404() ) {
			echo htmlspecialchars_decode( esc_html( $before ) ) . $text['404'] . htmlspecialchars_decode( esc_html( $after ) );
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page', 'evatheme') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

	}
        echo '</div>';
    } // end breadcrumbs()
}
