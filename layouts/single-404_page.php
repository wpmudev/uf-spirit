<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

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
  'row' => 164,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => 'rgba(107,177,166,1)',
  'background_style' => 'full',
  'background_position_y' => '0',
  'background_position_x' => '100',
  'background_image' => '{{upfront:style_url}}/images/single-404_page/about.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
  'background_repeat' => 'no-repeat',
  'background_position' => '100% 0%',
  'breakpoint' => 
  (array)(array(
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 124,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 89,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_3->add_element("PlainTxt", array (
  'columns' => '13',
  'margin_left' => '6',
  'margin_right' => '0',
  'margin_top' => '29',
  'margin_bottom' => '0',
  'class' => 'module-1408618826597-1752',
  'id' => 'module-1408618826597-1752',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">PAGE NOT FOUND</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408618826595-1913',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 85,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 32,
      )),
       'mobile' => 
      (array)(array(
         'row' => 22,
      )),
    )),
  ),
  'row' => 85,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446078441284-1274',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 0,
      'row' => 32,
      'top' => 35,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 22,
      'top' => 26,
    ),
  ),
));

$region_3->add_element("Button", array (
  'columns' => '5',
  'margin_left' => '10',
  'margin_top' => '0',
  'class' => 'button-style',
  'id' => 'module-1446078318042-1974',
  'options' => 
  array (
    'content' => 'BACK to&nbsp;HOME<br class="nosortable">',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1446078318040-1682',
    'link' => 
    (array)(array(
       'type' => 'homepage',
       'url' => '{{upfront:home_url}}',
       'target' => '',
    )),
    'row' => 14,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 14,
      )),
    )),
  ),
  'content' => 'Click here',
  'href' => '',
  'align' => 'center',
  'row' => 14,
  'wrapper_id' => 'wrapper-1446078476948-1500',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'row' => 14,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

