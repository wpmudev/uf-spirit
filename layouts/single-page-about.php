<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_8 = upfront_create_region(
			array (
  'name' => 'region-8',
  'title' => 'Region 8',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'region-8',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '0',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-about/about.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 0%',
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => true,
       'row' => 130,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => true,
       'row' => 110,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => true,
       'row' => 80,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => true,
       'row' => 80,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 80,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 80,
       'hide' => 1,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 39,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => true,
       'row' => 120,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_8->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '50',
  'margin_bottom' => '0',
  'class' => 'module-1408525024897-1934',
  'id' => 'module-1408525024897-1934',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">ABOUT</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525024896-1770',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'remove-space',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525051645-1279',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 45,
      'col' => 22,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 40,
      'col' => 18,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 27,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 25,
      'col' => 14,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 35,
      'col' => 12,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 20,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 51,
    ),
  ),
));

$regions->add($region_8);

$region_3 = upfront_create_region(
			array (
  'name' => 'region-3',
  'title' => 'Region 3',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-3',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 41,
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => false,
    )),
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408529844144-1619',
  'id' => 'module-1408529844144-1619',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a href="{{upfront:home_url}}/" rel="entry">HOME</a>  &nbsp;/ &nbsp; ABOUT</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408529844142-1195',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'breadcrumbs',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408529977772-1644',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 22,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_top' => '3',
  'class' => '',
  'id' => 'module-1446013948299-1559',
  'options' => 
  array (
    'content' => '<h2 class="" style="text-align: center;"><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">Hi, I\'M MEG</span></h2>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1446013948298-1014',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'is_edited' => true,
    'row' => 15,
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1446014102101-1506',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$region_3->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1408525051697-1453',
  'id' => 'module-1408525051697-1453',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7"><span rel="color: rgb(26, 26, 26); font-family: \'Open Sans\', Arial; font-size: 24px; font-style: italic; font-weight: 300; line-height: 30px; text-align: right; text-transform: none; background-color: rgb(250, 250, 250);" data-verified="redactor" data-redactor-tag="span">I’m a personal trainer and wellness coach who is super passionate about inspiring people to live well.</span><br></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525051696-1392',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 29,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'sub-title',
    'anchor' => '',
  ),
  'row' => 29,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525441545-1325',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 22,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($region_3);

$region_4 = upfront_create_region(
			array (
  'name' => 'region-4',
  'title' => 'Region 4',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-4',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 148,
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => false,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 197,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 317,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$region_4->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1408525556951-1881',
  'id' => 'module-1446014688699-1584',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<table class=""><tbody><tr><td><table><tbody><tr><td><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p></td></tr></tbody></table></td></tr></tbody></table>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1446014688699-1949',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 51,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1408717728290' => 
      (array)(array(
         'row' => 125,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 77,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 88,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 89,
      )),
       'tablet' => 
      (array)(array(
         'row' => 112,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 144,
      )),
    )),
  ),
  'row' => 51,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014692413-1857',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 11,
      'top' => 3,
      'row' => 131,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 0,
      'order' => 1,
      'row' => 83,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 16,
      'top' => 0,
      'row' => 94,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 95,
      'top' => 0,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 2,
      'row' => 118,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
      'top' => 3,
      'row' => 150,
    ),
  ),
));

$region_4->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1408525556951-1881',
  'id' => 'module-1408525556951-1881',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525556950-1003',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 49,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1408717728290' => 
      (array)(array(
         'row' => 125,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 77,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 88,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 89,
      )),
       'tablet' => 
      (array)(array(
         'row' => 112,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 144,
      )),
    )),
  ),
  'row' => 49,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014442472-1647',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 11,
      'top' => 3,
      'row' => 131,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 0,
      'order' => 1,
      'row' => 83,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 16,
      'top' => 0,
      'row' => 94,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 95,
      'top' => 0,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 2,
      'row' => 118,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
      'top' => 3,
      'row' => 150,
    ),
  ),
));

