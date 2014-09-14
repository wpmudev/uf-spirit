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
		)
	)
)
			);

$regions->add($header_nav);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_10 = upfront_create_region(
			array(
"name" => "region-10", 
"title" => "Region 10", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-10", 
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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/Services-Bg.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"row" => 69
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"row" => 59
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"row" => 49
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"row" => 39
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 29
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 19, 
		"hide" => 1
		)
	)
)
			);

$region_10->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">SERVICES</h1>", 
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
		"edited" => true, 
		"left" => 0, 
		"top" => 16, 
		"col" => 22
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 14, 
		"col" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 12, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 7, 
		"col" => 14
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 3, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$regions->add($region_10);

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
"row" => 41, 
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
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/\" rel=\"entry\">HOME</a>  &nbsp;/ &nbsp; SERVICES</p>", 
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

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1408528105336-1414", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">WELLNESS COACHING CONSULTATIONS</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408528105334-1955", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408528213095-1209", 
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

$region_3->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408528311775-1023", 
"rows" => 8, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line.png", 
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
		"width" => 92, 
		"height" => 4
		), 
	"fullSize" => array(
		"width" => 92, 
		"height" => 4
		), 
	"position" => array(
		"top" => 0, 
		"left" => -29
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 150, 
		"height" => 10
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "53", 
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
	"element_id" => "object-1408528311776-1623", 
	"row" => 2
	), 
"wrapper_id" => "wrapper-1408528326968-1084", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 9, 
		"col" => 4
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 4
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 5, 
		"col" => 4
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 4
		)
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1408525051697-1453", 
"rows" => 24, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">Candy canes croissant halvah sesame snaps topping candy powder jelly. Sugar plum brownie lemon drops lollipop. Toffee carrot cake croissant fruitcake sesame snaps jujubes icing</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525051696-1392", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 18, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "sub-title", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408525441545-1325", 
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

$regions->add($region_3);

$region_4 = upfront_create_region(
			array(
"name" => "region-4", 
"title" => "Region 4", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-4", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
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

$region_4->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1408525441617-1347", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">Pie soufflé cookie cupcake tart. Jelly marzipan chupa chups. Cotton candy biscuit chocolate. Tiramisu bear claw carrot cake pastry brownie dessert oat cake. Cookie bonbon apple pie Cheesecake cheesecake</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525441616-1152", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "small-text", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 20
			), 
		"custom-1408717978058" => array(
			"row" => 23
			), 
		"custom-1408718022181" => array(
			"row" => 23
			), 
		"tablet" => array(
			"row" => 18
			), 
		"custom-1408718098456" => array(
			"row" => 24
			), 
		"custom-1408717728290" => array(
			"row" => 25
			)
		)
	), 
"wrapper_id" => "wrapper-1408525530814-1418", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"top" => 2, 
		"order" => 0, 
		"row" => 31
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"top" => 0, 
		"order" => 0, 
		"row" => 26
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"top" => 4, 
		"order" => 0, 
		"row" => 29
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 10, 
		"row" => 29, 
		"top" => 4, 
		"order" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10, 
		"row" => 24, 
		"top" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"row" => 30, 
		"top" => 4
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1408529473156-1366", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"><a href=\"" . get_site_url() . "/contact/\" rel=\"entry\">Get in Touch</a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408529473155-1623", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "big-button", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408718022181" => array(
			"row" => 11
			)
		)
	), 
"wrapper_id" => "wrapper-1408525530814-1418", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 1, 
		"top" => 4
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 1, 
		"row" => 17
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"order" => 1, 
		"row" => 17
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 10, 
		"order" => 1, 
		"row" => 17, 
		"top" => 1
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10, 
		"row" => 15
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"row" => 17
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408529567054-1125", 
"rows" => 7, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"><strong>Meg@gmail.com</strong></p><p class=\"\" style=\"text-align: center;\"><strong>+61 (0) 407 508 020</strong></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408529567053-1909", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 1, 
	"is_edited" => true, 
	"breakpoint" => array(
		"custom-1408718022181" => array(
			"row" => 13
			), 
		"tablet" => array(
			"row" => 10
			), 
		"custom-1408718098456" => array(
			"row" => 13
			)
		)
	), 
