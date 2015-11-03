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
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
      'top' => 33,
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
      'top' => 15,
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
      'clear' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => false,
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
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1446013948299-1559',
  'id' => 'module-1446013948299-1559',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;"><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">Hi, I\'M MEG</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1446013948298-1014',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 15,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 8,
      )),
       'mobile' => 
      (array)(array(
         'row' => 10,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014102101-1506',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 10,
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
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'sub-title',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 17,
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525441545-1325',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => false,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 17,
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
  'row' => 203,
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
       'row' => 179,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 235,
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
  'class' => 'module-1446014688699-1584',
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
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
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
         'row' => 40,
         'theme_style' => 'text-center',
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 144,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014692413-1857',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => false,
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
      'row' => 40,
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
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
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
         'row' => 48,
         'theme_style' => 'text-center',
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 144,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014442472-1647',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => false,
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
      'row' => 48,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
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
         'row' => 59,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 41,
      )),
       'mobile' => 
      (array)(array(
         'row' => 35,
      )),
    )),
    'no_padding' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446014496340-1632',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => false,
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
      'row' => 59,
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
      'row' => 35,
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

$region_4->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446069954124-1570',
  'id' => 'module-1446069954124-1570',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 class=""><span>Develop a healthy, nurturing relationship with yourself and others - Meg, Port Melbourne.</span><span></span></h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1446069954123-1884',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 14,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 14,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070748191-1224',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 14,
      'top' => 0,
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
  'row' => 122,
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
       'col' => 24,
       'row' => 161,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 263,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => 'rgba(250,250,250,1)',
)
			);

$region_6->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '21',
  'margin_bottom' => '0',
  'class' => 'module-1408526265806-1251',
  'id' => 'module-1408526265806-1251',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">my&nbsp;QUALIFICATIONs</h2>',
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
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 7,
      )),
    )),
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
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 12,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 7,
      'top' => 13,
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

$region_6->add_group(array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1446070680988-1849',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1446070680989-1475',
  'original_col' => 20,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 83,
    ),
  ),
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446069954125-1983',
  'id' => 'module-1446069954125-1983',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Victoria-195x110-2641 (1)-195x110-8824.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Victoria-195x110-2641 (1).jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Victoria-195x110-2641 (1).jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3360',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'image-1446069954124-1656',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 26,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070681000-1411',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 0,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 26,
    ),
  ),
  'group' => 'module-group-1446070680988-1849',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070172861-1561',
  'id' => 'module-1446070172861-1561',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/AIIS-195x110-1128-195x110-7407.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/AIIS-195x110-1128.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/AIIS-195x110-1128.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3361',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070172861-1307',
    'row' => 10,
    'no_padding' => '',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 22,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070681002-1852',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 5,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 22,
    ),
  ),
  'group' => 'module-group-1446070680988-1849',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070189681-1379',
  'id' => 'module-1446070189681-1379',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Royal-195x110-6458-195x110-2531.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Royal-195x110-6458.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Royal-195x110-6458.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3362',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070189682-1208',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 24,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070681002-1776',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 2,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 24,
    ),
  ),
  'group' => 'module-group-1446070680988-1849',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070193921-1264',
  'id' => 'module-1446070193921-1264',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Victoria-Teaching-195x110-7057-195x110-6960.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Victoria-Teaching-195x110-7057.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Victoria-Teaching-195x110-7057.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3363',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070193921-1573',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 23,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070681003-1144',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 3,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 5,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 23,
    ),
  ),
  'group' => 'module-group-1446070680988-1849',
));

$region_6->add_group(array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1446070682832-1315',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1446070682833-1695',
  'original_col' => 20,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
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

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070320883-1444',
  'id' => 'module-1446070320883-1444',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Wellness-195x110-2427-195x110-2114.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Wellness-195x110-2427.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Wellness-195x110-2427.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3364',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070320883-1621',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070682844-1112',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1446070682832-1315',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070324675-1899',
  'id' => 'module-1446070324675-1899',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Western-195x110-9962-195x110-8595.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Western-195x110-9962.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Western-195x110-9962.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3365',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070324675-1191',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070682845-1030',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 5,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1446070682832-1315',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070328263-1037',
  'id' => 'module-1446070328263-1037',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/Fighting-195x110-3768-195x110-1431.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/Fighting-195x110-3768.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/Fighting-195x110-3768.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3366',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070328263-1785',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070682845-1463',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1446070682832-1315',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1446070331718-1865',
  'id' => 'module-1446070331718-1865',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/ASCA-195x110-8828-195x110-3713.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/ASCA-195x110-8828.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/ASCA-195x110-8828.jpg',
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
       'width' => 195,
       'height' => 110,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 110,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3367',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
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
    'element_id' => 'object-1446070331718-1419',
    'row' => 10,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446070682846-1258',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 5,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1446070682832-1315',
));

$regions->add($region_6);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

