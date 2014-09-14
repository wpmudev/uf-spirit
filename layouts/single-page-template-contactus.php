<?php
$header_nav = upfront_create_region(
			array(
"name" => "header_nav", 
"title" => "Header Nav", 
"type" => "wide", 
"scope" => "global", 
"container" => "header", 
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
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$regions->add($header_nav);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

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
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$region_2->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "24", 
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
"new_line" => "true", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$region_2->add_element("Ucontact", array(
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
"new_line" => "true", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$region_2->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "7", 
"margin_right" => "0", 
"margin_top" => "0", 
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
"new_line" => "true", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$regions->add($region_2);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

