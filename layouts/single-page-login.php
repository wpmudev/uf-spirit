<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

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
			array(
"row" => 154, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-login/Login-Bg.jpg", 
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
		"row" => 109
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 94
		), 
	"custom-1410783042947" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 117
		)
	)
)
			);

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "35", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">MEMBERS</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525024896-1770", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "remove-space"
	), 
"wrapper_id" => "wrapper-1408525051645-1279", 
"sticky" => false, 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 18, 
		"order" => 0
		)
	), 
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
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 19
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 22
		)
	)
));

$region_3->add_element("Login", array(
"columns" => "8", 
"margin_left" => "8", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1423228816519-1722", 
"rows" => 48, 
"options" => array(
	"style" => "form", 
	"behavior" => "click", 
	"appearance" => "icon", 
	"label_image" => "Login", 
	"label_text" => "log in", 
	"logout_link" => "log out", 
	"trigger_text" => "Wassup", 
	"logged_in_preview" => array("yes"), 
	"type" => "LoginModel", 
	"view_class" => "LoginView", 
	"class" => "c24 upfront-login_element-object", 
	"has_settings" => 1, 
	"id_slug" => "upfront-login_element", 
	"logout_style" => "link", 
	"element_id" => "upfront-login_element-object-1423228816518-1287", 
	"row" => 48, 
	"anchor" => "", 
	"theme_style" => "login-form"
	), 
"wrapper_id" => "wrapper-1423228825288-1026", 
"sticky" => false, 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 10, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"col" => 13, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 8, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 5, 
		"col" => 8, 
		"order" => 0
		)
	)
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

