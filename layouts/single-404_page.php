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
  'background_style' => 'fixed',
  'background_position_y' => '0',
  'background_position_x' => '100',
  'background_image' => '{{upfront:style_url}}/images/single-404_page/404-Bg.jpg',
  'background_image_ratio' => 1,
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
       'row' => 192,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$region_3->add_group(array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '21',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1411024470437-1633',
  'rows' => 10,
  'wrapper_id' => 'wrapper-1410879041131-1605',
  'type' => 'ModuleGroup',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 10,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 13,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 8,
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
      'left' => 5,
      'col' => 8,
      'order' => 0,
    ),
  ),
));

$region_3->add_element("Uimage", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408618043051-1621',
  'id' => 'module-1408618043051-1621',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-404_page/404-Icon-151x62-1753.png',
    'srcFull' => '{{upfront:style_url}}/images/single-404_page/404-Icon.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-404_page/404-Icon.png',
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
       'width' => 151,
       'height' => 62,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 151,
       'height' => 62,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -89.5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 330,
       'height' => 62,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '130',
    'align' => 'center',
    'stretch' => false,
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
    'element_id' => 'image-1408618043044-1280',
    'row' => 15,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1411024470478-1584',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 8,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'close_wrapper' => false,
  'group' => 'module-group-1411024470437-1633',
));

$region_3->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408618043042-1704',
  'id' => 'module-1408618043042-1704',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">KEEP CALM</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408618043041-1407',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 32,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'huge-text',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1411024470478-1584',
  'new_line' => true,
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 6,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
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
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1411024470437-1633',
));

$region_3->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408618378242-1861',
  'id' => 'module-1408618378242-1861',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">IT\'S</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408618378242-1152',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'medium-text',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1411024470478-1584',
  'new_line' => true,
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 6,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
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
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1411024470437-1633',
));

$region_3->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408618384902-1802',
  'id' => 'module-1408618384902-1802',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">GYM TIME</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408618384902-1632',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'huge-text',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1411024470478-1584',
  'new_line' => true,
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 6,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 1,
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
  ),
  'group' => 'module-group-1411024470437-1633',
));

$region_3->add_group(array (
  'columns' => '12',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '60',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1410879123419-1613',
  'rows' => 10,
  'wrapper_id' => 'wrapper-1410879068397-1666',
  'type' => 'ModuleGroup',
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
      'col' => 10,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'top' => 68,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 8,
    ),
  ),
));

$region_3->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408618826597-1752',
  'id' => 'module-1408618826597-1752',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">404 ERROR PAGE NOT FOUND</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408618826595-1913',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410879123464-1829',
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
      'col' => 10,
      'order' => 0,
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
  'close_wrapper' => false,
  'group' => 'module-group-1410879123419-1613',
));

$region_3->add_element("PlainTxt", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408619056861-1071',
  'id' => 'module-1408619056861-1071',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;"></p><span class="inline_color" style="color: rgb(255, 255, 255)"><p class="" style="text-align: center;"><strong>THIS PAGE DOESN\'T EXIST!</strong></p><p class="" style="text-align: center;"><strong>LETS GO BACK </strong><a href="{{upfront:home_url}}/" rel="entry"><strong>HOME</strong></a></p></span><p class="" style="text-align: center;"><a href="{{upfront:home_url}}/" rel="entry"></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408619056862-1662',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 15,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-txt-404-content',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1410879123464-1829',
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
  'group' => 'module-group-1410879123419-1613',
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

