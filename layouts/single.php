<?php
$region_1 = upfront_create_region(
			array(
"name" => "region-1", 
"title" => "Region 1", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-1", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 12, 
"background_type" => "color", 
"nav_region" => "top", 
"background_color" => "rgba(105,168,166,0.85)", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false
		), 
	"custom-1408717918354" => array(
		"edited" => false
		), 
	"custom-1408717978058" => array(
		"edited" => false
		), 
	"custom-1408718022181" => array(
		"edited" => false
		), 
	"tablet" => array(
		"edited" => false
		), 
	"custom-1408718098456" => array(
		"edited" => false
		)
	)
)
			);

$region_1->add_element("Uimage", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "image", 
"rows" => 5, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single/logo-nav-105x42-8582.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single/logo-nav.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single/logo-nav.png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 105, 
		"height" => 42
		), 
	"fullSize" => array(
		"width" => 105, 
		"height" => 42
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 105, 
		"height" => 45
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "77", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"row" => -1, 
	"theme_style" => "small-logo", 
	"anchor" => "", 
	"element_id" => "image-object", 
	"breakpoint" => array(
		"custom-1408718098456" => array(
			"row" => 10
			)
		)
	), 
"wrapper_id" => "image-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 3
		), 
	"mobile" => array(
		"col" => 3
		), 
	"custom-1410783042947" => array(
		"col" => 3
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		)
	)
));

$region_1->add_element("Unewnavigation", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "unewnavigation", 
"rows" => 4, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 154, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "About", 
			"menu-item-url" => "" . get_site_url() . "/template-about/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "154", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 155, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Services", 
			"menu-item-url" => "" . get_site_url() . "/template-services/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "155", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 156, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Testimonials", 
			"menu-item-url" => "" . get_site_url() . "/template-testimonials/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "156", 
			"menu-item-target" => "", 
			"menu-item-position" => 3, 
			"sub" => array(array(
					"menu-item-db-id" => 157, 
					"menu-item-parent-id" => "156", 
					"menu-item-type" => "custom", 
					"menu-item-title" => "Link Name", 
					"menu-item-url" => "http://test", 
					"menu-item-object" => "custom", 
					"menu-item-object-id" => "157", 
					"menu-item-target" => "", 
					"menu-item-position" => 4
					), array(
					"menu-item-db-id" => 158, 
					"menu-item-parent-id" => "156", 
					"menu-item-type" => "custom", 
					"menu-item-title" => "testing 123", 
					"menu-item-url" => "http://ererewre", 
					"menu-item-object" => "custom", 
					"menu-item-object-id" => "158", 
					"menu-item-target" => "", 
					"menu-item-position" => 9
					))
			), array(
			"menu-item-db-id" => 159, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Gallery", 
			"menu-item-url" => "" . get_site_url() . "/template-gallery/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "159", 
			"menu-item-target" => "", 
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 160, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Contactus", 
			"menu-item-url" => "" . get_site_url() . "/template-contactus/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "160", 
			"menu-item-target" => "", 
			"menu-item-position" => 6
			), array(
			"menu-item-db-id" => 161, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Login", 
			"menu-item-url" => "" . get_site_url() . "/template-login/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "161", 
			"menu-item-target" => "", 
			"menu-item-position" => 7
			), array(
			"menu-item-db-id" => 162, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Page", 
			"menu-item-url" => "" . get_site_url() . "/default-page/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "162", 
			"menu-item-target" => "", 
			"menu-item-position" => 8
			)), 
	"menu_style" => "vertical", 
	"menu_alignment" => "center", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "main-menu", 
	"row" => -2, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array(), 
	"theme_style" => "main-nav", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 12, 
			"width" => 810, 
			"burger_menu" => "yes", 
			"burger_alignment" => "left", 
			"burger_over" => "over"
			), 
		"custom-1408717978058" => array(
			"burger_menu" => "yes", 
			"width" => 720, 
			"row" => 9
			), 
		"custom-1408718022181" => array(
			"burger_menu" => "yes", 
			"width" => 630, 
			"row" => 7
			), 
		"custom-1408718098456" => array(
			"burger_menu" => "yes", 
			"width" => 450, 
			"row" => 6
			), 
		"tablet" => array(
			"row" => 6, 
			"width" => 570, 
			"burger_menu" => "yes", 
			"burger_alignment" => "left", 
			"burger_over" => "over"
			), 
		"custom-1408717728290" => array(
			"burger_menu" => "yes", 
			"width" => 990
			), 
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			)
		), 
	"element_id" => "unewnavigation-object"
	), 
"wrapper_id" => "unewnavigation-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 3
		), 
	"mobile" => array(
		"col" => 3
		), 
	"custom-1410783042947" => array(
		"col" => 3
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 4, 
		"top" => 0, 
		"row" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"row" => 15, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"row" => 13
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"row" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"row" => 12
		)
	)
));