"wrapper_id" => "wrapper-1408525530814-1418", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 2, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 2
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"order" => 2
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 10, 
		"row" => 19, 
		"order" => 2
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10, 
		"row" => 16
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"row" => 19
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "16", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1408525556951-1881", 
"rows" => 99, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow.</p><p class=\"\"></p><p class=\"\"><strong>Sweet topping cake brownie &nbsp;fruitcake powder?</strong>&nbsp;<br><br>soufflé cupcake. ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow cheesecake. Macaroon biscuit bear claw chocolate cake tiramisu lemon drops. Chocolate carrot &nbsp;macaroon chocolate bar cotton candy dragée. Sweet topping.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525556950-1003", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 93, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717728290" => array(
			"row" => 91
			), 
		"custom-1408717918354" => array(
			"row" => 110
			), 
		"custom-1408717978058" => array(
			"row" => 87
			)
		)
	), 
"wrapper_id" => "wrapper-1408525591417-1195", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 15, 
		"order" => 3, 
		"top" => 1, 
		"row" => 97
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 3, 
		"row" => 116, 
		"top" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"order" => 3, 
		"row" => 93, 
		"top" => 0
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"top" => 0, 
		"order" => 3
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"top" => 0
		)
	)
));

$regions->add($region_4);

$region_5 = upfront_create_region(
			array(
"name" => "region-5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-5", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 40, 
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

$region_5->add_element("Ugallery", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408528105390-1071", 
"rows" => 20, 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "ok", 
	"images" => array(array(
			"id" => "94", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1-140x140-9248.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 94
						)
					)
				), 
			"size" => array(
				"width" => 180, 
				"height" => 180
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"top" => 0, 
				"left" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo1-180x180-6876.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408528105380-1572", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "95", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2-140x140-4716.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 95
						)
					)
				), 
			"size" => array(
				"width" => 180, 
				"height" => 180
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo2-180x180-5597.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408528105380-1572", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "96", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3-140x140-5070.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 96
						)
					)
				), 
			"size" => array(
				"width" => 180, 
				"height" => 180
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo3-180x180-4471.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408528105380-1572", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "97", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4-140x140-3019.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 97
						)
					)
				), 
			"size" => array(
				"width" => 180, 
				"height" => 180
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo4-180x180-9303.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408528105380-1572", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "98", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5-140x140-2646.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 98
						)
					)
				), 
			"size" => array(
				"width" => 180, 
				"height" => 180
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/photo5-180x180-2607.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408528105380-1572", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			)), 
	"elementSize" => array(
		"width" => 0, 
		"height" => 0
		), 
	"labelFilters" => array(), 
	"thumbProportions" => "1", 
	"thumbWidth" => "180", 
	"thumbHeight" => 180, 
	"captionPosition" => "below", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => 0, 
	"captionBackground" => "#000000", 
	"captionWhen" => "never", 
	"linkTo" => "image", 
	"element_id" => "ugallery-object-1408528105380-1572", 
	"row" => 34, 
	"theme_style" => "inline-gallery", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 26
			), 
		"custom-1408717978058" => array(
			"row" => 65
			)
		)
	), 
"wrapper_id" => "wrapper-1408528577921-1045", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 22
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
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

$regions->add($region_5);

