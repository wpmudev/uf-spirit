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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive/Blog-Bg.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%"
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
	"content" => "<h1 class=\"\" style=\"text-align: center;\">BLOG</h1>", 
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
		"col" => 23
		), 
	"mobile" => array(
		"col" => 23
		), 
	"custom-1410783042947" => array(
		"col" => 23
		)
	)
));

$regions->add($region_5);

$region_3 = upfront_create_region(
			array(
"name" => "region-3", 
"title" => "Region 3", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-3", 
"position" => 1, 
"allow_sidebar" => true
),
			array()
			);

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408529844144-1619", 
"rows" => 7, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/\" rel=\"entry\">HOME</a>  &nbsp;/ &nbsp; BLOG</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408529844142-1195", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "breadcrumbs", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408529977772-1644", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 23
		), 
	"mobile" => array(
		"col" => 23
		), 
	"custom-1410783042947" => array(
		"col" => 23
		)
	)
));

$regions->add($region_3);

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
"row" => 60
)
			);

$region_4->add_element("Uposts", array(
"columns" => "18", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1408714915754-1518", 
"rows" => 48, 
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
	"enabled_post_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"element_id" => "posts-object-1417752626112-1080"
	), 
"wrapper_id" => "wrapper-1408714949691-1226", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 20
		), 
	"mobile" => array(
		"col" => 20
		), 
	"custom-1410783042947" => array(
		"col" => 20
		)
	)
));
$regions->add($region_4);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

