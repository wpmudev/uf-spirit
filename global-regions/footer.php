<?php
/* START_REGION_OUTPUT */
$footer = upfront_create_region(
			array (
  'name' => 'footer',
  'title' => 'Footer',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'footer',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 8,
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
  'background_type' => 'color',
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
  'background_color' => 'rgba(250,250,250,1)',
  'version' => '1.0.0',
)
			);

$footer->add_element("Unewnavigation", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-newnavigation_module',
  'id' => 'module-1453356812349-1925',
  'options' => 
  array (
    'type' => 'UnewnavigationModel',
    'view_class' => 'UnewnavigationView',
    'class' => 'c24 upfront-navigation',
    'has_settings' => 1,
    'id_slug' => 'unewnavigation',
    'menu_items' => 
    array (
      0 => 
      (array)(array(
         'menu-item-db-id' => 58,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'TERMS &#038; PRIVACY',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '58',
         'menu-item-target' => '',
         'menu-item-position' => 1,
         'link' => 
        (array)(array(
           'type' => 'unlink',
           'url' => '#',
           'target' => '',
        )),
      )),
    ),
    'preset' => 'footer-menu',
    'allow_sub_nav' => 
    array (
      0 => 'no',
    ),
    'allow_new_pages' => 
    array (
      0 => 'no',
    ),
    'element_id' => 'unewnavigation-object-1453356812347-1310',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'menu_slug' => 'footer-menu',
    'menu_id' => false,
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'footer-menu',
      )),
    )),
    'row' => 6,
  ),
  'row' => 6,
  'wrapper_id' => 'wrapper-1453358060831-1340',
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
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$footer->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453357589878-1163',
  'options' => 
  array (
    'content' => '<p style="text-align: right;">2014-2015 INCSUB</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453357589875-1821',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'preset' => 'copyright',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'copyright',
      )),
    )),
    'row' => 5,
  ),
  'row' => 5,
  'wrapper_id' => 'wrapper-1453358267890-1061',
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
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$regions->add($footer);

/* END_REGION_OUTPUT */
