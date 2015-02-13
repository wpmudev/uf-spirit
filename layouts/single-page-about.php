<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

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
"row" => 154, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "full", 
"background_position_y" => "0", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/About-Bg (1).jpg", 
"background_image_ratio" => 0.56, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"row" => 130
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"row" => 110
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"row" => 80
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"row" => 80
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 80
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 80, 
		"hide" => 1
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 39
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"row" => 120
		)
	)
)
			);

$region_8->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "63", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">ABOUT MEG</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525024896-1770", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
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
		"edited" => true, 
		"left" => 0, 
		"top" => 45, 
		"col" => 22
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 40, 
		"col" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 27, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 25, 
		"col" => 14
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"top" => 35, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 20
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 51
		)
	)
));

$regions->add($region_8);

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
		), 
	"mobile" => array(
		"edited" => false
		), 
	"custom-1410783042947" => array(
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
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/\" rel=\"entry\">HOME</a>  &nbsp;/ &nbsp; ABOUT</p>", 
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
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1408525051697-1453", 
"rows" => 24, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">Candy canes croissant halvah sesame snaps topping candy powder jelly. Sugar plum brownie lemon drops lollipop. Toffee carrot cake croissant fruitcake sesame snaps jujubes icing cookie. Ice cream powder cotton candy chupa chups ice cream.</p>", 
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
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
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
"row" => 148, 
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
		"edited" => true, 
		"row" => 197
		), 
	"custom-1408718098456" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 317
		), 
	"custom-1410783042947" => array(
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
	"content" => "<p class=\"\" style=\"text-align: justify;\">Pie soufflé cookie cupcake tart. Jelly marzipan chupa chups. Cotton candy biscuit chocolate. Tiramisu bear claw carrot cake pastry brownie dessert oat cake. Cookie bonbon apple pie cupcake cookie unerdwear.com chupa chups. sweet pastry chocolate bar. Cheesecake cheesecake liquorice chocolate bar. Gingerbread topping.</p>", 
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
			"row" => 19
			), 
		"custom-1408717978058" => array(
			"row" => 23
			), 
		"custom-1408718022181" => array(
			"row" => 23
			), 
		"tablet" => array(
			"row" => 29
			), 
		"custom-1408718098456" => array(
			"row" => 35
			), 
		"mobile" => array(
			"row" => 55
			)
		)
	), 
"wrapper_id" => "wrapper-1408525530814-1418", 
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
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"top" => 3
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 3, 
		"row" => 25, 
		"order" => 0
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 16, 
		"top" => 3, 
		"row" => 29
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"row" => 29, 
		"top" => 3
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 3, 
		"row" => 35
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"row" => 41, 
		"top" => 3
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"row" => 61, 
		"top" => 3
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"top" => 3
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1408525556951-1881", 
"rows" => 133, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow.</p><p class=\"\"></p><p class=\"\"><strong>Sweet topping cake brownie &nbsp;fruitcake powder?</strong>&nbsp;<br><br>soufflé cupcake. ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow cheesecake. Macaroon biscuit bear claw chocolate cake tiramisu lemon drops. Chocolate carrot &nbsp;macaroon chocolate bar cotton candy dragée. Sweet topping.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525556950-1003", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 127, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717728290" => array(
			"row" => 125
			), 
		"custom-1408717918354" => array(
			"row" => 77
			), 
		"custom-1408717978058" => array(
			"row" => 88
			), 
		"custom-1408718022181" => array(
			"row" => 89
			), 
		"tablet" => array(
			"row" => 112
			), 
		"custom-1410783042947" => array(
			"row" => 144
			)
		)
	), 
"wrapper_id" => "wrapper-1408525591417-1195", 
"sticky" => false, 
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
		"col" => 8, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 11, 
		"top" => 3, 
		"row" => 131
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 0, 
		"order" => 1, 
		"row" => 83
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 16, 
		"top" => 0, 
		"row" => 94
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"row" => 95, 
		"top" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 2, 
		"row" => 118
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 8, 
		"top" => 3, 
		"row" => 150
		)
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1408525530872-1038", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: justify;\"><strong>“Sweet topping cake brownie. Candy fruitcake powder soufflé cupcake. ingerbread lollipop sweet roll ice cream dessert candy caneMuffin tootsie roll dragée. Unerdwear.com marsh”</strong></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525530870-1579", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 11, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "big-text", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 24
			), 
		"custom-1408717978058" => array(
			"row" => 16
			), 
		"custom-1408718022181" => array(
			"row" => 22
			), 
		"tablet" => array(
			"row" => 17
			), 
		"custom-1408718098456" => array(
			"row" => 29
			), 
		"mobile" => array(
			"row" => 40
			), 
		"custom-1410783042947" => array(
			"row" => 84
			)
		)
	), 
