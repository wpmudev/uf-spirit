<?php
$region_1_nav = upfront_create_region(
			array(
"name" => "region-1_nav", 
"title" => "Region 1 Nav", 
"type" => "wide", 
"scope" => "global", 
"container" => "region-1", 
"sub" => "top", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
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
$regions->add($region_1_nav);
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
	"src" => "" . get_stylesheet_directory_uri() . "/images/contact/logo-nav-105x42-8582.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/contact/logo-nav.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/contact/logo-nav.png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => "below_image", 
	"caption_alignment" => "top", 
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
			"menu-item-db-id" => 52, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Home", 
			"menu-item-url" => "" . get_site_url() . "/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "5", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 71, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "About", 
			"menu-item-url" => "" . get_site_url() . "/about/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "7", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 69, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Services", 
			"menu-item-url" => "" . get_site_url() . "/services/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "11", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 68, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Testimonials", 
			"menu-item-url" => "" . get_site_url() . "/testimonials/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "13", 
			"menu-item-target" => "", 
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 66, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Blog", 
			"menu-item-url" => "" . get_site_url() . "/blog-posts/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "17", 
			"menu-item-target" => "", 
			"menu-item-position" => 5, 
			"sub" => array(array(
					"menu-item-db-id" => 65, 
					"menu-item-parent-id" => "66", 
					"menu-item-type" => "post_type", 
					"menu-item-title" => "Blog Posts Archive", 
					"menu-item-url" => "" . get_site_url() . "/blog-posts-archive/", 
					"menu-item-object" => "page", 
					"menu-item-object-id" => "19", 
					"menu-item-target" => "", 
					"menu-item-position" => 6
					))
			), array(
			"menu-item-db-id" => 70, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Contact", 
			"menu-item-url" => "" . get_site_url() . "/contact/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "9", 
			"menu-item-target" => "", 
			"menu-item-position" => 7
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
			)
		), 
	"element_id" => "unewnavigation-object"
	), 
"wrapper_id" => "unewnavigation-wrapper", 
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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-post/Blog-Bg.jpg", 
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
"wrapper_id" => "wrapper-1408525051645-1279"
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
"wrapper_id" => "wrapper-1408529977772-1644"
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
	"has_settings" => 1, 
	"class" => "c24 uposts-object", 
	"id_slug" => "upost", 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "1", 
	"content_type" => "full", 
	"featured_image" => 1, 
	"pagination" => 0, 
	"prev" => "", 
	"next" => "", 
	"post_data" => array("author", "date", "comments_count", "featured_image"), 
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
	"row" => 67, 
	"theme_style" => "blog-page-feed", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408977742068-1128"
));
$region_2->add_element("SocialMedia", array(
"columns" => "18", 
"margin_left" => 2,
"id" => "module-1409046990936-1993", 
"rows" => 12, 
"options" => array(
	"social_type" => "likes", 
	"like_social_media_services" => array("facebook", "twitter", "google"), 
	"count_social_media_services" => array(), 
	"button_size" => "medium", 
	"button_style" => "button-style-2", 
	"counter_options" => "horizontal",
	"counter_style" => "horizontal",
	"call_social_media_services" => array(), 
	"id_slug" => "SocialMedia", 
	"type" => "SocialMediaModel", 
	"view_class" => "SocialMediaView", 
	"class" => "c24 upfront-Social-Media", 
	"has_settings" => 1, 
	"element_id" => "SocialMedia-object-1409046990934-1531",
	"after_content" => 'yes',
	"after_content_align" => 'right',
	"services" => array(
		array(
			"id" => "facebook",
      "active" => 1,
      "meta" => Array(),
			"name" => "Facebook",
			"url" => "https://www.facebook.com/wpmudev"
		),
		array(
			"id" => "twitter",
      "active" => 1,
      "meta" => Array(),
			"name" => "Twitter",
			"url" => "https://twitter.com/wpmudev"
		),
		array(
			"id" => "google",
      "active" => 1,
      "meta" => Array(),
			"name" => "Google +",
			"url" => "https://plus.google.com/+wpmuorg/posts"
		),
	)
	), 
"wrapper_id" => "wrapper-1409048266228-1807"
));
$region_2->add_element('Ucomment', array(
	'id' => 'default-comment',
	'columns' => 18,
	'rows' => 10,
	'margin_left' => 2
));
$regions->add($region_2);
$footer = upfront_create_region(
			array(
"name" => "footer", 
"title" => "Footer Area", 
"type" => "wide", 
"scope" => "global", 
"container" => "footer", 
"position" => 20, 
"allow_sidebar" => true
),
			array(
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(250,250,250,1)", 
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
$footer->add_element("PlainTxt", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408446765229-1617", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">&copy; 2014 MEG CAMPBEL</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408446765226-1396", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 2, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "copyright", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 4
			), 
		"custom-1408717978058" => array(
			"row" => 2
			), 
		"custom-1408718022181" => array(
			"row" => 2
			), 
		"tablet" => array(
			"row" => 5
			), 
		"custom-1408718098456" => array(
			"row" => 5
			)
		)
	), 
