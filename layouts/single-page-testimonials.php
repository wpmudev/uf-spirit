<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_1 = upfront_create_region(
			array (
  'name' => 'region-1',
  'title' => 'Region 1',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-1',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 69,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 38,
       'background_position_y' => '50',
       'background_position_x' => '50',
       'background_type' => 'image',
       'background_style' => 'full',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 50%',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 25,
       'hide' => 0,
       'background_position_y' => '50',
       'background_style' => 'full',
       'background_position_x' => '50',
       'background_type' => 'image',
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
  'background_image' => '{{upfront:style_url}}/images/single-page-testimonials/Testimonials-background.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 50%',
)
			);

$region_1->add_element("PlainTxt", array (
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
    'content' => '<h1 class="" style="text-align: center;">TESTIMONIALS</h1>',
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
  'wrapper_id' => 'wrapper-1446075067270-1964',
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
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
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
      'top' => 13,
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
      'top' => 23,
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

$regions->add($region_1);

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
  'row' => 21,
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
       'edited' => true,
       'col' => 24,
       'row' => 15,
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
    'content' => '<p class=""><a href="{{upfront:home_url}}/" rel="entry">HOME</a>  &nbsp;/ &nbsp; TESTIMONIALS</p>',
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
  'row' => 121,
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => true,
       'row' => 307,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => true,
       'row' => 346,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => true,
       'row' => 368,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => true,
       'row' => 412,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 218,
       'background_type' => 'color',
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 547,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 457,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => true,
       'row' => 331,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
)
			);

$region_4->add_group(array (
  'columns' => '22',
  'margin_top' => '9',
  'margin_left' => '1',
  'class' => '',
  'id' => 'module-group-1446074040094-1969',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1446074040095-1842',
  'original_col' => 22,
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => 0,
  'background_type' => 'color',
  'anchor' => '',
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
      'clear' => true,
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
      'row' => 55,
      'top' => 0,
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

$region_4->add_element("Uimage", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '2',
  'margin_bottom' => '0',
  'class' => 'module-1408445992395-1679',
  'id' => 'module-1408445992395-1679',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1-140x140-7971 (1)-105x105-9238.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1-140x140-7971 (1).jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1-140x140-7971 (1).jpg',
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
       'width' => 105,
       'height' => 105,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => -0.5,
       'left' => -17,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 105,
       'height' => 105,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3368',
    'align' => 'center',
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
    'element_id' => 'object-1408445992396-1972',
    'row' => 27,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 26,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 24,
      )),
    )),
    'no_padding' => '',
  ),
  'row' => 27,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074040104-1511',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 3,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'top' => 7,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 4,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 7,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 5,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 0,
      'row' => 26,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 3,
      'top' => 3,
      'row' => 30,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'hide' => 0,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 4,
    ),
  ),
  'group' => 'module-group-1446074040094-1969',
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408443405809-1628',
  'id' => 'module-1408443405809-1628',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.​&nbsp;<span rel="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; line-height: 17px; text-align: justify; text-transform: none; background-color: rgb(255, 255, 255);" data-verified="redactor" data-redactor-tag="span">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</span>”</span></h3><h6 class=""><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7"></span>Fiona Beauchampt</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408443405805-1270',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 25,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'custom-1408717728290' => 
      (array)(array(
         'row' => 102,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 131,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 144,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 154,
      )),
       'tablet' => 
      (array)(array(
         'row' => 57,
         'theme_style' => '_default',
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 204,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 126,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074040105-1394',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 9,
      'order' => 1,
      'clear' => false,
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
      'edited' => false,
      'left' => 0,
      'col' => 16,
      'top' => 7,
      'row' => 108,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
      'row' => 137,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'row' => 150,
      'top' => 7,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
      'top' => 5,
      'row' => 160,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
      'row' => 57,
      'order' => 0,
      'top' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'top' => 3,
      'row' => 210,
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
      'col' => 14,
      'row' => 132,
      'top' => 4,
    ),
  ),
  'group' => 'module-group-1446074040094-1969',
));

