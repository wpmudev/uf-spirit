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
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1408528105336-1414", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">GALLERY</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408528105334-1955", 
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
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408528213095-1209", 
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
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18
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
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line.png", 
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
	"element_id" => "object-1408528311776-1623", 
	"row" => 2, 
	"anchor" => "", 
	"theme_style" => "waved-line"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408528326968-1084", 
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

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408525051697-1453", 
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
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408525441545-1325", 
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
"row" => 118, 
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

$region_4->add_element("Ugallery", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1421677792998-1816", 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "ok", 
	"images" => array(array(
			"id" => "47", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1-150x150-1094.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 47
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1-150x150-1094.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery1.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "48", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2-300x139.jpg", 300, 139, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2-1024x476.jpg", 1024, 476, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2.jpg", 1080, 503, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2-150x150-3613.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 503
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 86, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 322, 
							"height" => 150
							), 
						"id" => 48
						)
					)
				), 
			"size" => array(
				"width" => 322, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 86, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2-150x150-3613.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery2.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "49", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3-150x150-4664.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 49
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3-150x150-4664.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery3.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "50", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4-150x150-4525.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 50
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4-150x150-4525.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery4.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "51", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5-300x130.jpg", 300, 130, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5-1024x445.jpg", 1024, 445, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5.jpg", 1080, 470, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5-150x150-8027.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 470
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 97, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 345, 
							"height" => 150
							), 
						"id" => 51
						)
					)
				), 
			"size" => array(
				"width" => 345, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 97, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5-150x150-8027.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery5.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "52", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6-150x150-3754.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 52
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6-150x150-3754.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery6.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "53", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7-150x150-8431.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 53
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7-150x150-8431.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery7.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "54", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8-210x300.jpg", 210, 300, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8.jpg", 630, 900, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8.jpg", 630, 900, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8-150x150-8126.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8.jpg", 
					"full" => array(
						"width" => 630, 
						"height" => 900
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 0, 
							"top" => 32
							), 
						"resize" => array(
							"width" => 150, 
							"height" => 214
							), 
						"id" => 54
						)
					)
				), 
			"size" => array(
				"width" => 150, 
				"height" => 214
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 0, 
				"top" => 32
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8-150x150-8126.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery8.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "55", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9-1024x682.jpg", 1024, 682, true), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9.jpg", 1080, 720, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9-150x150-8151.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9.jpg", 
					"full" => array(
						"width" => 1080, 
						"height" => 720
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 55
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9-150x150-8151.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery9.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "56", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10-200x300.jpg", 200, 300, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10.jpg", 683, 1024, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10.jpg", 683, 1024, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10-150x150-7752.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10.jpg", 
					"full" => array(
						"width" => 683, 
						"height" => 1024
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 0, 
							"top" => 37
							), 
						"resize" => array(
							"width" => 150, 
							"height" => 225
							), 
						"id" => 56
						)
					)
				), 
			"size" => array(
				"width" => 150, 
				"height" => 225
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 0, 
				"top" => 37
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10-150x150-7752.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery10.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "57", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11-225x300.jpg", 225, 300, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11.jpg", 768, 1024, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11.jpg", 768, 1024, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11-150x150-9685.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11.jpg", 
					"full" => array(
						"width" => 768, 
						"height" => 1024
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 0, 
							"top" => 25
							), 
						"resize" => array(
							"width" => 150, 
							"height" => 200
							), 
						"id" => 57
						)
					)
				), 
			"size" => array(
				"width" => 150, 
				"height" => 200
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 0, 
				"top" => 25
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11-150x150-9685.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery11.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "58", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12-300x200.jpg", 300, 200, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12.jpg", 1024, 683, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12.jpg", 1024, 683, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12-150x150-5272.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12.jpg", 
					"full" => array(
						"width" => 1024, 
						"height" => 683
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 37, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 225, 
							"height" => 150
							), 
						"id" => 58
						)
					)
				), 
			"size" => array(
				"width" => 225, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 37, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12-150x150-5272.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery12.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "59", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13-300x300.jpg", 300, 300, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13.jpg", 500, 500, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13.jpg", 500, 500, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13-150x150-9060.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13.jpg", 
					"full" => array(
						"width" => 500, 
						"height" => 500
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 150, 
							"height" => 150
							), 
						"id" => 59
						)
					)
				), 
			"size" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13-150x150-9060.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery13.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "60", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14-300x300.jpg", 300, 300, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14.jpg", 500, 500, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14.jpg", 500, 500, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14-150x150-5223.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14.jpg", 
					"full" => array(
						"width" => 500, 
						"height" => 500
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 150, 
							"height" => 150
							), 
						"id" => 60
						)
					)
				), 
			"size" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14-150x150-5223.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery14.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			), array(
			"id" => "61", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15-300x225.jpg", 300, 225, true), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15.jpg", 1024, 768, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15.jpg", 1024, 768, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15-150x150-7582.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15.jpg", 
					"full" => array(
						"width" => 1024, 
						"height" => 768
						), 
					"crop" => array(
						"width" => 150, 
						"height" => 150
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "150", 
							"height" => "150", 
							"left" => 25, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 200, 
							"height" => 150
							), 
						"id" => 61
						)
					)
				), 
			"size" => array(
				"width" => 200, 
				"height" => 150
				), 
			"cropSize" => array(
				"width" => 150, 
				"height" => 150
				), 
			"cropOffset" => array(
				"width" => "150", 
				"height" => "150", 
				"left" => 25, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15-150x150-7582.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1421677792996-1060", 
			"urlType" => "image", 
			"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/gallery15.jpg", 
			"rotation" => 0, 
			"link" => "original", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				)
			)), 
	"elementSize" => array(
		"width" => 0, 
		"height" => 0
		), 
	"labelFilters" => array(), 
	"thumbProportions" => "1", 
	"thumbWidth" => "150", 
	"thumbHeight" => 150, 
	"captionType" => "none", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => 0, 
	"captionBackground" => "#000000", 
	"showCaptionOnHover" => array("true"), 
	"linkTo" => "image", 
	"even_padding" => array(), 
	"thumbPadding" => 50, 
	"element_id" => "ugallery-object-1421677792996-1060", 
	"row" => 65, 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1421678046937-1904", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
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
		"left" => 0, 
		"col" => 18, 
		"order" => 0
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
"row" => 96, 
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

