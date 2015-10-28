<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_10 = upfront_create_region(
			array (
  'name' => 'region-10',
  'title' => 'Region 10',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'region-10',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 68,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '0',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/services.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 0%',
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => true,
       'row' => 69,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => true,
       'row' => 59,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => true,
       'row' => 49,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => true,
       'row' => 39,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 39,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 19,
       'hide' => 1,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 34,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_10->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '19',
  'margin_bottom' => '0',
  'class' => 'module-1408525024897-1934',
  'id' => 'module-1408525024897-1934',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">SERVICES</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525024896-1770',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
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
      'top' => 16,
      'col' => 22,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 14,
      'col' => 18,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 12,
      'col' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 7,
      'col' => 14,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'top' => 11,
      'col' => 12,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 24,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 12,
    ),
  ),
));

$regions->add($region_10);

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
     'custom-1410783042947' => 
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
    'content' => '<p class=""><a href="{{upfront:home_url}}/" rel="entry">HOME</a>  &nbsp;/ &nbsp; SERVICES</p>',
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
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'breadcrumbs',
      )),
    )),
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
      'edited' => true,
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
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
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
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1408528105336-1414',
  'id' => 'module-1408528105336-1414',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">WORK WITH ME</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408528105334-1955',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 1,
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
  'wrapper_id' => 'wrapper-1408528213095-1209',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 1,
      'clear' => true,
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 6,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
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
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1408525051697-1453',
  'id' => 'module-1408525051697-1453',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;">Whether you prefer one to one training or the dynamic environment of group training in the outdoors, you’ll receive an individualised approach with high quality instruction and support.<br></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525051696-1392',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 18,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'sub-title',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
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
      'order' => 2,
      'clear' => true,
      'edited' => true,
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
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
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
  'row' => 60,
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
     'custom-1410783042947' => 
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

$region_4->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1408525441617-1347',
  'id' => 'module-1408525441617-1347',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525441616-1152',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 69,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1408717918354' => 
      (array)(array(
         'row' => 20,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 23,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 23,
      )),
       'tablet' => 
      (array)(array(
         'row' => 18,
         'theme_style' => 'text-center',
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 24,
      )),
       'custom-1408717728290' => 
      (array)(array(
         'row' => 25,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 12,
      )),
       'mobile' => 
      (array)(array(
         'row' => 28,
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525530814-1418',
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
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 16,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'top' => 2,
      'order' => 0,
      'row' => 31,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'top' => 0,
      'order' => 0,
      'row' => 26,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 5,
      'top' => 4,
      'order' => 0,
      'row' => 29,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 10,
      'row' => 29,
      'top' => 4,
      'order' => 0,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'row' => 18,
      'top' => 4,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 8,
      'row' => 30,
      'top' => 4,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 15,
      'top' => 5,
      'order' => 0,
      'row' => 18,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 28,
      'top' => 0,
    ),
  ),
));

$region_4->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1408525556951-1881',
  'id' => 'module-1408525556951-1881',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525556950-1003',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 66,
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
         'row' => 91,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 110,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 87,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 139,
      )),
    )),
  ),
  'row' => 66,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525591417-1195',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 17,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 15,
      'order' => 3,
      'top' => 1,
      'row' => 97,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 3,
      'row' => 116,
      'top' => 0,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'order' => 3,
      'row' => 93,
      'top' => 0,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'top' => 0,
      'order' => 3,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'top' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 16,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 139,
    ),
  ),
));

$regions->add($region_4);

$region_5 = upfront_create_region(
			array (
  'name' => 'region-5',
  'title' => 'Region 5',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-5',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 40,
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
       'hide' => 1,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => false,
    )),
     'custom-1410783042947' => 
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

