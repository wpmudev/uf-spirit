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
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-contactus/logo-nav-105x42-8582.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-contactus/logo-nav.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-contactus/logo-nav.png", 
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
	"menu_items" => false, 
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
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"top" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 2
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
		"left" => 13, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 9, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 7, 
		"col" => 4, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 4, 
		"top" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
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
"row" => 154, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-contactus/Contact-Bg.jpg", 
"background_image_ratio" => 0.56, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"row" => 144
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"row" => 124
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"row" => 94
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"row" => 94
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 94
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 94
		)
	)
)
			);

$header->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">CONTACT</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525024896-1770", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408525051645-1279", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 22
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 14
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$header->add_element("Ucontact", array(
"columns" => "14", 
"margin_left" => "5", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408536499546-1338", 
"rows" => 47, 
"options" => array(
	"form_add_title" => array(), 
	"form_title" => "Contact form", 
	"form_name_label" => "Your name:", 
	"form_email_label" => "Your email:", 
	"form_email_to" => "catalinnita01@gmail.com", 
	"show_subject" => array(), 
	"form_subject_label" => "Your subject:", 
	"form_default_subject" => "Sent from the website", 
	"form_message_label" => "Your message:", 
	"form_button_text" => "Send", 
	"form_validate_when" => "submit", 
	"form_label_position" => "over", 
	"type" => "UcontactModel", 
	"view_class" => "UcontactView", 
	"class" => "c24 upfront-contact-form", 
	"has_settings" => 1, 
	"id_slug" => "ucontact", 
	"element_id" => "ucontact-object-1408536499543-1797", 
	"row" => 41, 
	"theme_style" => "contact-form", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408536680933-1250", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 14
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 14
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 14
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$header->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "7", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408536499439-1069", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\" style=\"text-align: center;\">Call me</p><p class=\"\" style=\"text-align: center;\"><strong>+61 (0) 407 508 020</strong></p></span><p class=\"\" style=\"text-align: center;\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408536499438-1365", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 5, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408537660269-1178", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 10
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 10
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 10
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$regions->add($header);