$region_4->add_group(array (
  'columns' => '22',
  'margin_top' => '13',
  'margin_left' => '1',
  'class' => '',
  'id' => 'module-group-1446074037788-1371',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1446074037790-1528',
  'original_col' => 22,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$region_4->add_element("Uimage", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408532655407-1054',
  'id' => 'module-1408532655407-1054',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2 (1)-105x105-4345.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2 (1).jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2 (1).jpg',
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
       'width' => 105,
       'height' => 105,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => -3,
       'left' => 0,
    )),
    'marginTop' => 3,
    'element_size' => 
    (array)(array(
       'width' => 105,
       'height' => 111,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3369',
    'align' => 'center',
    'stretch' => true,
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
    'element_id' => 'object-1408532655407-1772',
    'row' => 27,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 27,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 25,
      )),
    )),
    'no_padding' => '',
  ),
  'row' => 27,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074037798-1155',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 3,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'top' => 15,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 13,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 0,
      'row' => 27,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 3,
      'top' => 16,
      'row' => 31,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'hide' => 0,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
  ),
  'group' => 'module-group-1446074037788-1371',
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408532683995-1530',
  'id' => 'module-1408532683995-1530',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_7" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7" data-verified="redactor">“Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&nbsp;</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet lobortis erat valupat.”</h3><h6 class="" rel="text-align: right;"><strong data-redactor-tag="strong"></strong>Jodie Lamberg<em data-redactor-tag="em"></em></h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408532683996-1604',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 55,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'custom-1408717728290' => 
      (array)(array(
         'row' => 55,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 53,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 60,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 65,
      )),
       'tablet' => 
      (array)(array(
         'row' => 50,
         'theme_style' => '_default',
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 81,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 59,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 55,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074037800-1228',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 9,
      'order' => 1,
      'clear' => false,
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
      'edited' => false,
      'left' => 0,
      'col' => 16,
      'top' => 15,
      'row' => 61,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
      'top' => 13,
      'row' => 59,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'top' => 16,
      'row' => 66,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
      'row' => 71,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
      'top' => 0,
      'row' => 50,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'row' => 87,
      'top' => 16,
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
      'col' => 14,
      'row' => 65,
      'top' => 14,
    ),
  ),
  'group' => 'module-group-1446074037788-1371',
));

$region_4->add_group(array (
  'columns' => '22',
  'margin_top' => '16',
  'margin_left' => '1',
  'class' => '',
  'id' => 'module-group-1446074035651-1012',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1446074035653-1040',
  'original_col' => 22,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$region_4->add_element("Uimage", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408532743173-1630',
  'id' => 'module-1408532743173-1630',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial3-109x109-6410.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial3.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial3.jpg',
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
       'width' => 109,
       'height' => 109,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => -3,
       'left' => 0,
    )),
    'marginTop' => 3,
    'element_size' => 
    (array)(array(
       'width' => 109,
       'height' => 115,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '3370',
    'align' => 'center',
    'stretch' => true,
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
    'element_id' => 'object-1408532743173-1204',
    'row' => 29,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 26,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 27,
      )),
    )),
  ),
  'row' => 29,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074035662-1599',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 3,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'top' => 18,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 15,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'row' => 26,
      'top' => 0,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 3,
      'top' => 13,
      'row' => 33,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 3,
      'hide' => 0,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 4,
      'top' => 15,
    ),
  ),
  'group' => 'module-group-1446074035651-1012',
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408532768913-1417',
  'id' => 'module-1408532768913-1417',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">“E</span><span rel="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; line-height: 17px; text-align: justify; text-transform: none; background-color: rgb(255, 255, 255);" data-verified="redactor">st usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>”</h3><h6 class="">Ben Fallon</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408532768914-1485',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 25,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'custom-1408717728290' => 
      (array)(array(
         'row' => 55,
      )),
       'custom-1408717918354' => 
      (array)(array(
         'row' => 60,
      )),
       'custom-1408717978058' => 
      (array)(array(
         'row' => 60,
      )),
       'custom-1408718022181' => 
      (array)(array(
         'row' => 18,
      )),
       'tablet' => 
      (array)(array(
         'row' => 63,
         'theme_style' => '_default',
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 85,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 60,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446074035664-1533',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 9,
      'order' => 1,
      'clear' => false,
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
      'edited' => false,
      'left' => 0,
      'col' => 16,
      'top' => 18,
      'row' => 61,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 14,
      'top' => 14,
      'row' => 66,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'top' => 14,
      'row' => 66,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 10,
      'row' => 24,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
      'top' => 0,
      'row' => 63,
      'order' => 0,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'row' => 91,
      'top' => 13,
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
      'col' => 14,
      'row' => 66,
      'top' => 15,
    ),
  ),
  'group' => 'module-group-1446074035651-1012',
));

$regions->add($region_4);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