"wrapper_id" => "wrapper-1408525556875-1692", 
"sticky" => false, 
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
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"top" => 2
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 0, 
		"row" => 30, 
		"order" => 2
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 16, 
		"top" => 0, 
		"row" => 22
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"row" => 28, 
		"top" => 0
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 0, 
		"row" => 23
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"row" => 35, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"row" => 46, 
		"top" => 2
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"row" => 90, 
		"top" => 3
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
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 46
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$region_5->add_element("Uimage", array(
"columns" => "16", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1408526102009-1923", 
"rows" => 27, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/About-Photo-690x371-8026.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/About-Photo.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/About-Photo.jpg", 
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
		"width" => 690, 
		"height" => 371
		), 
	"fullSize" => array(
		"width" => 690, 
		"height" => 371
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 690, 
		"height" => 375
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "145", 
	"align" => "left", 
	"stretch" => true, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 0, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1408526101993-1058", 
	"row" => 21, 
	"theme_style" => "_default", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408718022181" => array(
			"row" => 65
			), 
		"tablet" => array(
			"row" => 56
			), 
		"custom-1408718098456" => array(
			"row" => 41
			), 
		"mobile" => array(
			"row" => 33
			)
		)
	), 
"wrapper_id" => "wrapper-1408526143362-1205", 
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
		"col" => 17, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 16, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 16
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"row" => 71
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"row" => 62, 
		"top" => 1
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"row" => 47
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"row" => 39, 
		"top" => 1
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 16, 
		"order" => 0
		)
	)
));

$region_5->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1408526101984-1321", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">Bonbon liquorice icing marshmallow cheesecake. Macaroon 2013</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408526101982-1623", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 9, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "image-caption", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 5
			), 
		"custom-1408717978058" => array(
			"row" => 10
			)
		)
	), 
"wrapper_id" => "wrapper-1408526265567-1343", 
"sticky" => false, 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 12, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 16, 
		"top" => 0, 
		"row" => 11, 
		"hide" => 1
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 16, 
		"top" => 0, 
		"row" => 16, 
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
		"hide" => 1, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 6, 
		"hide" => 1
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"hide" => 1, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6, 
		"hide" => 1, 
		"order" => 0
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
"row" => 32, 
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
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$region_6->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1408526265806-1251", 
"rows" => 9, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">MEG'S QUALIFICATION</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408526265803-1956", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 3, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "remove-bottom-space"
	), 
"wrapper_id" => "wrapper-1408526402494-1175", 
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
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$region_6->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1408526143443-1609", 
"rows" => 8, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about/wave-line.png", 
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
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 0, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1408526143438-1263", 
	"row" => 2, 
	"anchor" => "", 
	"theme_style" => "waved-line"
	), 
"wrapper_id" => "wrapper-1408526465194-1338", 
"sticky" => false, 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 11, 
		"order" => 0
		)
	), 
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
		"col" => 4, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 4
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4, 
		"order" => 0
		)
	)
));

$regions->add($region_6);

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
"row" => 120, 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"row" => 149
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"row" => 150
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"row" => 185
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 208
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 202
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 281
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"row" => 134
		)
	), 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
			);

$region_7->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408527009609-1170", 
"rows" => 72, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter ui-resizable\" id=\"uinsert-5\" style=\"width: 96px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 96px; height: 50px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/single-page-about/logo1.jpg\"></span>
</div><p class=\"\" style=\"font-size: medium; text-align: justify;\"><br>Cupcake ipsum dolor. Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon. Cupcake ipsum dolor.&nbsp;</p><p class=\"\" style=\"font-size: medium; text-align: justify;\">Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408527009607-1358", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 66, 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 113
			), 
		"custom-1408717978058" => array(
			"row" => 113
			), 
		"custom-1408718022181" => array(
			"row" => 69
			), 
		"custom-1410783042947" => array(
			"row" => 88
			)
		)
	), 
"wrapper_id" => "wrapper-1410365735039-1402", 
"sticky" => false, 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 8, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 7, 
		"top" => 1, 
		"row" => 119
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"row" => 119, 
		"top" => 1
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 12, 
		"top" => 1, 
		"row" => 75
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 10, 
		"order" => 0
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 8, 
		"top" => 0, 
		"row" => 94
		)
	)
));

$region_7->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408526402550-1740", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter ui-resizable\" id=\"uinsert-8\" style=\"width: 208px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 208px; height: 51px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/single-page-about/logo2.jpg\"></span>
</div><p class=\"\" style=\"text-align: justify;\"></p><p class=\"\" style=\"text-align: justify;\">Cupcake ipsum dolor. Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon. Cupcake ipsum dolor.&nbsp;<br></p><p class=\"\" style=\"text-align: justify;\">Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408526402549-1604", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 9, 
	"is_edited" => true, 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 114
			), 
		"custom-1408717978058" => array(
			"row" => 125
			), 
		"custom-1408718022181" => array(
			"row" => 47
			), 
		"tablet" => array(
			"row" => 81
			), 
		"custom-1408718098456" => array(
			"row" => 85
			), 
		"custom-1410783042947" => array(
			"row" => 84
			)
		)
	), 
"wrapper_id" => "wrapper-1410365750241-1268", 
"sticky" => false, 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 10, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 10, 
		"top" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 7, 
		"top" => 0, 
		"row" => 120
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 7, 
		"top" => 0, 
		"row" => 131
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 12, 
		"top" => 8, 
		"row" => 53
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 1, 
		"top" => 8, 
		"col" => 10, 
		"row" => 87
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10, 
		"top" => 8, 
		"row" => 91
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 5
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"top" => 0, 
		"row" => 90
		)
	)
));

$regions->add($region_7);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

