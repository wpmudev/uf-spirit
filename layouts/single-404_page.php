<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 143,
  'background_type' => 'image',
  'background_color' => '#ufc6',
  'version' => '1.0.0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-404_page/bg-page-404.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '6',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425061148-1476',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425061148-1285',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425061148-1364',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$main->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'default-nav-text-module',
  'id' => 'default-nav-text-module',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plaintxt',
    'usingNewAppearance' => true,
    'content' => '<h1 style="text-align: center;">PAGE NOT FOUND</h1>',
    'element_id' => 'default-nav-text-object',
    'class' => 'c24',
    'type' => 'PlainTxtModel',
    'has_settings' => 1,
    'top_padding_use' => 'yes',
    'top_padding_num' => '150',
    'padding_slider' => '15',
    'bottom_padding_num' => '15',
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_slider' => '150',
    'row' => 100,
  ),
  'row' => 100,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'default-nav-text-module-wrapper',
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
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'left' => 0,
      'top' => 0,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'left' => 0,
      'top' => 0,
      'order' => 0,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '6',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425065102-1632',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425065102-1922',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425065102-1224',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$main->add_element("Uspacer", array (
  'columns' => '9',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425110163-1316',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425110163-1851',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425110163-1056',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'button-style',
  'id' => 'module-1453424974181-1639',
  'options' => 
  array (
    'content' => 'BACK TO HOME',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1453424974177-1926',
    'link' => 
    (array)(array(
       'type' => 'homepage',
       'url' => '{{upfront:home_url}}',
       'target' => '',
    )),
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '200',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '200',
  ),
  'content' => 'Click here',
  'href' => '',
  'align' => 'center',
  'row' => 11,
  'wrapper_id' => 'wrapper-1453425088015-1561',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '9',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425114635-1263',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425114635-1140',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425114635-1739',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

