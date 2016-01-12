<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(array(
	"name" => "main",
	"title" => __("Main Area"),
	"scope" => "local",
	"type" => "wide",
	"default" => true,
	"allow_sidebar" => true
), array(
	"row" => 140,
	"background_type" => "color",
	"background_color" => "#c5d0db"
));

$main->add_element("PlainTxt", array(
	"columns" => "24",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "6",
	"margin_bottom" => "0",
	"id" => "default-nav-text-module",
	"rows" => 12,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plaintxt",
		"content" => "<p>Uh oh, somehting went wrong!</p>",
		"element_id" => "default-nav-text-object",
		"class" => "c24",
		"type" => "PlainTxtModel",
		"has_settings" => 1
	)
));

$regions->add($main);
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');