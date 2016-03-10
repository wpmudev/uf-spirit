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
  'row' => 140,
  'background_type' => 'color',
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
  'bottom_bg_padding_slider' => '90',
  'bottom_bg_padding_num' => '90',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453832287772-1403',
  'id' => 'module-1453832287772-1403',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><a target="_self" data-upfront-link-type="homepage" href="{{upfront:home_url}}">HOME</a> / <a href="{{upfront:home_url}}/blog/" target="_self" data-upfront-link-type="entry">BLOG</a> / POST</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1453832287771-1485',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '135',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '15',
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
    'is_edited' => true,
    'row' => 11,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'left_padding_num' => '15',
         'top_padding_num' => '15',
         'right_padding_num' => '15',
         'bottom_padding_num' => '15',
         'top_padding_use' => '',
         'bottom_padding_use' => '',
         'left_padding_use' => 'yes',
         'right_padding_use' => 'yes',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '135',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1453832296144-1046',
  'edited' => true,
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

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457586503297-1289',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457586503297-1487',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457586503294-1793',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_group(array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-group-1457585966628-1080',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1457583415164-1880',
  'original_col' => 24,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 4,
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

$main->add_element("PostData", array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1457583396122-1405',
  'options' => 
  array (
    'data_type' => 'post_data',
    'row' => 6,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset' => 'the-title',
    'element_id' => 'post-data-object-1457583396120-1772',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
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
         'preset' => 'the-title',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'wrapper_id' => 'wrapper-1457585966632-1052',
  'edited' => true,
  'new_line' => true,
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
  'group' => 'module-group-1457585966628-1080',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '19',
      'class' => 'upfront-post-data-part part-title',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1457583396115-1244',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457583396115-1051',
      'padding_slider' => '15',
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
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1457583900472-1405',
  'options' => 
  array (
    'data_type' => 'author',
    'row' => 6,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-author',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'author',
      1 => 'gravatar',
      2 => 'author_email',
      3 => 'author_url',
      4 => 'author_bio',
    ),
    'gravatar_size' => 200,
    'post-part-author' => '<div class="upostdata-part author">
	By <a href="{{url}}" {{target}}>{{name}}</a></div>',
    'post-part-gravatar' => '<div class="upostdata-part gravatar">
	{{gravatar}}
</div>',
    'post-part-author_email' => '<div class="upostdata-part author author-email">
	<a href="mailto:{{email}}">{{name}}</a>
</div>',
    'post-part-author_url' => '<div class="upostdata-part author author-url">
	<a href="{{url}}" rel="author external">{{name}}</a>
</div>',
    'post-part-author_bio' => '<div class="upostdata-part author author-bio">
	{{bio}}
</div>',
    'preset' => 'the-author',
    'element_id' => 'post-data-object-1457583900470-1758',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
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
         'preset' => 'the-author',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 6,
  'wrapper_id' => 'wrapper-1457585966635-1124',
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
  'group' => 'module-group-1457585966628-1080',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '19',
      'class' => 'upfront-post-data-part part-author',
      'view_class' => 'PostDataPartView',
      'part_type' => 'author',
      'wrapper_id' => 'wrapper-1457583900448-1955',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457583900460-1991',
      'padding_slider' => '15',
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
    ),
  ),
));

