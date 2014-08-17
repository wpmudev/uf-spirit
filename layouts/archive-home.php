<?php
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
"row" => 200, 
"background_type" => "color", 
"background_color" => "#c5d0db"
)
			);
$regions->add($main);
