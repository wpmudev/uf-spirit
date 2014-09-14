<?php
$footer = upfront_create_region(
			array(
"name" => "footer", 
"title" => "Footer", 
"type" => "wide", 
"scope" => "global", 
"container" => "footer", 
"position" => 20, 
"allow_sidebar" => true
),
			array(
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(250,250,250,1)", 
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

$footer->add_element("PlainTxt", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408446765229-1617", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">2014 MEG CAMPBEL</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408446765226-1396", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 2, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "copyright", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 4
			), 
		"custom-1408717978058" => array(
			"row" => 2
			), 
		"custom-1408718022181" => array(
			"row" => 2
			), 
		"tablet" => array(
			"row" => 5
			), 
		"custom-1408718098456" => array(
			"row" => 5
			)
		)
	), 
"wrapper_id" => "wrapper-1408447010252-1606", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 3, 
		"top" => 9, 
		"order" => 0
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 5, 
		"order" => 4, 
		"row" => 10
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 10, 
		"row" => 8, 
		"order" => 4, 
		"top" => 5
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"order" => 4, 
		"top" => 5, 
		"row" => 8
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 4, 
		"row" => 8, 
		"top" => 5
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 4, 
		"row" => 8, 
		"top" => 5
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 3
		)
	)
));

$footer->add_element("Unewnavigation", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1408447780698-1711", 
"rows" => 10, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 104, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Archive", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "104", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 105, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Terms", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "105", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 106, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Privacy", 
			"menu-item-url" => "#", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "106", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			)), 
	"menu_style" => "horizontal", 
	"menu_alignment" => "center", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1408447780692-1228", 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "footer-menu", 
	"row" => 4, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array(), 
	"theme_style" => "footer-menu", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 5, 
			"width" => 810
			), 
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			), 
		"custom-1408717978058" => array(
			"row" => 4, 
			"width" => 720, 
			"burger_menu" => "", 
			"burger_alignment" => "left", 
			"burger_over" => "over"
			), 
		"custom-1408718022181" => array(
			"row" => 7, 
			"width" => 630
			), 
		"tablet" => array(
			"row" => 1, 
			"width" => 570
			), 
		"custom-1408718098456" => array(
			"row" => 4, 
			"width" => 450
			)
		)
	), 
"wrapper_id" => "wrapper-1408448077097-1571", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"top" => 9, 
		"order" => 1
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 16, 
		"top" => 0, 
		"order" => 1, 
		"row" => 11
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14, 
		"top" => 0, 
		"order" => 1, 
		"row" => 10
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 14, 
		"order" => 1, 
		"top" => 0, 
		"row" => 13
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 1, 
		"top" => 1, 
		"row" => 7
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 1, 
		"top" => 0, 
		"row" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 5, 
		"top" => 0
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "footer-text-default", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plaintxt", 
	"has_settings" => 1, 
	"content" => "<p style=\"text-align:center;\" class=\"\"><em>\"Take care of your body. It is&nbsp;</em><em>the only place you have to live.\"</em></p>", 
	"class" => "c24 upfront-plain_txt", 
	"element_id" => "footer-text-default-object", 
	"type" => "PlainTxtModel", 
	"row" => 11, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => -2
			), 
		"custom-1408717978058" => array(
			"row" => 12
			)
		)
	), 
"wrapper_id" => "wrapper-1408447070412-1217", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"top" => 5, 
		"order" => 2
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 0, 
		"order" => 2, 
		"row" => 4, 
		"hide" => 1
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 14, 
		"order" => 2, 
		"row" => 18, 
		"hide" => 1
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 8, 
		"order" => 2, 
		"top" => 4, 
		"hide" => 1
		), 
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 2, 
		"top" => 0, 
		"hide" => 1
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 8, 
		"order" => 2, 
		"top" => 1, 
		"hide" => 1
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"hide" => 1
		)
	)
));

$footer->add_element("Usearch", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1408446264293-1066", 
"rows" => 16, 
"options" => array(
	"type" => "UsearchModel", 
	"view_class" => "UsearchView", 
	"class" => "c24 upfront-search", 
	"has_settings" => 1, 
	"id_slug" => "usearch", 
	"placeholder" => "Wellness", 
	"label" => "__image__", 
	"is_rounded" => 0, 
	"color" => "", 
	"element_id" => "usearch-object-1408446264283-1641", 
	"row" => 10, 
	"theme_style" => "footer-search", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1408717918354" => array(
			"row" => 10
			)
		)
	), 
"wrapper_id" => "wrapper-1408447115527-1969", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 6, 
		"top" => 6, 
		"order" => 3
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"top" => 8, 
		"order" => 3, 
		"row" => 16, 
		"hide" => 1
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 5, 
		"top" => 1, 
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
		"hide" => 1
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 6, 
		"hide" => 1
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"hide" => 1
		)
	)
));

$footer->add_element("Code", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410521365525-1583", 
"rows" => 18, 
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
	"element_id" => "upfront-code_element-object-1410521365524-1838", 
	"code_selection_type" => "Create", 
	"script" => "$(\".upfront-region-container-header\").each(function(){
    var htmltop = parseInt($(\"html\").css(\"margin-top\"));
    $(this).attr(\"data-default-top\", parseInt($(this).offset().top));
    if($(this).offset().top-htmltop == 0) {
       $(this).addClass(\"fixed_menu\").css({
            \"margin-top\": htmltop
        });         
    }
});
$(window).scroll(function(){
    $(\".upfront-region-container-header\").each(function(){
        var eltop = $(this).attr(\"data-default-top\");
        var htmltop = parseInt($(\"html\").css(\"margin-top\"));
        if(eltop-parseInt($(window).scrollTop())-htmltop <= 0) {
            $(this).addClass(\"fixed_menu\").css({
                \"margin-top\": htmltop
            });
            if (parseInt($(window).scrollLeft()) > 0) {
                $(this).find(\".upfront-grid-layout\").css({
                    \"margin-left\": 0
                });
                $(this).css({
                    \"margin-left\": 0-parseInt($(window).scrollLeft())
                });            
            }
        } else {
            $(this).removeClass(\"fixed_menu\").css({
                \"margin-top\" : 0,
                \"margin-left\": \"auto\"
            });
            if($(\"body\").hasClass(\"upfront-layout-view\")) {
                $(this).css({ \"margin-left\": 0 }); 
            } else {
              $(this).css({ \"margin-left\": \"auto\" });
            }
             $(this).find(\".upfront-grid-layout\").css({
                \"margin-left\": \"auto\"
            });
           
        }
    });
});", 
	"markup" => "<b></b>", 
	"style" => "/* Your styles here */", 
	"row" => 12, 
	"breakpoint" => array(
		"mobile" => array(
			"row" => 12
			)
		)
	), 
"wrapper_id" => "wrapper-1410521454700-1324", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"row" => 18
		)
	)
));

$regions->add($footer);