"wrapper_id" => "wrapper-1408447010252-1606", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 9, 
		"order" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 5, 
		"order" => 4, 
		"row" => 10
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 10, 
		"row" => 8, 
		"order" => 4, 
		"top" => 5
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"order" => 4, 
		"top" => 5, 
		"row" => 8
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 4, 
		"row" => 8, 
		"top" => 5
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 4, 
		"row" => 8,
		"top" => 5
		)
	)
));

$footer->add_element("Unewnavigation", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408447780698-1711", 
"rows" => 10, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 74, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Archive", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "74", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 75, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Terms", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "75", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 76, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Privacy", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "76", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			)), 
	"menu_style" => "horizontal", 
	"menu_alignment" => "center", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1408447780692-1228", 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "footer-menu", 
	"row" => 4, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array(), 
	"theme_style" => "footer-menu", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 5, 
			"width" => 810
			), 
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			), 
		"custom-1408717978058" => array(
			"row" => 4, 
			"width" => 720, 
			"burger_menu" => "", 
			"burger_alignment" => "left", 
			"burger_over" => "over"
			), 
		"custom-1408718022181" => array(
			"row" => 7, 
			"width" => 630
			), 
		"tablet" => array(
			"row" => 1, 
			"width" => 570
			), 
		"custom-1408718098456" => array(
			"row" => 4, 
			"width" => 450
			)
		)
	), 
"wrapper_id" => "wrapper-1408448077097-1571", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"top" => 9, 
		"order" => 1
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 16, 
		"top" => 0, 
		"order" => 1, 
		"row" => 11
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14, 
		"top" => 0, 
		"order" => 1, 
		"row" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"order" => 1, 
		"top" => 0, 
		"row" => 13
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 1, 
		"top" => 1, 
		"row" => 7
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 1, 
		"top" => 0, 
		"row" => 10
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "footer-text-default", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plaintxt", 
	"has_settings" => 1, 
	"content" => "<p style=\"text-align:center;\" class=\"\"><em>\"Take care of your body. It's&nbsp;</em><em>the only place you have to live.\"</em></p>", 
	"class" => "c24 upfront-plain_txt", 
	"element_id" => "footer-text-default-object", 
	"type" => "PlainTxtModel", 
	"row" => 11, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => -2
			), 
		"custom-1408717978058" => array(
			"row" => 12
			)
		)
	), 
"wrapper_id" => "wrapper-1408447070412-1217", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 5, 
		"order" => 2
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 0, 
		"order" => 2, 
		"row" => 4, 
		"hide" => 1
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14, 
		"order" => 2, 
		"row" => 18,
		"hide" => 1
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 8, 
		"order" => 2, 
		"top" => 4,
		"hide" => 1
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 2, 
		"top" => 0,
		"hide" => 1
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 2, 
		"top" => 1,
		"hide" => 1
		)
	)
));

$footer->add_element("Usearch", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1408446264293-1066", 
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
	"element_id" => "usearch-object-1408446264283-1641", 
	"row" => 10, 
	"theme_style" => "footer-search", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 10
			)
		)
	), 
"wrapper_id" => "wrapper-1408447115527-1969", 
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
		)
	)
));

$regions->add($footer);
