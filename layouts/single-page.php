<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array(
"name" => "main", 
"title" => "Main Area", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"position" => 10, 
"allow_sidebar" => true
),
			array(
"row" => 69, 
"background_type" => "color", 
"background_color" => "rgba(168,144,132,1)", 
"nav_region" => "", 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 40
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 34
		)
	)
)
			);

$main->add_element("ThisPage", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "15", 
"margin_bottom" => "0", 
"id" => "default-page-title", 
"rows" => 32, 
"options" => array(
	"type" => "ThisPageModel", 
	"view_class" => "ThisPageView", 
	"class" => "c24 upfront-this_page", 
	"display" => "title", 
	"has_settings" => 0, 
	"id_slug" => "this_page", 
	"disable_resize" => false, 
	"disable_drag" => false, 
	"element_id" => "default-page-title-object", 
	"row" => 32, 
	"breakpoint" => array(
		"tablet" => array(
			"row" => 20
			), 
		"mobile" => array(
			"row" => 15
			)
		)
	), 
"wrapper_id" => "default-page-title-wrapper", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12, 
		"clear" => true, 
		"order" => 0
		), 
	"mobile" => array(
		"col" => 7, 
		"clear" => false, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"col" => 18, 
		"clear" => true, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 20
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"top" => 8, 
		"row" => 20
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 9, 
		"row" => 15
		)
	)
));

$regions->add($main);

$region_3 = upfront_create_region(
			array(
"name" => "region-3", 
"title" => "Region 3", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-3", 
"position" => 20, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false
		), 
	"tablet" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$region_3->add_element("ThisPage", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "default-page-content", 
"rows" => 44, 
"options" => array(
	"type" => "ThisPageModel", 
	"view_class" => "ThisPageView", 
	"class" => "c24 upfront-this_page", 
	"display" => "content", 
	"has_settings" => 0, 
	"id_slug" => "this_page", 
	"disable_resize" => false, 
	"disable_drag" => false, 
	"element_id" => "default-page-content-object", 
	"row" => 44
	), 
"wrapper_id" => "wrapper-1414659960729-1085", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"col" => 18
		)
	), 
"breakpoint" => array(
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
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
	)
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

