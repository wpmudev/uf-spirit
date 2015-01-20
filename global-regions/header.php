<?php
$header = upfront_create_region(
			array(
"name" => "header", 
"title" => "Header", 
"type" => "wide", 
"scope" => "global", 
"container" => "header", 
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
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 8
		), 
	"custom-1410780542364" => array(
		"edited" => false
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$header->add_element("Uimage", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "image", 
"rows" => 5, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/logo-nav (1)-105x42-8597.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/logo-nav (1).png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/global-regions/header/logo-nav (1).png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => "external", 
	"image_link" => "" . get_site_url() . "/", 
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
	"image_id" => "133", 
	"align" => "left", 
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
			), 
		"custom-1410783042947" => array(
			"row" => 2
			)
		)
	), 
"wrapper_id" => "image-wrapper", 
"new_line" => "true", 
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
		"top" => 2
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 2
		), 
	"custom-1410780542364" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 2, 
		"row" => 8
		)
	)
));

$header->add_element("Unewnavigation", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "unewnavigation", 
"rows" => 11, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 12, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "ABOut", 
			"menu-item-url" => "" . get_site_url() . "/about/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "12", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 13, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Login", 
			"menu-item-url" => "" . get_site_url() . "/login/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "13", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 14, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Gallery", 
			"menu-item-url" => "" . get_site_url() . "/gallery/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "14", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 15, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "services", 
			"menu-item-url" => "" . get_site_url() . "/services/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "15", 
			"menu-item-target" => "", 
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 16, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "testimonials", 
			"menu-item-url" => "" . get_site_url() . "/testimonials/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "16", 
			"menu-item-target" => "", 
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 17, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "blog", 
			"menu-item-url" => "" . get_site_url() . "/blog/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "17", 
			"menu-item-target" => "", 
			"menu-item-position" => 6, 
			"being-edited" => false
			), array(
			"menu-item-db-id" => 18, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Contact us", 
			"menu-item-url" => "" . get_site_url() . "/contactus/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "18", 
			"menu-item-target" => "", 
			"menu-item-position" => 7
			)), 
	"menu_style" => "vertical", 
	"menu_alignment" => "left", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "main-menu", 
	"row" => 5, 
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
			"row" => 2, 
			"width" => 570, 
			"burger_menu" => "yes", 
			"burger_alignment" => "whole", 
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
			), 
		"mobile" => array(
			"burger_menu" => "yes", 
			"width" => 315, 
			"row" => 5, 
			"burger_alignment" => "whole", 
			"burger_over" => "over"
			), 
		"custom-1410530020105" => array(
			"burger_menu" => "yes", 
			"width" => 240
			), 
		"custom-1410780542364" => array(
			"row" => 9, 
			"width" => 810, 
			"burger_menu" => "yes", 
			"burger_alignment" => "whole", 
			"burger_over" => "over"
			), 
		"custom-1410783042947" => array(
			"row" => 6, 
			"width" => 810, 
			"burger_menu" => "yes", 
			"burger_alignment" => "whole", 
			"burger_over" => "over"
			)
		), 
	"element_id" => "unewnavigation-object"
	), 
"wrapper_id" => "unewnavigation-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 2
		), 
	"mobile" => array(
		"col" => 4
		), 
	"custom-1410783042947" => array(
		"col" => 2
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
		"col" => 2, 
		"row" => 8, 
		"top" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"row" => 12
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 2, 
		"row" => 11, 
		"top" => 0
		), 
	"custom-1410780542364" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"row" => 15, 
		"top" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"row" => 12, 
		"top" => 0
		)
	)
));

$header->add_element("Code", array(
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
  <li><a class=\"icon youtube\" href=\"http://youtube.com\"></a></li>
  <li><a class=\"icon facebook\" href=\"http://facebook.com\"></a></li>
  <li><a class=\"icon twitter\" href=\"http://twitter.com\"></a></li>
</ul>", 
	"style" => ".socials {
    list-style: none;
    padding: 0px;
    margin: -3px 0px;
}
.socials li {
    display: inline-block;
}
.socials li a {
    display: block;
    width: 35px;
    height: 34px;
    margin: 0 5px;
}
", 
	"script" => "/* Your code here */", 
	"row" => 5, 
	"breakpoint" => array(
		"tablet" => array(
			"row" => 7
			)
		)
	), 
"wrapper_id" => "wrapper-1408627457712-1308", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 6
		), 
	"custom-1410783042947" => array(
		"col" => 13
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
		"left" => 3, 
		"col" => 4, 
		"top" => 0, 
		"row" => 13
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 4, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"hide" => 1
		), 
	"custom-1410780542364" => array(
		"edited" => true, 
		"left" => 8, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 9, 
		"col" => 4, 
		"top" => 0
		)
	)
));

$regions->add($header);

