<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_4 = upfront_create_region(
			array(
"name" => "region-4", 
"title" => "Region 4", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-4", 
"position" => 10, 
"allow_sidebar" => true
),
			array(
"row" => 57, 
"background_type" => "featured", 
"nav_region" => "", 
"background_color" => "#fafafa", 
"background_style" => "full", 
"background_position_y" => "50", 
"background_position_x" => "50"
)
			);

$region_4->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_top" => "11", 
"id" => "module-1416474833168-1788", 
"rows" => 33, 
"options" => array(
	"content" => "<h1 class=\"\" style=\"text-align: center;\">BLOG</h1>", 
	"type" => "PlainTxtModel", 
	"view_class" => "PlainTxtView", 
	"element_id" => "text-object-1416474833167-1271", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"id_slug" => "plain_text", 
	"is_edited" => true, 
	"row" => 33
	), 
"wrapper_id" => "wrapper-1416475121461-1671", 
"new_line" => "true"
));

$regions->add($region_4);

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

$region_2 = upfront_create_region(
			array(
"name" => "region-2", 
"title" => "Region 2", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-2", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60
)
			);

$region_2->add_element("ThisPost", array(
"columns" => "18", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "default-post", 
"rows" => 73, 
"options" => array(
	"type" => "ThisPostModel", 
	"view_class" => "ThisPostView", 
	"class" => "c24 uposts-object", 
	"has_settings" => 1, 
	"id_slug" => "upost", 
	"row" => 67, 
	"post_data" => array("author", "date", "comments_count", "featured_image"), 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "1", 
	"content_type" => "full", 
	"featured_image" => 1, 
	"pagination" => 0, 
	"prev" => "", 
	"next" => "", 
	"postLayout" => array(array(
			"objects" => array(array(
					"classes" => "post_date post-part c2 ml0 mt1", 
					"slug" => "date"
					)), 
			"classes" => "c2 clr"
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c22 ml0 mt1", 
					"slug" => "title"
					)), 
			"classes" => "c22 "
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c22 ml2 mt1", 
					"slug" => "categories"
					)), 
			"classes" => "c22 "
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c20 ml2 mt5", 
					"slug" => "author"
					)), 
			"classes" => "c20 "
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c4 ml0 mt5", 
					"slug" => "comments_count"
					)), 
			"classes" => "c4 "
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c24 ml2 mt8", 
					"slug" => "contents"
					)), 
			"classes" => "c24 "
			), array(
			"objects" => array(array(
					"classes" => "post-part 24 c24 ml2 mt8", 
					"slug" => "featured_image"
					)), 
			"classes" => "c24 "
			)), 
	"partOptions" => array(
		"featured_image" => array(
			"height" => 38
			), 
		"title" => array(
			"theme_style" => "_default", 
			"anchor" => ""
			), 
		"date" => array(
			"format" => "j M", 
			"height" => 10
			)
		), 
	"element_id" => "default-post-object", 
	"theme_style" => "blog-page-feed", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408977742068-1128", 
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

$region_2->add_element("SocialMedia", array(
"columns" => "18", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1409046990936-1993", 
"rows" => 12, 
"options" => array(
	"social_type" => "likes", 
	"like_social_media_services" => array("facebook", "twitter", "google"), 
	"count_social_media_services" => array(), 
	"button_size" => "medium", 
	"button_style" => "button-style-2", 
	"call_social_media_services" => array(), 
	"id_slug" => "SocialMedia", 
	"type" => "SocialMediaModel", 
	"view_class" => "SocialMediaView", 
	"class" => "c24 upfront-Social-Media", 
	"has_settings" => 1, 
	"counter_options" => "horizontal", 
	"counter_style" => "horizontal", 
	"element_id" => "SocialMedia-object-1409046990934-1531", 
	"after_content" => "yes", 
	"after_content_align" => "right", 
	"services" => array(array(
			"id" => "facebook", 
			"active" => 1, 
			"meta" => array(), 
			"name" => "Facebook", 
			"url" => "https://www.facebook.com/wpmudev"
			), array(
			"id" => "twitter", 
			"active" => 1, 
			"meta" => array(), 
			"name" => "Twitter", 
			"url" => "https://twitter.com/wpmudev"
			), array(
			"id" => "google", 
			"active" => 1, 
			"meta" => array(), 
			"name" => "Google +", 
			"url" => "https://plus.google.com/+wpmuorg/posts"
			)), 
	"button_services" => array(array(
			"id" => "facebook", 
			"active" => false, 
			"meta" => array(), 
			"name" => "Facebook", 
			"url" => ""
			), array(
			"id" => "twitter", 
			"active" => false, 
			"meta" => array(array(
					"id" => "consumer_key", 
					"name" => "Consumer Key", 
					"value" => ""
					), array(
					"id" => "consumer_secret", 
					"name" => "Consumer Secret", 
					"value" => ""
					)), 
			"name" => "Twitter", 
			"url" => ""
			), array(
			"id" => "google", 
			"active" => false, 
			"meta" => array(), 
			"name" => "Google +", 
			"url" => ""
			), array(
			"id" => "linked-in", 
			"name" => "Linked in", 
			"active" => false, 
			"url" => "", 
			"meta" => array()
			), array(
			"id" => "pinterest", 
			"name" => "Pinterest", 
			"active" => false, 
			"url" => "", 
			"meta" => array()
			), array(
			"id" => "youtube", 
			"name" => "Youtube", 
			"active" => false, 
			"url" => "", 
			"meta" => array()
			))
	), 
"wrapper_id" => "wrapper-1409048266228-1807", 
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

$region_2->add_element("Ucomment", array(
"columns" => "18", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "default-comment", 
"rows" => 10, 
"options" => array(
	"id_slug" => "ucomment", 
	"type" => "UcommentModel", 
	"view_class" => "UcommentView", 
	"class" => "c24 upfront-comment", 
	"has_settings" => 0, 
	"prepend_form" => false, 
	"element_id" => "default-comment-object",
    "theme_style" => "blog-page-feed"
	), 
"wrapper_id" => "default-comment-wrapper", 
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

$regions->add($region_2);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