$region_1->add_element("Code", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408627223296-1753", 
"rows" => 11, 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1408627223294-1046", 
	"code_selection_type" => "Create", 
	"markup" => "<ul class=\"socials\">
  <li class=\"youtube\"><a href=\"http://youtube.com\"></a></li>
  <li class=\"facebook\"><a href=\"http://facebook.com\"></a></li>
  <li class=\"twitter\"><a href=\"http://twitter.com\"></a></li>
</ul>", 
	"style" => ".socials {
    list-style: none;
    padding: 0px;
    margin: 13px 0px;
}
.socials li {
    display: inline-block;
}
.socials li a {
    background: url(wp-content/themes/Spirit/images/sprite.png) left top;   
    display: block;
    width: 35px;
    height: 34px;
    margin: 0 5px;
}

.socials li.youtube a { background-position: 0px -90px; }
.socials li.youtube a:hover { background-position: 0px -139px; }

.socials li.facebook a { background-position: -46px -90px; }
.socials li.facebook a:hover { background-position: -46px -139px; }

.socials li.twitter a { background-position: -91px -90px; }
.socials li.twitter a:hover { background-position: -91px -139px; }", 
	"script" => "/* Your code here */", 
	"row" => 5
	), 
"wrapper_id" => "wrapper-1408627457712-1308", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5
		), 
	"mobile" => array(
		"col" => 5
		), 
	"custom-1410783042947" => array(
		"col" => 5
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 4, 
		"top" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 4, 
		"top" => 0
		)
	)
));

$regions->add($region_1);

$header = upfront_create_region(
			array(
"name" => "header", 
"title" => "Header Area", 
"type" => "wide", 
"scope" => "local", 
"container" => "header", 
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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single/Blog-Bg.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%"
)
			);

$header->add_element("PlainTxt", array(
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

$regions->add($header);

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

//$region_2->add_element("SocialMedia", array(
//"columns" => "18",
//"margin_left" => "2",
//"margin_right" => "0",
//"margin_top" => "0",
//"margin_bottom" => "0",
//"id" => "module-1409046990936-1993",
//"rows" => 12,
//"options" => array(
//	"social_type" => "likes",
//	"like_social_media_services" => array("facebook", "twitter", "google"),
//	"count_social_media_services" => array(),
//	"button_size" => "medium",
//	"button_style" => "button-style-2",
//	"call_social_media_services" => array(),
//	"id_slug" => "SocialMedia",
//	"type" => "SocialMediaModel",
//	"view_class" => "SocialMediaView",
//	"class" => "c24 upfront-Social-Media",
//	"has_settings" => 1,
//	"counter_options" => "horizontal",
//	"counter_style" => "horizontal",
//	"element_id" => "SocialMedia-object-1409046990934-1531",
//	"after_content" => "yes",
//	"after_content_align" => "right",
//	"services" => array(array(
//			"id" => "facebook",
//			"active" => 1,
//			"meta" => array(),
//			"name" => "Facebook",
//			"url" => "https://www.facebook.com/wpmudev"
//			), array(
//			"id" => "twitter",
//			"active" => 1,
//			"meta" => array(),
//			"name" => "Twitter",
//			"url" => "https://twitter.com/wpmudev"
//			), array(
//			"id" => "google",
//			"active" => 1,
//			"meta" => array(),
//			"name" => "Google +",
//			"url" => "https://plus.google.com/+wpmuorg/posts"
//			)),
//	"button_services" => array(array(
//			"id" => "facebook",
//			"active" => false,
//			"meta" => array(),
//			"name" => "Facebook",
//			"url" => ""
//			), array(
//			"id" => "twitter",
//			"active" => false,
//			"meta" => array(array(
//					"id" => "consumer_key",
//					"name" => "Consumer Key",
//					"value" => ""
//					), array(
//					"id" => "consumer_secret",
//					"name" => "Consumer Secret",
//					"value" => ""
//					)),
//			"name" => "Twitter",
//			"url" => ""
//			), array(
//			"id" => "google",
//			"active" => false,
//			"meta" => array(),
//			"name" => "Google +",
//			"url" => ""
//			), array(
//			"id" => "linked-in",
//			"name" => "Linked in",
//			"active" => false,
//			"url" => "",
//			"meta" => array()
//			), array(
//			"id" => "pinterest",
//			"name" => "Pinterest",
//			"active" => false,
//			"url" => "",
//			"meta" => array()
//			), array(
//			"id" => "youtube",
//			"name" => "Youtube",
//			"active" => false,
//			"url" => "",
//			"meta" => array()
//			))
//	),
//"wrapper_id" => "wrapper-1409048266228-1807",
//"wrapper_breakpoint" => array(
//	"tablet" => array(
//		"col" => 20
//		),
//	"mobile" => array(
//		"col" => 20
//		),
//	"custom-1410783042947" => array(
//		"col" => 20
//		)
//	)
//));

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
	"element_id" => "default-comment-object"
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

