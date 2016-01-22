<?php
$layout_version = '1.0.0';

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
  'row' => 180,
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
  'background_image' => '{{upfront:style_url}}/images/single-page-contactus/bg-page-contact.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
)
			);

$region_2->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428416239-1218',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428416239-1838',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428416239-1951',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_2->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453428308755-1814',
  'options' => 
  array (
    'content' => '<p><a href="{{upfront:home_url}}" target="_self" data-upfront-link-type="homepage">HOME</a> &nbsp;/ &nbsp;CONTACT US</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453428308754-1259',
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
    'row' => 10,
  ),
  'row' => 10,
  'wrapper_id' => 'wrapper-1453428375173-1618',
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

$region_2->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428418546-1803',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428418545-1807',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428418545-1628',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_2->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453425481042-1625 upfront-module-spacer',
  'id' => 'module-1453425481042-1625',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453425481041-1994',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453425481042-1634',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$region_2->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453425360194-1851',
  'id' => 'module-1453425360194-1851',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;">CONTACT</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1453425360193-1754',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'padding_slider' => '15',
    'top_padding_num' => '60',
    'bottom_padding_num' => '30',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '60',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '30',
    'row' => 28,
  ),
  'row' => 28,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1453425458522-1811',
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

$region_2->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453425485739-1333 upfront-module-spacer',
  'id' => 'module-1453425485739-1333',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453425485738-1139',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453425485739-1653',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$region_2->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428506019-1124',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428506018-1293',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428506019-1587',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_2->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1453428375413-1759',
  'options' => 
  array (
    'content' => '<h3 style="text-align: center;"><span class="upfront_theme_color_2">"Take care of your body – it\'s the only one you have."</span></h3>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1453428375413-1686',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'is_edited' => true,
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1453428464627-1133',
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

$region_2->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428508347-1030',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428508346-1477',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428508347-1282',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$region_2->add_element("Uspacer", array (
  'columns' => '4',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428534770-1481',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428534769-1795',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428534770-1120',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$region_2->add_element("Ucontact", array (
  'columns' => '16',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-contact_form_module',
  'id' => 'module-1453428308809-1730',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name:',
    'form_email_label' => 'Email:',
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
    'form_message_label' => 'Message:',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1453428308806-1597',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '100',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'preset' => 'default',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '100',
    'row' => 73,
  ),
  'row' => 73,
  'wrapper_id' => 'wrapper-1453428501889-1906',
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

$region_2->add_element("Uspacer", array (
  'columns' => '4',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453428538737-1959',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1453428538736-1101',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1453428538737-1319',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($region_2);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

