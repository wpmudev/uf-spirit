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
"row" => 164, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(107,177,166,1)", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Bg.jpg", 
"background_image_ratio" => 1, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 0%", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 192
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$region_3->add_group(array(
"columns" => "8", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "21", 
"margin_bottom" => "0", 
"id" => "module-group-1411024470437-1633", 
"rows" => 10, 
"wrapper_id" => "wrapper-1410879041131-1605", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		), 
	"mobile" => array(
		"col" => 10
		), 
	"custom-1410783042947" => array(
		"col" => 10
		)
	)
));

$region_3->add_element("Uimage", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408618043051-1621", 
"rows" => 21, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-Icon-151x62-1753.png", 
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
		"left" => -89.5
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 330, 
		"height" => 62
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "130", 
	"align" => "center", 
	"stretch" => false, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1408618043044-1280", 
	"row" => 15, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1411024470478-1584", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 7
		)
	), 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 8
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 8
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1411024470437-1633"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "1", 
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
"wrapper_id" => "wrapper-1411024470478-1584", 
"new_line" => "true", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1411024470437-1633"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408618378242-1861", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">IT'S</p>", 
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
"wrapper_id" => "wrapper-1411024470478-1584", 
"new_line" => "true", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1411024470437-1633"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "1", 
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
"wrapper_id" => "wrapper-1411024470478-1584", 
"new_line" => "true", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1411024470437-1633"
));

$region_3->add_group(array(
"columns" => "12", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "60", 
"margin_bottom" => "0", 
"id" => "module-group-1410879123419-1613", 
"rows" => 10, 
"wrapper_id" => "wrapper-1410879068397-1666", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 10
		)
	), 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"top" => 68
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 8
		)
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "12", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
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
"wrapper_id" => "wrapper-1410879123464-1829", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 10
		)
	), 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1410879123419-1613"
));

$region_3->add_element("PlainTxt", array(
"columns" => "12", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408619056861-1071", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\" style=\"text-align: center;\"><strong>THIS PAGE DOESN'T EXIST!</strong></p><p class=\"\" style=\"text-align: center;\"><strong>LETS GO BACK </strong><a href=\"" . get_site_url() . "/\" rel=\"entry\"><strong>HOME</strong></a></p></span><p class=\"\" style=\"text-align: center;\"><a href=\"" . get_site_url() . "/\" rel=\"entry\"></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408619056862-1662", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 15, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1410879123464-1829", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	), 
"group" => "module-group-1410879123419-1613"
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