$region_6 = upfront_create_region(
			array(
"name" => "region-6", 
"title" => "Region 6", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-6", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 47, 
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

$region_6->add_element("PlainTxt", array(
"columns" => "18", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "20", 
"margin_bottom" => "0", 
"id" => "module-1408529743280-1743", 
"rows" => 6, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408529743279-1531", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 0, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "divider", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408529843963-1101", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 18
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

$region_6->add_element("PlainTxt", array(
"columns" => "20", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408526265806-1251", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">MORE SERVICES</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408526265803-1956", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408526402494-1175", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 20
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

$region_6->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408526143443-1609", 
"rows" => 8, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/wave-line.png", 
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
		"width" => 92, 
		"height" => 4
		), 
	"fullSize" => array(
		"width" => 92, 
		"height" => 4
		), 
	"position" => array(
		"top" => 0, 
		"left" => -29
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 150, 
		"height" => 10
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "53", 
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
	"element_id" => "image-1408526143438-1263", 
	"row" => 2
	), 
"wrapper_id" => "wrapper-1408526465194-1338", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 9, 
		"col" => 4
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 4
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 5, 
		"col" => 4
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 4
		)
	)
));

$regions->add($region_6);

$region_11 = upfront_create_region(
			array(
"name" => "region-11", 
"title" => "Region 11", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-11", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 68, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(255,255,255,1)", 
"background_style" => "fixed", 
"background_position_y" => "100", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/Homepage-Services-Bg1.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 100%", 
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

$region_11->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1408443814379-1179", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_colors upfront_theme_color_2\">HOLISTIC PERSONAL AND GROUP TRAINING</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443814379-1593", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 4, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443818900-1429", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 9
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$region_11->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408443837196-1997", 
"rows" => 28, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Holistic Training that is<strong> Adaptive, Intuitive, Functional</strong>. High quality holistic training Thorough Health Assessment Individualised goal setting and personalised fitness plans.<br><a href=\"" . get_site_url() . "/about/\" rel=\"entry\"></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443837197-1885", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443842377-1925", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 9
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 8
		)
	)
));

$region_11->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408443847987-1211", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/services/\" rel=\"entry\">Find Out More</a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443847988-1491", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 7, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "normal-button", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443852480-1266", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 10, 
		"col" => 5
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 8, 
		"col" => 5
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 4
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 4
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 4
		)
	)
));

$regions->add($region_11);

$region_7 = upfront_create_region(
			array(
"name" => "region-7", 
"title" => "Region 7", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-7", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 68, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(196,212,212,1)", 
"background_style" => "fixed", 
"background_position_y" => "100", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/Homepage-Services-Bg2.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 100%", 
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

$region_7->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "9", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1408443904923-1360", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_colors upfront_theme_color_2\">WELLNESS RETREATS</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443904923-1934", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 4, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443912379-1151", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 9, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 12
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 9
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 9
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8
		)
	)
));

$region_7->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "9", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1408443941489-1951", 
"rows" => 28, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Have you ever considered the gift of a wellness retreat to kickstart a new phase of vibrant health?<br><a href=\"" . get_site_url() . "/about/\" rel=\"entry\"></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443941490-1686", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443951249-1806", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 9, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 12
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 9
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 9
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8
		)
	)
));

$region_7->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "19", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408443962151-1643", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/services/\" rel=\"entry\">Find Out More</a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408443962151-1399", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 4, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "normal-button", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408443970544-1121", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 17, 
		"col" => 5
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 13, 
		"col" => 5
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 11, 
		"col" => 4
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 9, 
		"col" => 4
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 8, 
		"col" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 4
		)
	)
));

$regions->add($region_7);

$region_8 = upfront_create_region(
			array(
"name" => "region-8", 
"title" => "Region 8", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-8", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 68, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(246,246,246,1)", 
"background_style" => "fixed", 
"background_position_y" => "100", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-services/Homepage-Services-Bg3.jpg", 
"background_image_ratio" => 0.25, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 100%", 
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

$region_8->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1408444386527-1487", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_colors upfront_theme_color_2\">WORKPLACE WELLNESS</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408444386528-1458", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 4, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408444393256-1825", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 11
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
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

$region_8->add_element("PlainTxt", array(
"columns" => "14", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408444395880-1241", 
"rows" => 28, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Boosted morale. Increased Productivity. Happy, healthier employees. If you’re an employer, consider the huge benefits of a workplace wellness program.<br><a href=\"" . get_site_url() . "/about/\" rel=\"entry\"></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408444395880-1516", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408444399086-1919", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 9
		)
	)
));

$region_8->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408444401924-1912", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/services/\" rel=\"entry\">Find Out More</a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408444401924-1303", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 4, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "normal-button", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408444405608-1579", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 10, 
		"col" => 5
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 8, 
		"col" => 5
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 4
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 4
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 4
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 4
		)
	)
));

$regions->add($region_8);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

