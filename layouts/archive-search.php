<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_5 = upfront_create_region(
			array(
"name" => "region-5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-5", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 69, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-search/Search-Bg.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => false
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$region_5->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "12", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">SEARCH</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525024896-1770", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408525051645-1279", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 18
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
		)
	)
));

$regions->add($region_5);

$region_4 = upfront_create_region(
			array(
"name" => "region-4", 
"title" => "Region 4", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-4", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => false
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$region_4->add_element("PlainTxt", array(
"columns" => "13", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1415778973667-1628", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h5>
SEARCH RESULTS
</h5>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1415778973667-1312", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 15, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "search-headers"
	), 
"wrapper_id" => "wrapper-1415779285309-1067", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 16
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 14
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1415781113430-1720", 
"rows" => 9, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h5 class=\"\">
SEARCH</h5>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1415781113431-1250", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 9, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "search-headers"
	), 
"wrapper_id" => "wrapper-1415781260199-1075", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 12
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6
		)
	)
));

$region_4->add_element("Posts", array(
"columns" => "12", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1415778973694-1534", 
"rows" => 20, 
"options" => array(
	"type" => "PostsModel", 
	"view_class" => "PostsView", 
	"has_settings" => 1, 
	"class" => "c24 uposts-object", 
	"id_slug" => "posts", 
	"display_type" => "list", 
	"list_type" => "generic", 
	"offset" => 1, 
	"taxonomy" => "", 
	"term" => "", 
	"content" => "excerpt", 
	"limit" => 10, 
	"pagination" => "numeric", 
	"posts_list" => "", 
	"post_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"enabled_post_parts" => array("date_posted", "title", "categories"), 
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"element_id" => "posts-object-1417752626112-1080", 
	"resize_featured" => "", 
	"anchor" => "", 
	"theme_style" => "archive-search-results", 
	"row" => 20
	), 
"wrapper_id" => "wrapper-1415781319760-1983", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 15
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 12
		)
	)
));

$region_4->add_element("Usearch", array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1415779956324-1711", 
"rows" => 16, 
"options" => array(
	"type" => "UsearchModel", 
	"view_class" => "UsearchView", 
	"class" => "c24 upfront-search", 
	"has_settings" => 1, 
	"id_slug" => "usearch", 
	"placeholder" => "Wellness", 
	"label" => "__image__", 
	"is_rounded" => 0, 
	"color" => "", 
	"element_id" => "object-1415779956325-1046", 
	"row" => 16, 
	"theme_style" => "footer-search", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 10
			)
		)
	), 
"wrapper_id" => "wrapper-1415781244416-1525", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 7
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 6, 
		"top" => 6, 
		"order" => 3
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 8, 
		"order" => 3, 
		"row" => 16, 
		"hide" => 1
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 5, 
		"top" => 1, 
		"hide" => 1
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 6, 
		"hide" => 1
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6, 
		"hide" => 1
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 6, 
		"hide" => 1
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"hide" => 1
		), 
	"custom-1410780542364" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 5, 
		"hide" => 1, 
		"top" => 0
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1415781161210-1356", 
"rows" => 9, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h5 class=\"\">CATEGORY</h5>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1415781161210-1035", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 9, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "search-headers"
	), 
"wrapper_id" => "wrapper-1415781244416-1525", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		)
	)
));

$region_4->add_element("Uwidget", array(
"columns" => "6", 
"margin_left" => "16", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1415779914088-1513", 
"rows" => 7, 
"options" => array(
	"id_slug" => "uwidget", 
	"type" => "UwidgetModel", 
	"view_class" => "UwidgetView", 
	"class" => "c24 upfront-widget", 
	"has_settings" => 1, 
	"widget" => "WP_Widget_Categories", 
	"element_id" => "uwidget-object-1415779914086-1665", 
	"selected_widget" => "WP_Widget_Categories", 
	"anchor" => "", 
	"widget_specific_fields" => array(
		"widget-categories--title" => array(
			"label" => "Title:", 
			"name" => "title", 
			"type" => "text", 
			"value" => ""
			), 
		"widget-categories--dropdown" => array(
			"name" => "dropdown", 
			"type" => "checkbox", 
			"value" => "", 
			"label" => "Display as dropdown"
			), 
		"widget-categories--count" => array(
			"name" => "count", 
			"type" => "checkbox", 
			"value" => "", 
			"label" => "Show post counts"
			), 
		"widget-categories--hierarchical" => array(
			"name" => "hierarchical", 
			"type" => "checkbox", 
			"value" => "", 
			"label" => "Show hierarchy"
			)
		), 
	"title" => "", 
	"dropdown" => array(), 
	"count" => array(), 
	"hierarchical" => array(), 
	"theme_style" => "uwidget-categories-style", 
	"row" => 7
	), 
"wrapper_id" => "wrapper-1418045112283-1677", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 9
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"col" => 12
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6
		)
	)
));

$regions->add($region_4);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

