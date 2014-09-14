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
		"edited" => false
		)
	)
)
			);

$header->add_element("Uimage", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "image", 
"rows" => 5, 
"options" => array(
	"src" => "http://www.wpfw.net/Upfront/wp-content/uploads/2014/09/logo-nav-105x42-2536.png", 
	"srcFull" => "http://www.wpfw.net/Upfront/wp-content/uploads/2014/09/logo-nav.png", 
	"srcOriginal" => "http://www.wpfw.net/Upfront/wp-content/uploads/2014/09/logo-nav.png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => "external", 
	"image_link" => "http://www.wpfw.net/Upfront/", 
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
	"image_id" => "124", 
	"align" => "left", 
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
"new_line" => "true", 
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
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 0
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
"rows" => 4, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 119, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "About", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-about/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "109", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 118, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Services", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-services/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "110", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 117, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Testimonials", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-testimonials/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "111", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 116, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Gallery", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-gallery/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "112", 
			"menu-item-target" => "", 
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 120, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Contactus", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-contactus/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "108", 
			"menu-item-target" => "", 
			"menu-item-position" => 5
			), array(
			"menu-item-db-id" => 115, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "post_type", 
			"menu-item-title" => "Login", 
			"menu-item-url" => "http://www.wpfw.net/Upfront/template-login/", 
			"menu-item-object" => "page", 
			"menu-item-object-id" => "113", 
			"menu-item-target" => "", 
			"menu-item-position" => 6
			)), 
	"menu_style" => "vertical", 
	"menu_alignment" => "left", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "main-menu", 
	"row" => -2, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array("yes"), 
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
	"row" => 5, 
	"breakpoint" => array(
		"tablet" => array(
			"row" => 7
			)
		)
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
		)
	)
));

$regions->add($header);

