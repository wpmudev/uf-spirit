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
"margin_top" => "28", 
"margin_bottom" => "0", 
"id" => "module-1408528105336-1414", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">GALLERY</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408528105334-1955", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408528213095-1209", 
"new_line" => "true", 
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
"rows" => 8, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line.png", 
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
"new_line" => "true", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4
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
"new_line" => "true", 
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
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1408533534920-1963", 
"rows" => 131, 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "ok", 
	"images" => array(array(
			"id" => "126", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1-160x160-9740.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1.jpg", 
					"full" => array(
						"width" => 180, 
						"height" => 180
						), 
					"crop" => array(
						"width" => 160, 
						"height" => 160
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "160", 
							"height" => "160", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 160, 
							"height" => 160
							), 
						"id" => 126, 
						"element_id" => "ugallery-object-1408533534917-1262"
						)
					)
				), 
			"size" => array(
				"width" => 155, 
				"height" => 155
				), 
			"cropSize" => array(
				"width" => 160, 
				"height" => 160
				), 
			"cropOffset" => array(
				"width" => "160", 
				"height" => "160", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo1-155x155-4800.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "101", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1).jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1).jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1).jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1)-140x140-4418.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1).jpg", 
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
						"id" => 101
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo2 (1)-180x180-6091.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "102", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1).jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1).jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1).jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1)-140x140-5012.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1).jpg", 
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
						"id" => 102
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo3 (1)-180x180-4691.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "103", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1).jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1).jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1).jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1)-140x140-9499.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1).jpg", 
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
						"id" => 103
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo4 (1)-180x180-7268.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "104", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1).jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1).jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1).jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1)-140x140-6827.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1).jpg", 
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
						"id" => 104
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo5 (1)-180x180-5036.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "105", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6-140x140-5049.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6.jpg", 
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
						"id" => 105
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo6-180x180-1216.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "106", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7-140x140-6932.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7.jpg", 
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
						"id" => 106
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo7-180x180-2669.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "107", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8-140x140-5517.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8.jpg", 
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
						"id" => 107
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo8-180x180-7869.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "108", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9-140x140-5292.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9.jpg", 
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
						"id" => 108
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo9-180x180-1352.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "109", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10-140x140-7070.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10.jpg", 
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
						"id" => 109
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo10-180x180-5253.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "110", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11-140x140-7216.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11.jpg", 
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
						"id" => 110
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo11-180x180-9066.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "111", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12-140x140-3345.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12.jpg", 
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
						"id" => 111
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo12-180x180-8241.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "112", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13-140x140-3107.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13.jpg", 
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
						"id" => 112
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo13-180x180-8760.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "113", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14-140x140-1198.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14.jpg", 
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
						"id" => 113
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo14-180x180-3297.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
			"id" => "114", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15.jpg", 180, 180, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15.jpg", 180, 180, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15.jpg", 180, 180, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15-140x140-2210.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15.jpg", 
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
						"id" => 114
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
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/photo15-180x180-1102.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1408533534917-1262", 
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
	"thumbWidth" => "155", 
	"thumbHeight" => 155, 
	"captionPosition" => "below", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => true, 
	"captionBackground" => "rgb(134, 184, 183)", 
	"captionWhen" => "never", 
	"linkTo" => "image", 
	"element_id" => "ugallery-object-1408533534917-1262", 
	"row" => 125, 
	"theme_style" => "inline-gallery", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1408533565481-1188", 
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
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408533892460-1619", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
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
"wrapper_id" => "wrapper-1408533969724-1331", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
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
"rows" => 30, 
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
"wrapper_id" => "wrapper-1408709267794-1635", 
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

$region_5->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1408534159652-1018", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">ACCORDION</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1408534159652-1526", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408534167485-1350", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4
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
"rows" => 8, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line-92x4-2112.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-gallery/wave-line.png", 
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
	"element_id" => "object-1408534172550-1349", 
	"row" => 2
	), 
"wrapper_id" => "wrapper-1408709176542-1170", 
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
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5
		), 
	"custom-1410783042947" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 4
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
"rows" => 14, 
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
"wrapper_id" => "wrapper-1408534232358-1258", 
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
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1410423203222-1688", 
"rows" => 45, 
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
	"style_type" => "custom", 
	"theme_style" => "accordion", 
	"header_border_color" => "rgb(255, 255, 255)", 
	"header_bg_color" => "rgb(122, 127, 127)", 
	"panel_bg_color" => "rgb(255, 255, 255)", 
	"element_id" => "uaccordion-object-1410423203212-1823", 
	"row" => 39, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1410423443065-1968", 
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