$region_4->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1408526102009-1923',
  'id' => 'module-1408526102009-1923',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/meg-1050x545-7465.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/meg.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/meg.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 1050,
       'height' => 680,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 1439,
       'height' => 932,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 1050,
       'height' => 545,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3358',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image ',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1408526101993-1058',
    'row' => 115,
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1408718022181' => 
      (array)(array(
         'row' => 65,
      )),
       'tablet' => 
      (array)(array(
         'row' => 56,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 41,
      )),
       'mobile' => 
      (array)(array(
         'row' => 33,
      )),
    )),
    'no_padding' => '',
  ),
  'row' => 115,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014496340-1632',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 16,
      'top' => 0,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 16,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 71,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'row' => 62,
      'top' => 1,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'row' => 47,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 39,
      'top' => 1,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 16,
      'order' => 0,
    ),
  ),
));

$regions->add($region_4);

$region_6 = upfront_create_region(
			array (
  'name' => 'region-6',
  'title' => 'Region 6',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-6',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 32,
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => false,
    )),
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$region_6->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '10',
  'margin_bottom' => '0',
  'class' => 'module-1408526265806-1251',
  'id' => 'module-1408526265806-1251',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">QUALIFICATION</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408526265803-1956',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 3,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408526402494-1175',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 22,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($region_6);

$region_7 = upfront_create_region(
			array (
  'name' => 'region-7',
  'title' => 'Region 7',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-7',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 28,
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => true,
       'row' => 149,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => true,
       'row' => 150,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => true,
       'row' => 185,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 208,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 202,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 281,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => true,
       'row' => 134,
    )),
  )),
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_7->add_element("Uimage", array (
  'columns' => '3',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1424360561818-1172',
  'id' => 'module-1424360561818-1172',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo1-96x50-8478.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo1.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo1.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 96,
       'height' => 50,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 96,
       'height' => 50,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 105,
       'height' => 60,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '633',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1424360561814-1969',
    'row' => 6,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410365735039-1402',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 11,
      'order' => -1,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => -1,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 11,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$region_7->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408527009609-1170',
  'id' => 'module-1408527009609-1170',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="font-size: medium;">
	Cupcake ipsum dolor. Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon. Cupcake ipsum dolor.
</p>
<p class="" style="font-size: medium;">
	Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408527009607-1358',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 66,
    'breakpoint' => 
    (array)(array(
       'custom-1408717918354' => 
      (array)(array(
         'row' => 113,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 113,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 69,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 88,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410365735039-1402',
  'new_line' => true,
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'top' => 0,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 7,
      'top' => 1,
      'row' => 119,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 119,
      'top' => 1,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 12,
      'top' => 1,
      'row' => 75,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 10,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
      'top' => 0,
      'row' => 94,
    ),
  ),
));

$region_7->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1424360550072-1239',
  'id' => 'module-1424360550072-1239',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo2-208x51-2288.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo2.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo2.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 208,
       'height' => 51,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 208,
       'height' => 51,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 60,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '632',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1424360550069-1929',
    'row' => 6,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410365750241-1268',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 11,
      'order' => -1,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$region_7->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408526402550-1740',
  'id' => 'module-1408526402550-1740',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Cupcake ipsum dolor. Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon. Cupcake ipsum dolor. <br>
</p>
<p class="">
	Sit amet donut brownie I love. Caramels sesame snaps tiramisu I love jujubes oat cake chocolate cake I love. Jelly beans wafer jujubes unerdwear.com oat cake gummi bears. Chupa chups caramels marzipan bonbon. Candy ice cream snaps dragée macaroon.
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408526402549-1604',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'custom-1408717918354' => 
      (array)(array(
         'row' => 114,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 125,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 47,
      )),
       'tablet' => 
      (array)(array(
         'row' => 81,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 85,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 84,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410365750241-1268',
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 10,
      'top' => 0,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 7,
      'top' => 0,
      'row' => 120,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 7,
      'top' => 0,
      'row' => 131,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 12,
      'top' => 8,
      'row' => 53,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 1,
      'top' => 8,
      'col' => 10,
      'row' => 87,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'top' => 8,
      'row' => 91,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 5,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'top' => 0,
      'row' => 90,
    ),
  ),
));

$regions->add($region_7);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