$region_5->add_element("Ugallery", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1421730873248-1107',
  'id' => 'module-1421730873248-1107',
  'options' => 
  array (
    'type' => 'UgalleryModel',
    'view_class' => 'UgalleryView',
    'has_settings' => 1,
    'class' => 'c24 upfront-gallery',
    'id_slug' => 'ugallery',
    'status' => 'ok',
    'images' => 
    array (
      0 => 
      (array)(array(
         'id' => '3354',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery2-180x180-1991.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2-300x140.jpg',
            1 => 300,
            2 => 140,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2-1024x477.jpg',
            1 => 1024,
            2 => 477,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2.jpg',
            1 => 1080,
            2 => 503,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery2-180x180-6815.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery2.jpg',
             'full' => 
            (array)(array(
               'width' => 1080,
               'height' => 503,
            )),
             'crop' => 
            (array)(array(
               'width' => 180,
               'height' => 180,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '180',
                 'height' => '180',
                 'left' => 103,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 386,
                 'height' => 180,
              )),
               'id' => 3354,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 386,
           'height' => 180,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 180,
           'height' => 180,
        )),
         'cropOffset' => 
        (array)(array(
           'top' => 0,
           'left' => 103,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery2-180x180-1991.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery2.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => false,
         'linkTarget' => '',
         'imageLinkType' => false,
      )),
      1 => 
      (array)(array(
         'id' => '49',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery3-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery3-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery3-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
            1 => 1080,
            2 => 720,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery3-150x150-8886.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
             'full' => 
            (array)(array(
               'width' => 1080,
               'height' => 720,
            )),
             'crop' => 
            (array)(array(
               'width' => 150,
               'height' => 150,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '150',
                 'height' => '150',
                 'left' => 37,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 225,
                 'height' => 150,
              )),
               'id' => 49,
               'element_id' => 'ugallery-object-1421730873246-1959',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 225,
           'height' => 150,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 150,
           'height' => 150,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '150',
           'height' => '150',
           'left' => 37,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery3-150x150-8886.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
           'target' => '',
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-services/gallery3.jpg',
         'imageLinkTarget' => '',
      )),
      2 => 
      (array)(array(
         'id' => '3356',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery7 (1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7 (1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7 (1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7 (1)-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7 (1).jpg',
            1 => 1080,
            2 => 720,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery7 (1)-180x180-8239.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery7 (1).jpg',
             'full' => 
            (array)(array(
               'width' => 1080,
               'height' => 720,
            )),
             'crop' => 
            (array)(array(
               'width' => 180,
               'height' => 180,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '180',
                 'height' => '180',
                 'left' => 45,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 270,
                 'height' => 180,
              )),
               'id' => 3356,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 270,
           'height' => 180,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 180,
           'height' => 180,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '180',
           'height' => '180',
           'left' => 45,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery7 (1)-180x180-8239.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery7 (1).jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => false,
         'linkTarget' => '',
         'imageLinkType' => false,
      )),
      3 => 
      (array)(array(
         'id' => '3357',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery9.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery9-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery9-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery9-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery9.jpg',
            1 => 1080,
            2 => 720,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery9-180x180-4814.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery9.jpg',
             'full' => 
            (array)(array(
               'width' => 1080,
               'height' => 720,
            )),
             'crop' => 
            (array)(array(
               'width' => 180,
               'height' => 180,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '180',
                 'height' => '180',
                 'left' => 45,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 270,
                 'height' => 180,
              )),
               'id' => 3357,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 270,
           'height' => 180,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 180,
           'height' => 180,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '180',
           'height' => '180',
           'left' => 45,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery9-180x180-4814.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery9.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => false,
         'linkTarget' => '',
         'imageLinkType' => false,
      )),
      4 => 
      (array)(array(
         'id' => '57',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery11-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery11-225x300.jpg',
            1 => 225,
            2 => 300,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
            1 => 768,
            2 => 1024,
            3 => false,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
            1 => 768,
            2 => 1024,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery11-150x150-4707.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
             'full' => 
            (array)(array(
               'width' => 768,
               'height' => 1024,
            )),
             'crop' => 
            (array)(array(
               'width' => 150,
               'height' => 150,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '150',
                 'height' => '150',
                 'left' => 0,
                 'top' => 25,
              )),
               'resize' => 
              (array)(array(
                 'width' => 150,
                 'height' => 200,
              )),
               'id' => 57,
               'element_id' => 'ugallery-object-1421730873246-1959',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 150,
           'height' => 200,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 150,
           'height' => 150,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '150',
           'height' => '150',
           'left' => 0,
           'top' => 25,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery11-150x150-4707.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
           'target' => '',
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-services/gallery11.jpg',
         'imageLinkTarget' => '',
      )),
    ),
    'elementSize' => 
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'labelFilters' => 
    array (
    ),
    'thumbProportions' => '1',
    'thumbWidth' => '180',
    'thumbHeight' => 180,
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' => 
    array (
      0 => 'true',
    ),
    'fitThumbCaptions' => 
    array (
    ),
    'thumbCaptionsHeight' => 20,
    'linkTo' => 'image',
    'even_padding' => 
    array (
    ),
    'thumbPadding' => 15,
    'lightbox_show_close' => 
    array (
      0 => 'true',
    ),
    'lightbox_show_image_count' => 
    array (
      0 => 'true',
    ),
    'lightbox_click_out_close' => 
    array (
      0 => 'true',
    ),
    'lightbox_active_area_bg' => 'rgba(255,255,255,1)',
    'lightbox_overlay_bg' => 'rgba(0,0,0,0.2)',
    'styles' => '',
    'element_id' => 'ugallery-object-1421730873246-1959',
    'row' => 35,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'inline-gallery',
         'row' => 52,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '_default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1421730923377-1301',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'col' => 18,
      'order' => 0,
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
      'row' => 52,
      'hide' => 0,
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

$regions->add($region_5);

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
  'row' => 35,
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
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 23,
    )),
  )),
)
			);

$region_6->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1408526265806-1251',
  'id' => 'module-1408526265806-1251',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">MORE</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408526265803-1956',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 9,
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
      'left' => 1,
      'col' => 20,
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
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$regions->add($region_6);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 's-training.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 's-training.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 's-retreats.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 's-retreats.php');

$region_1 = upfront_create_region(
			array (
  'name' => 'region-1',
  'title' => 'Region 1',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-1',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 68,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 54,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_style' => 'fixed',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/Homepage-Services-Bg3.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 50%',
)
			);

$region_1->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '22',
  'margin_bottom' => '0',
  'class' => 'module-1408443814379-1179',
  'id' => 'module-1446011639533-1052',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5 class="">WORKPLACE WELLNESS</h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1446011639533-1832',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 5,
      )),
       'tablet' => 
      (array)(array(
         'row' => 4,
         'theme_style' => '_default',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 5,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446011641717-1447',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 7,
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
      'left' => 1,
      'col' => 14,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 10,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 21,
      'row' => 4,
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
      'top' => 12,
    ),
    'custom-1410780542364' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 14,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 12,
      'top' => 16,
      'row' => 11,
    ),
  ),
));

$region_1->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408443837196-1997',
  'id' => 'module-1446011643762-1467',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.<br><a href="{{upfront:home_url}}/about/" rel="entry"></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1446011643762-1413',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 26,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 24,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => '_default',
         'row' => 36,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446011645834-1006',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 7,
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
      'left' => 1,
      'col' => 14,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 10,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 36,
      'top' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410780542364' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 14,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 11,
      'top' => 0,
      'row' => 30,
    ),
  ),
));

$regions->add($region_1);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

