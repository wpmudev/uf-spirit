<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_2 = upfront_create_region(
			array (
  'name' => 'region-2',
  'title' => 'Region 2',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-2',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 178,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '0',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-contactus/Contact-Bg.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 0%',
  'breakpoint' => 
  (array)(array(
     'custom-1408717728290' => 
    (array)(array(
       'edited' => true,
       'row' => 144,
    )),
     'custom-1408717918354' => 
    (array)(array(
       'edited' => true,
       'row' => 124,
    )),
     'custom-1408717978058' => 
    (array)(array(
       'edited' => true,
       'row' => 94,
    )),
     'custom-1408718022181' => 
    (array)(array(
       'edited' => true,
       'row' => 94,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 94,
    )),
     'custom-1408718098456' => 
    (array)(array(
       'edited' => true,
       'row' => 94,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 115,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$region_2->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1447118075159-1969',
  'options' => 
  array (
    'content' => '<p class=""><a rel="entry" href="{{upfront:home_url}}/">HOME</a> / CONTACT US</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1447118075159-1275',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'row' => 14,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'breadcrumbs',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'breadcrumb-responsive',
      )),
    )),
  ),
  'row' => 14,
  'wrapper_id' => 'wrapper-1447118116977-1697',
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

$region_2->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '7',
  'margin_bottom' => '0',
  'class' => 'module-1408525024897-1934',
  'id' => 'module-1408525024897-1934',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2"><span class="upfront_theme_color_3"><span class="upfront_theme_color_6">CONTACT</span></span></span></span></span></span></h1>',
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
      'order' => 1,
      'clear' => true,
      'edited' => true,
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
      'top' => 13,
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
      'top' => 10,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 16,
    ),
  ),
));

$region_2->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1446076268314-1693',
  'id' => 'module-1446076268314-1693',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"><span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6"><span class="upfront_theme_color_2" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_2">"Take care of your body – it\'s the only one you have.<span class="redactor-invisible-space">​</span>"</span></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1446076268314-1907',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 19,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446077953722-1502',
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

$region_2->add_element("Ucontact", array (
  'columns' => '16',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1421844167386-1549',
  'id' => 'module-1421844167386-1549',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Your Name',
    'form_email_label' => 'Your Email',
    'form_email_to' => '',
    'show_subject' => 
    array (
    ),
    'show_captcha' => 
    array (
    ),
    'form_subject_label' => 'Subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Message',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1421844167385-1091',
    'row' => 90,
    'anchor' => '',
    'theme_style' => 'contact-form',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1421844178455-1591',
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
      'clear' => true,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'col' => 16,
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
      'left' => 2,
      'col' => 14,
      'order' => 0,
    ),
  ),
));

$regions->add($region_2);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

