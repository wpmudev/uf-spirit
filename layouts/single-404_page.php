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
"row" => 127, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(107,177,166,1)", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Bg.jpg", 
"background_image_ratio" => 1, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 0%"
)
			);

$region_3->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1408618043051-1621", 
"rows" => 20, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Icon-151x62-7303.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Icon.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Icon.png", 
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
		"width" => 151, 
		"height" => 62
		), 
	"fullSize" => array(
		"width" => 151, 
		"height" => 62
		), 
	"position" => array(
		"top" => 0, 
		"left" => -44.5
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 70
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "121", 
	"align" => "center", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1408618043044-1280", 
	"row" => 14
	), 
"wrapper_id" => "wrapper-1408618446916-1040"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408618384902-1802", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">GYM TIME</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408618384902-1632", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 7, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "huge-text", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1409909268131-1257"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408618043042-1704", 
"rows" => 38, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">KEEP CALM</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408618043041-1407", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 32, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "huge-text", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1409909261977-1601"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408618378242-1861", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">IT\\\\'S</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408618378242-1152", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 7, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "medium-text", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1409909261924-1730"
));

$region_3->add_element("PlainTxt", array(
"columns" => "12", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408619056861-1071", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\" style=\"text-align: center;\"><strong>THIS PAGE DOESN\\'T EXIST!</strong></p><p class=\"\" style=\"text-align: center;\"><strong>LETS GO BACK </strong><a href=\"" . get_site_url() . "/\" rel=\"entry\"><strong>HOME</strong></a></p></span><p class=\"\" style=\"text-align: center;\"><a href=\"" . get_site_url() . "/\" rel=\"entry\"></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408619056862-1662", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 15, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1409909262050-1921"
));

$region_3->add_element("PlainTxt", array(
"columns" => "12", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "19", 
"margin_bottom" => "0", 
"id" => "module-1408618826597-1752", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">404 ERROR PAGE NOT FOUND</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408618826595-1913", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1409909262018-1016"
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