$main->add_group(array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-group-1457586467028-1530',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1457586482459-1734',
  'original_col' => 24,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 5,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 4,
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

$main->add_element("PostData", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1457583415709-1082',
  'options' => 
  array (
    'data_type' => 'post_data',
    'row' => 7,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset' => 'the-day',
    'element_id' => 'post-data-object-1457583415707-1875',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
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
         'preset' => 'the-day',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 7,
  'wrapper_id' => 'wrapper-1457586467032-1386',
  'new_line' => true,
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
  'group' => 'module-group-1457586467028-1530',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '1',
      'class' => 'upfront-post-data-part part-date_posted',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1457583415701-1948',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457583415702-1310',
      'padding_slider' => '15',
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
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1457585984496-1424',
  'options' => 
  array (
    'data_type' => 'post_data',
    'row' => 4,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset' => 'the-month',
    'element_id' => 'post-data-object-1457585984494-1654',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
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
         'preset' => 'the-month',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 4,
  'wrapper_id' => 'wrapper-1457586467035-1680',
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
  'group' => 'module-group-1457586467028-1530',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '1',
      'class' => 'upfront-post-data-part part-date_posted',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1457585984487-1743',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457585984489-1037',
      'padding_slider' => '15',
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457586493643-1610',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457586493642-1092',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457586493641-1219',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457586723870-1843',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457586723870-1202',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457586723868-1348',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_element("PostData", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1457586378756-1426',
  'options' => 
  array (
    'data_type' => 'post_data',
    'row' => 119,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset' => 'the-content',
    'element_id' => 'post-data-object-1457586378755-1456',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
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
         'preset' => 'the-content',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 119,
  'wrapper_id' => 'wrapper-1457586698750-1826',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 6,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 5,
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
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '20',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1457586792356-1722',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457586792358-1761',
      'padding_slider' => '15',
      'new_line' => true,
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457586726051-1013',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457586726050-1090',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457586726049-1477',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457583406342-1745',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457583406342-1121',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457583406341-1886',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_element("ThisPost", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'default-post',
  'id' => 'default-post',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 upfront-this_post',
    'has_settings' => 1,
    'id_slug' => 'this_post',
    'row' => 197,
    'preset' => 'default',
    'post_data' => 
    array (
      0 => 'date',
    ),
    'layout' => 
    array (
      0 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'title',
             'classes' => 'post-part c24',
          )),
        ),
      )),
      1 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'date',
             'classes' => ' post-part c24',
          )),
        ),
      )),
      2 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'contents',
             'classes' => ' post-part c24',
          )),
        ),
      )),
    ),
    'element_id' => 'default-post-object',
    'top_padding_use' => 'yes',
    'top_padding_num' => '120',
    'padding_slider' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_slider' => '120',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'hide_featured_image' => false,
    'full_featured_image' => false,
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'usingNewAppearance' => true,
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'post-mobile',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'post-mobile',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '40',
         'top_padding_num' => '40',
         'row' => 200,
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '40',
         'top_padding_num' => '40',
         'row' => 200,
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
    )),
  ),
  'row' => 197,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'disable_resize' => true,
  'disable_drag' => false,
  'wrapper_id' => 'default-post-wrapper',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 1,
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
      'edited' => true,
      'row' => 294,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'left' => 0,
      'top' => 0,
      'order' => 0,
      'edited' => true,
      'row' => 402,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1457583409952-1671',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1457583409952-1803',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1457583409951-1286',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$main->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453441997177-1215 upfront-module-spacer',
  'id' => 'module-1453441997177-1215',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453441997175-1949',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453441997176-1739',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
    ),
    'mobile' => 
    array (
      'col' => 3,
    ),
  ),
));

$main->add_element("Ucomment", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'default-comment',
  'id' => 'default-comment',
  'options' => 
  array (
    'id_slug' => 'ucomment',
    'type' => 'UcommentModel',
    'view_class' => 'UcommentView',
    'class' => 'c24 upfront-comment',
    'has_settings' => 1,
    'prepend_form' => false,
    'element_id' => 'default-comment-object',
    'padding_slider' => '15',
    'top_padding_num' => '60',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'preset' => 'default',
    'usingNewAppearance' => true,
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'mobile',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '60',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'row' => 8,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      array (
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'default-comment-wrapper',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 6,
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
      'edited' => true,
      'row' => 236,
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
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453441999487-1714 upfront-module-spacer',
  'id' => 'module-1453441999487-1714',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453441999487-1850',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453441999487-1207',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
    ),
    'mobile' => 
    array (
      'col' => 3,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

