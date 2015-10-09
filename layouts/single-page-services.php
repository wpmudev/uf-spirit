<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_10 = upfront_create_region(
			array (
  'name' => 'region-10',
  'title' => 'Region 10',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-10',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 69,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '0',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/Services-Bg.jpg',
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
)
			);

$region_10->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '17',
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
    'content' => '<h2 class="" style="text-align: center;">WELLNESS COACHING CONSULTATIONS</h2>',
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
    'theme_style' => 'remove-bottom-space',
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

$region_3->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408528311775-1023',
  'id' => 'module-1408528311775-1023',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services/wave-line (1)-92x4-6498.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services/wave-line (1).png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services/wave-line (1).png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 92,
       'height' => 4,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 92,
       'height' => 4,
    )),
    'position' => 
    (array)(array(
       'top' => -0.5,
       'left' => -29,
    )),
    'marginTop' => 0.5,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 5,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '164',
    'align' => 'center',
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
    'element_id' => 'object-1408528311776-1623',
    'row' => 2,
    'anchor' => '',
    'theme_style' => 'waved-line',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408528326968-1084',
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
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 11,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 9,
      'col' => 4,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 4,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 4,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 3,
      'col' => 4,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
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
    'content' => '<p class="" style="text-align: center;">Candy canes croissant halvah sesame snaps topping candy powder jelly. Sugar plum brownie lemon drops lollipop. Toffee carrot cake croissant fruitcake sesame snaps jujubes icing</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525051696-1392',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 18,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'sub-title',
    'anchor' => '',
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
  'columns' => '5',
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
    'content' => '<p class="" style="text-align: center;">Pie soufflé cookie cupcake tart. Jelly marzipan chupa chups. Cotton candy biscuit chocolate. Tiramisu bear claw carrot cake pastry brownie dessert oat cake. Cookie bonbon apple pie Cheesecake cheesecake</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525441616-1152',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'small-text',
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
         'row' => 34,
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
      'col' => 11,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
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
      'left' => 1,
      'col' => 10,
      'row' => 24,
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
      'row' => 40,
      'top' => 3,
    ),
  ),
  'close_wrapper' => false,
));

$region_4->add_element("Button", array (
  'columns' => '5',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1414743692979-1953',
  'id' => 'module-1414743692979-1953',
  'options' => 
  array (
    'content' => 'Contact Us',
    'href' => '{{upfront:home_url}}/contactus/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1414743692979-1383',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'medium-button',
    'row' => 6,
    'theme_style' => 'button-style',
    'is_edited' => true,
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525530814-1418',
  'new_line' => true,
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
      'left' => 1,
      'col' => 5,
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
));

$region_4->add_element("PlainTxt", array (
  'columns' => '16',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1408525556951-1881',
  'id' => 'module-1408525556951-1881',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow.</p><p class=""></p><p class=""><strong>Sweet topping cake brownie &nbsp;fruitcake powder?</strong>&nbsp;<br><br>soufflé cupcake. ingerbread lollipop sweet roll ice cream dessert candy canes ice cream. Tiramisu carrot cake bonbon powder. Muffin tootsie roll dragée. Unerdwear.com marshmallow ice cream gingerbread candy. Tiramisu chupa chups fruitcake bonbon cupcake marshmallow ice cream. Sweet roll fruitcake sugar plum halvah tart tootsie roll. Bonbon liquorice icing marshmallow cheesecake. Macaroon biscuit bear claw chocolate cake tiramisu lemon drops. Chocolate carrot &nbsp;macaroon chocolate bar cotton candy dragée. Sweet topping.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408525556950-1003',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 93,
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
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408525591417-1195',
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
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
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
         'id' => '48',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery2.jpg',
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
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2-300x139.jpg',
            1 => 300,
            2 => 139,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery2-1024x476.jpg',
            1 => 1024,
            2 => 476,
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
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery2-150x150-6949.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery2.jpg',
             'full' => 
            (array)(array(
               'width' => 1080,
               'height' => 503,
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
                 'left' => 86,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 322,
                 'height' => 150,
              )),
               'id' => 48,
               'element_id' => 'ugallery-object-1421730873246-1959',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 322,
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
           'left' => 86,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery2-150x150-6949.jpg',
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
         'linkTarget' => '',
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
      )),
      2 => 
      (array)(array(
         'id' => '53',
         'srcFull' => '{{upfront:style_url}}/images/single-page-services/gallery7.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-services/gallery7.jpg',
            1 => 1080,
            2 => 720,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery7-150x150-3052.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery7.jpg',
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
               'id' => 53,
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
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery7-150x150-3052.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1421730873246-1959',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-services/gallery7.jpg',
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
      )),
      3 => 
      (array)(array(
         'id' => '55',
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
            0 => '{{upfront:style_url}}/images/single-page-services/gallery9-1024x682.jpg',
            1 => 1024,
            2 => 682,
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
             'url' => '{{upfront:style_url}}/images/single-page-services/gallery9-150x150-1493.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-services/gallery9.jpg',
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
               'id' => 55,
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
         'src' => '{{upfront:style_url}}/images/single-page-services/gallery9-150x150-1493.jpg',
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
         'linkTarget' => '',
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
    'thumbWidth' => '150',
    'thumbHeight' => 150,
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' => 
    array (
      0 => 'true',
    ),
    'linkTo' => 'image',
    'even_padding' => 
    array (
    ),
    'thumbPadding' => 50,
    'fitThumbCaptions' => false,
    'thumbCaptionsHeight' => 20,
    'element_id' => 'ugallery-object-1421730873246-1959',
    'row' => 48,
    'anchor' => '',
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
  'row' => 47,
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

$region_6->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '9',
  'margin_bottom' => '0',
  'class' => 'module-1408529743280-1743',
  'id' => 'module-1408529743280-1743',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408529743279-1531',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 0,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'divider',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408529843963-1101',
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
      'left' => 2,
      'col' => 18,
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

$region_6->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408526265806-1251',
  'id' => 'module-1408526265806-1251',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">MORE SERVICES</h2>',
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
    'theme_style' => 'remove-bottom-space',
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
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$region_6->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '10',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408526143443-1609',
  'id' => 'module-1408526143443-1609',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services/wave-line (1)-92x4-3796.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services/wave-line (1).png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services/wave-line (1).png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 92,
       'height' => 4,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 92,
       'height' => 4,
    )),
    'position' => 
    (array)(array(
       'top' => -0.5,
       'left' => -29,
    )),
    'marginTop' => 0.5,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 5,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '164',
    'align' => 'center',
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
    'element_id' => 'image-1408526143438-1263',
    'row' => 2,
    'anchor' => '',
    'theme_style' => 'waved-line',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408526465194-1338',
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
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 11,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 9,
      'col' => 4,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 4,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 4,
    ),
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 3,
      'col' => 4,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
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
));