$region_5->add_element("PlainTxt", array(
"columns" => "18", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1408533892461-1013", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408533892460-1619", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 4, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "divider", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1410783042947" => array(
			"row" => 4
			)
		)
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408533969724-1331", 
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
		"col" => 16, 
		"order" => 0
		)
	), 
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
		"edited" => true, 
		"left" => 2, 
		"col" => 14, 
		"row" => 10, 
		"top" => 11
		)
	)
));

$region_5->add_element("Code", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408708697143-1002", 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1408708697141-1489", 
	"code_selection_type" => "Create", 
	"markup" => "<div class=\"big-text right-arrow\"><p style=\"text-align: center;\"><a href=\"#\">A new Group Training starting next month. Find out more</a></p></div>", 
	"row" => 24, 
	"style" => ".right-arrow a {
 color: #000000;   
 font-size: 17px;
}
.right-arrow a:after {
 content: \" \";   
 width: 20px;
 height: 20px;
 background: url(/Upfront/wp-content/themes/Spirit/images/sprite.png) right -97px;
 display: inline-block;
 margin: 0px 0px -4px 8px;
}
.right-arrow a:hover {
  text-decoration: none;
  color: #00afec;
}
.right-arrow a:hover:after {
  margin-left: 18px;
}", 
	"script" => "/* Your code here */"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408709267794-1635", 
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

$region_5->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408534159652-1018", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">ACCORDION</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408534159652-1526", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 4, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "remove-bottom-space"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408534167485-1350", 
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

