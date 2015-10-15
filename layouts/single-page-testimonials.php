<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_5 = upfront_create_region(
			array (
  'name' => 'region-5',
  'title' => 'Region 5',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'region-5',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 69,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'fixed',
  'background_position_y' => '0',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-testimonials/Testimonials-Bg.jpg',
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
       'background_position_y' => '0',
       'background_style' => 'full',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 0%',
       'background_position_x' => '50',
       'background_type' => 'image',
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
       'background_position_y' => '0',
       'background_style' => 'full',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 0%',
       'background_position_x' => '50',
       'background_type' => 'image',
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_5->add_element("PlainTxt", array (
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
      'top' => 23,
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

$regions->add($region_5);

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

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'class' => 'module-1408525051697-1453',
  'id' => 'module-1408525051697-1453',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;">Vivamus sollicitudin lectus faucibus dolor viverra mollis. Nullam feugiat arcu et felis facilisis pretium. Donec viverra purus nec lobortis scelerisque.</p>',
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
      'col' => 22,
      'top' => 4,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 4,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 16,
      'top' => 3,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'top' => 3,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 4,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'top' => 4,
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
       'row' => 451,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 547,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 562,
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

$region_4->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1408445992395-1679',
  'id' => 'module-1408445992395-1679',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1-140x140-7971.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial1.jpg',
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
       'width' => 140,
       'height' => 140,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 150,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '140',
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
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'object-1408445992396-1972',
    'row' => 6,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 24,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 24,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408454821816-1092',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 4,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 4,
      'top' => 7,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 4,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 7,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 5,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 4,
      'row' => 30,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 3,
      'row' => 30,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'hide' => 1,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 4,
    ),
  ),
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1408443405809-1628',
  'id' => 'module-1408443405809-1628',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Megan Campbell is a gifted, beautiful and inspiring wellness/fitness expert. When I was initially looking for a personal trainer, the fact that Meg was warm, approachable and experienced in so many different areas influenced my decision. &nbsp;In fact, after the first time I met Meg I instantly felt comfortable and knew she would be someone to have a positive impact on my life. Since then, Meg and I have met twice a week for nine years. Her training sessions have challenged me and my body, and I have seen significant improvements over the time I have worked with her. &nbsp;Not only has helped me transform my body, but also my mind. &nbsp</p><p class=""></p><p class="">Meg is wonderfully knowledgeable, and her experience helps to shape you as a person. &nbsp;Her ability to guide you in your journey to achieving your goals is amazing. &nbsp;Meg is thoughtful, fun and well prepared and I always look forward to my sessions with her. &nbsp;With her extensive knowledge of body functionality, she knows just how hard to push you in a very encouraging, supportive and creative way. Meg is always mindful of correct technique when doing strength training; helping you to prevent injuries. &nbsp;She is the ultimate professional and a standout in her field. &nbsp; I would highly recommend Meg - You will love working with her.</p><p class="" style="text-align: right;"><strong style="text-align: right;">Fiona Beauchampt<br></strong><em style="text-align: right;">Occupational Therapist at CPEC&nbsp;</em></p>',
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
         'row' => 131,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 204,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 126,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408532674436-1745',
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
      'col' => 14,
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
      'top' => 7,
      'row' => 108,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 137,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'row' => 150,
      'top' => 7,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
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
      'row' => 137,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 132,
      'top' => 4,
    ),
  ),
));

$region_4->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'class' => 'module-1408532655407-1054',
  'id' => 'module-1408532655407-1054',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2-140x140-5404.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial2.jpg',
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
       'width' => 140,
       'height' => 140,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 150,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '141',
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
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'object-1408532655407-1772',
    'row' => 6,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 19,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 25,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408532699086-1371',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 4,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 4,
      'top' => 15,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 13,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 16,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 11,
      'row' => 25,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 16,
      'row' => 31,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'hide' => 1,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
  ),
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'class' => 'module-1408532683995-1530',
  'id' => 'module-1408532683995-1530',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Megan Campbell is a gifted, beautiful and inspiring wellness/fitness expert. When I was initially looking for a personal trainer, the fact that Meg was warm, approachable and experienced in so many different areas influenced my decision. &nbsp;In fact, after the first time I met Meg I instantly felt comfortable and knew she would be someone to have a positive impact on my life. Since then, Meg and I have met twice a week for nine years. Her training sessions have challenged me and my body, and I have seen significant improvements over the time I have worked with her. &nbsp;Not only has helped me transform my body, but also my mind.&nbsp;</p><p class=""></p><p class="" style="text-align: right;"><strong style="text-align: right;">Fiona Beauchampt<br></strong><em style="text-align: right;">Occupational Therapist at CPEC&nbsp;</em></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1408532683996-1604',
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
         'row' => 72,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 81,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 59,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408532765246-1476',
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
      'col' => 14,
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
      'top' => 15,
      'row' => 61,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'top' => 13,
      'row' => 59,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 16,
      'row' => 66,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'row' => 71,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
      'top' => 11,
      'row' => 78,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 65,
      'top' => 14,
    ),
  ),
));

$region_4->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => 'module-1408532743173-1630',
  'id' => 'module-1408532743173-1630',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-testimonials/testimonial3-140x140-1930.jpg',
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
       'width' => 140,
       'height' => 140,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 140,
       'height' => 140,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 150,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '142',
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
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'object-1408532743173-1204',
    'row' => 6,
    'theme_style' => 'circle',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 22,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 27,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408532792463-1234',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 6,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 4,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1408717728290' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 4,
      'top' => 18,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 14,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 15,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'row' => 28,
      'top' => 19,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'top' => 13,
      'row' => 33,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'hide' => 1,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 15,
    ),
  ),
));

$region_4->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => 'module-1408532768913-1417',
  'id' => 'module-1408532768913-1417',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Megan Campbell is a gifted, beautiful and inspiring wellness/fitness expert. When I was initially looking for a personal trainer, the fact that Meg was warm, approachable and experienced in so many different areas influenced my decision. &nbsp;In fact, after the first time I met Meg I instantly felt comfortable and knew she would be someone to have a positive impact on my life. Since then, Meg and I have met twice a week for nine years. Her training sessions have challenged me and my body, and I have seen significant improvements over the time I have worked with her. &nbsp;Not only has helped me transform my body, but also my mind.&nbsp;</p><p class=""></p><p class="" style="text-align: right;"><strong style="text-align: right;">Fiona Beauchampt<br></strong><em style="text-align: right;">Occupational Therapist at CPEC&nbsp;</em></p>',
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
         'row' => 39,
      )),
       'custom-1408718098456' => 
      (array)(array(
         'row' => 85,
      )),
       'custom-1410783042947' => 
      (array)(array(
         'row' => 60,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408532768910-1424',
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
      'col' => 14,
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
      'top' => 18,
      'row' => 61,
    ),
    'custom-1408717918354' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'top' => 14,
      'row' => 66,
    ),
    'custom-1408717978058' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 14,
      'row' => 66,
    ),
    'custom-1408718022181' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 10,
      'row' => 24,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 9,
      'top' => 19,
      'row' => 45,
    ),
    'custom-1408718098456' => 
    array (
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'row' => 66,
      'top' => 15,
    ),
  ),
));

$regions->add($region_4);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

