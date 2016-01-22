<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_8 = upfront_create_region(
			array (
  'name' => 'region-8',
  'title' => 'Region 8',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-8',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 60,
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
  'background_type' => 'image',
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
  'background_color' => '',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-about/bg-page-about.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
)
			);

$region_8->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425481042-1625',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425481041-1994',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425481042-1634',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_8->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453425360194-1851',
  'options' => 
  array (
    'content' => '<h1 style="text-align: center;">ABOUT</h1>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453425360193-1754',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '200',
    'bottom_padding_num' => '200',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '200',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '200',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453425458522-1811',
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

$region_8->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425485739-1333',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425485738-1139',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425485739-1653',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($region_8);

$region_3 = upfront_create_region(
			array (
  'name' => 'region-3',
  'title' => 'Region 3',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-3',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 46,
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
)
			);

$region_3->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425778555-1884',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425778554-1342',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425778555-1264',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453425458783-1148',
  'options' => 
  array (
    'content' => '<p><a href="{{upfront:home_url}}" target="_self" data-upfront-link-type="homepage">HOME</a> &nbsp;/ &nbsp;ABOUT</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453425458783-1679',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '30',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'preset' => 'breadcrumbs',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'breadcrumbs',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '30',
    'row' => 8,
  ),
  'row' => 8,
  'wrapper_id' => 'wrapper-1453425594425-1043',
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

$region_3->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425780693-1523',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425780692-1973',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425780693-1789',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_3->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425782881-1817',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425782880-1567',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425782881-1543',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453425594668-1243',
  'options' => 
  array (
    'content' => '<h2 style="text-align: center;">HI, I\'M MEG</h2>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453425594667-1731',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 6,
  ),
  'row' => 6,
  'wrapper_id' => 'wrapper-1453425744264-1167',
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

$region_3->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425785780-1702',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425785779-1961',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425785780-1885',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_3->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425820488-1317',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425820488-1179',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425820488-1827',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_3->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453425744532-1902',
  'options' => 
  array (
    'content' => '<h3 style="text-align: center;">I\'m a personal trainer and wellness coach who is super passionate about inspiring people to live well.</h3>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453425744531-1920',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '30',
    'bottom_padding_num' => '30',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '30',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '30',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453425811280-1466',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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

$region_3->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453425823393-1127',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453425823393-1215',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453425823393-1114',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($region_3);

$region_4 = upfront_create_region(
			array (
  'name' => 'region-4',
  'title' => 'Region 4',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-4',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 189,
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
  'background_color' => '#ffffff',
)
			);

$region_4->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453426443302-1824',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453426443300-1078',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453426443301-1118',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_4->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453425811570-1374',
  'options' => 
  array (
    'content' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453425811570-1309',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '30',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '30',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453426330931-1157',
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

$region_4->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453426331221-1878',
  'options' => 
  array (
    'content' => '<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453426331220-1661',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '30',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '30',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453426348569-1348',
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

$region_4->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453426445624-1842',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453426445623-1117',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453426445624-1928',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_4->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453425360280-1689',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/img-page-about-1050x545-2788.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/img-page-about.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/img-page-about.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
    'image_id' => '1708',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453425360275-1491',
    'padding_slider' => '15',
    'top_padding_num' => '60',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 115,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '60',
  ),
  'row' => 115,
  'wrapper_id' => 'wrapper-1453426485867-1393',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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

$region_4->add_element("PlainTxt", array (
  'columns' => '9',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453426348937-1318',
  'options' => 
  array (
    'content' => '<h6>Develop a healthy, nurturing relationship with yourself and others – Meg, Port Melbourne.</h6>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453426348936-1567',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '60',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '60',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453427000611-1525',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
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

$region_4->add_element("Uspacer", array (
  'columns' => '15',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453427044379-1357',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453427044379-1753',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453427044379-1552',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($region_4);

$region_6 = upfront_create_region(
			array (
  'name' => 'region-6',
  'title' => 'Region 6',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-6',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 126,
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
)
			);

$region_6->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453427000953-1889',
  'options' => 
  array (
    'content' => '<h2 style="text-align: center;">MY QUALIFICATIONS</h2>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453427000953-1948',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '100',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '100',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '15',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453427181495-1288',
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

$region_6->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453427707766-1315',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453427707766-1344',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453427707766-1817',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_6->add_group(array (
  'columns' => '20',
  'class' => '',
  'id' => 'module-group-1453427701734-1307',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1453427610149-1506',
  'original_col' => 24,
  'top_padding_num' => '60',
  'bottom_padding_num' => 0,
  'use_padding' => 'yes',
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '60',
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

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453426486206-1352',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-victoria-195x110-7432.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-victoria.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-victoria.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
    'image_id' => '1709',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453426486202-1722',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 10,
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1453427701739-1494',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
  'group' => 'module-group-1453427701734-1307',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427294507-1661',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-aiis-195x110-5840.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-aiis.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-aiis.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
    'image_id' => '1710',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427294502-1783',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 10,
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1453427701742-1195',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => false,
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
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1453427701734-1307',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427453520-1337',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-royal-195x110-6111.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-royal.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-royal.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
    'image_id' => '1711',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427453516-1691',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 10,
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1453427701747-1000',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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
  'group' => 'module-group-1453427701734-1307',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427317419-1129',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-victorian-195x110-1092.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-victorian.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-victorian.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
    'image_id' => '1712',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427317415-1400',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 10,
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1453427701750-1534',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1453427701734-1307',
));

$region_6->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453427710311-1954',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453427710311-1367',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453427710311-1339',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_6->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453427934985-1683',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453427934985-1352',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453427934985-1865',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_6->add_group(array (
  'columns' => '20',
  'class' => '',
  'id' => 'module-group-1453427930997-1437',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1453427757749-1812',
  'original_col' => 24,
  'top_padding_num' => 0,
  'bottom_padding_num' => '0',
  'use_padding' => 'yes',
  'lock_padding' => '',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '0',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427541589-1461',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-wellness-195x110-6107.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-wellness.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-wellness.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
       'left' => -22.5,
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
    'image_id' => '1713',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427541584-1425',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 28,
  ),
  'row' => 28,
  'wrapper_id' => 'wrapper-1453427931001-1135',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
  'group' => 'module-group-1453427930997-1437',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427758159-1118',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-western-195x110-2099.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-western.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-western.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
       'left' => -157.5,
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
    'image_id' => '1714',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427758155-1757',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 28,
  ),
  'row' => 28,
  'wrapper_id' => 'wrapper-1453427931003-1699',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => false,
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
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1453427930997-1437',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427790853-1585',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-fighting-195x110-3302.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-fighting.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-fighting.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
       'left' => -67.5,
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
    'image_id' => '1715',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427790847-1308',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 28,
  ),
  'row' => 28,
  'wrapper_id' => 'wrapper-1453427931006-1261',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
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
  'group' => 'module-group-1453427930997-1437',
));

$region_6->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1453427840813-1375',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-about/logo-asca-195x110-4667.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-about/logo-asca.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-about/logo-asca.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
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
       'left' => -22.5,
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
    'image_id' => '1716',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1453427840809-1104',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'row' => 28,
  ),
  'row' => 28,
  'wrapper_id' => 'wrapper-1453427931009-1208',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1453427930997-1437',
));

$region_6->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453427937817-1417',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453427937816-1704',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453427937817-1933',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($region_6);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