$region_5->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408534172550-1479", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-gallery/wave-line.png", 
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
	"element_id" => "object-1408534172550-1349", 
	"row" => 2, 
	"anchor" => "", 
	"theme_style" => "waved-line"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408709176542-1170", 
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

$region_5->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408534186336-1075", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">Sweet roll candy sesame snaps. Candy canes donut candy canes donut. Jelly-o tootsie roll pie unerdwear.com cheesecake biscuit toffee I love. Sugar plum I love sesame snap</p><p class=\"\" style=\"text-align: center;\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408534186337-1054", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "sub-title", 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1408534232358-1258", 
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

$regions->add($region_5);

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
"row" => 108, 
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
		"row" => 159
		), 
	"custom-1410783042947" => array(
		"edited" => false
		)
	)
)
			);

$region_7->add_element("Uaccordion", array(
"columns" => "20", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1410423203222-1688", 
"options" => array(
	"type" => "UaccordionModel", 
	"view_class" => "UaccordionView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-accordion", 
	"accordion" => array(array(
			"content" => "<p class=\"\" style=\"font-size: medium; line-height: 30px;\">Aenean Massa. Quisque rutrum.&nbsp;</p><p class=\"\" style=\"font-size: medium; line-height: 30px;\"></p><p class=\"\" style=\"font-size: medium; line-height: 30px;\">Praesent vestibulum dapibus nibh. Nullam cursus lacinia erat. Vestibulum ullamcorper mauris at ligula. Nulla facilisi. Nullam tincidunt adipiscing enim. Quisque malesuada placerat nisl. In ut quam vitae odio lacinia tincidunt. Phasellus magna. Sed hendrerit. Fusce commodo aliquam arcu. Etiam iaculis nunc ac metus</p>", 
			"title" => "FIRST PANEL HEADER"
			), array(
			"content" => "<p class=\"\" style=\"font-size: medium; line-height: 30px;\">Aenean Massa. Quisque rutrum.&nbsp;</p><p class=\"\" style=\"font-size: medium; line-height: 30px;\"></p><p class=\"\" style=\"font-size: medium; line-height: 30px;\">Praesent vestibulum dapibus nibh. Nullam cursus lacinia erat. Vestibulum ullamcorper mauris at ligula. Nulla facilisi. Nullam tincidunt adipiscing enim. Quisque malesuada placerat nisl. In ut quam vitae odio lacinia tincidunt. Phasellus magna. Sed hendrerit. Fusce commodo aliquam arcu. Etiam iaculis nunc ac metus</p>", 
			"title" => "SECOND PANEL HEADER"
			), array(
			"title" => "THIRD PANEL HEADER", 
			"content" => "<p class=\"\" style=\"font-size: medium; line-height: 30px;\">Aenean Massa. Quisque rutrum.&nbsp;</p><p class=\"\" style=\"font-size: medium; line-height: 30px;\"></p><p class=\"\" style=\"font-size: medium; line-height: 30px;\">Praesent vestibulum dapibus nibh. Nullam cursus lacinia erat. Vestibulum ullamcorper mauris at ligula. Nulla facilisi. Nullam tincidunt adipiscing enim. Quisque malesuada placerat nisl. In ut quam vitae odio lacinia tincidunt. Phasellus magna. Sed hendrerit. Fusce commodo aliquam arcu. Etiam iaculis nunc ac metus</p>"
			)), 
	"accordion_count" => 3, 
	"accordion_fixed_width" => "auto", 
	"id_slug" => "uaccordion", 
	"preset" => "accordionstyle", 
	"style_type" => "custom", 
	"theme_style" => "accordion", 
	"header_border_color" => "rgb(255, 255, 255)", 
	"header_bg_color" => "rgb(122, 127, 127)", 
	"panel_bg_color" => "rgb(255, 255, 255)", 
	"element_id" => "uaccordion-object-1410423203212-1823", 
	"row" => 39, 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1410423443065-1968", 
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
		"top" => 0
		), 
	"custom-1410783042947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 0
		)
	)
));

$regions->add($region_7);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

