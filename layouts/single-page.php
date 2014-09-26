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
"row" => 69, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(168,144,132,1)", 
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
		"row" => 39
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 19, 
		"hide" => 1
		), 
	"custom-1410783042947" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 34
		)
	)
)
			);

$region_8->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "17", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">PAGE TITLE</h1>", 
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
	"theme_style" => "remove-space", 
	"breakpoint" => array(
		"mobile" => array(
			"row" => 5
			)
		)
	), 
"wrapper_id" => "wrapper-1408525051645-1279", 
"new_line" => "true", 
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
		"top" => 11, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 10
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 23
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 12, 
		"row" => 11
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
		"edited" => true, 
		"row" => 65
		), 
	"custom-1408718098456" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 89
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"row" => 53
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
	"content" => "<p class=\"\"><a href=\"" . get_site_url() . "/\" rel=\"entry\">HOME</a>  &nbsp;/ &nbsp; PAGE TEMPLATE</p>", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
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
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
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
"row" => 85, 
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
		"row" => 125
		), 
	"custom-1408718098456" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 210
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"row" => 97
		)
	)
)
			);

$region_4->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1408525556951-1881", 
"rows" => 73, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow.</p><p class=\"\"></p><p class=\"\"><strong>Sweet topping cake brownie &nbsp;fruitcake powder?</strong>&nbsp;<br><br>soufflé cupcake. ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow cheesecake. Macaroon biscuit bear claw chocolate cake tiramisu lemon drops. Chocolate carrot &nbsp;macaroon chocolate bar cotton candy dragée. Sweet topping.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525556950-1003", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 67, 
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
			"row" => 105
			)
		)
	), 
"wrapper_id" => "wrapper-1408525591417-1195", 
"new_line" => "true", 
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
		"top" => 0, 
		"row" => 111
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
		)
	)
));

$regions->add($region_4);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