$regions->add($region_6);

$region_11 = upfront_create_region(
			array (
  'name' => 'region-11',
  'title' => 'Region 11',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-11',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 68,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => 'rgba(255,255,255,1)',
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/Homepage-Services-Bg1.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 100%',
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

$region_11->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'class' => 'module-1408443814379-1179',
  'id' => 'module-1408443814379-1179',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_colors upfront_theme_color_2">HOLISTIC PERSONAL AND GROUP TRAINING</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408443814379-1593',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 4,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 7,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408443818900-1429',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 9,
      'order' => 0,
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
      'col' => 9,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 11,
      'top' => 16,
      'row' => 13,
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

$region_11->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408443837196-1997',
  'id' => 'module-1408443837196-1997',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Holistic Training that is<strong> Adaptive, Intuitive, Functional</strong>. High quality holistic training Thorough Health Assessment Individualised goal setting and personalised fitness plans.<br><a href="{{upfront:home_url}}/about/" rel="entry"></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408443837197-1885',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'remove-top-space',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 21,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408443842377-1925',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 9,
      'order' => 0,
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
      'col' => 9,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 11,
      'top' => 0,
      'row' => 27,
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

$regions->add($region_11);

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
  'row' => 68,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => 'rgba(196,212,212,1)',
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/Homepage-Services-Bg2.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 100%',
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

$region_7->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '9',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'class' => 'module-1408443904923-1360',
  'id' => 'module-1408443904923-1360',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_colors upfront_theme_color_2">WELLNESS RETREATS</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408443904923-1934',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 4,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 5,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408443912379-1151',
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
      'col' => 17,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 9,
      'col' => 14,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 12,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 9,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 4,
      'col' => 10,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 3,
      'col' => 9,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 11,
      'top' => 17,
      'row' => 11,
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

$region_7->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '9',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1408443941489-1951',
  'id' => 'module-1408443941489-1951',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Have you ever considered the gift of a wellness retreat to kickstart a new phase of vibrant health?<br><a href="{{upfront:home_url}}/about/" rel="entry"></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408443941490-1686',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'remove-top-space',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 22,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408443951249-1806',
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
      'col' => 17,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 9,
      'col' => 14,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 12,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 9,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 4,
      'col' => 10,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 3,
      'col' => 9,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 8,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 11,
      'row' => 28,
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

$regions->add($region_7);

$region_8 = upfront_create_region(
			array (
  'name' => 'region-8',
  'title' => 'Region 8',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-8',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 68,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => 'rgba(246,246,246,1)',
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-services/Homepage-Services-Bg3.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 100%',
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

$region_8->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '16',
  'margin_bottom' => '0',
  'class' => 'module-1408444386527-1487',
  'id' => 'module-1408444386527-1487',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_colors upfront_theme_color_2">WORKPLACE WELLNESS</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408444386528-1458',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 4,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 7,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408444393256-1825',
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
      'col' => 13,
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
      'col' => 14,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 11,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
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
      'edited' => true,
      'left' => 1,
      'col' => 12,
      'top' => 16,
      'row' => 13,
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

$region_8->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408444395880-1241',
  'id' => 'module-1408444395880-1241',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Boosted morale. Increased Productivity. Happy, healthier employees. If you’re an employer, consider the huge benefits of a workplace wellness program.<br><a href="{{upfront:home_url}}/about/" rel="entry"></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408444395880-1516',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'remove-top-space',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783042947' => 
      (array)(array(
         'row' => 20,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408444399086-1919',
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
      'col' => 14,
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
      'col' => 10,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 12,
      'top' => 0,
      'row' => 26,
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

$regions->add($region_8);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

