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
    'content' => '<p class=""><a href="{{upfront:home_url}}/" rel="entry">HOME</a>  &nbsp;/ &nbsp; BLOG</p>',
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

$regions->add($region_3);

$content = upfront_create_region(
			array (
  'name' => 'content',
  'title' => 'Content',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 214,
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
     'custom-1410783042947' => 
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
  'background_color' => '#ffffff',
)
			);

$content->add_element("ThisPost", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '21',
  'margin_bottom' => '0',
  'class' => 'default-post',
  'id' => 'default-post',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 uposts-object',
    'has_settings' => 1,
    'id_slug' => 'upost',
    'row' => 21,
    'post_data' => 
    array (
      0 => 'author',
      1 => 'date',
      2 => 'comments_count',
      3 => 'featured_image',
    ),
    'post_type' => 'post',
    'taxonomy' => '',
    'term' => '',
    'limit' => '1',
    'content_type' => 'full',
    'featured_image' => 1,
    'pagination' => 0,
    'prev' => '',
    'next' => '',
    'postLayout' => 
    array (
      0 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post_date post-part c2 ml0 mt1',
             'slug' => 'date',
          )),
        ),
         'classes' => 'c2 clr',
      )),
      1 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c22 ml0 mt1',
             'slug' => 'title',
          )),
        ),
         'classes' => 'c22 ',
      )),
      2 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c22 ml2 mt1',
             'slug' => 'categories',
          )),
        ),
         'classes' => 'c22 ',
      )),
      3 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c20 ml2 mt5',
             'slug' => 'author',
          )),
        ),
         'classes' => 'c20 ',
      )),
      4 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c4 ml0 mt5',
             'slug' => 'comments_count',
          )),
        ),
         'classes' => 'c4 ',
      )),
      5 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c24 ml2 mt8',
             'slug' => 'contents',
          )),
        ),
         'classes' => 'c24 ',
      )),
      6 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c24 ml2 mt8',
             'slug' => 'featured_image',
          )),
        ),
         'classes' => 'c24 ',
      )),
    ),
    'partOptions' => 
    (array)(array(
       'featured_image' => 
      (array)(array(
         'height' => 38,
      )),
       'title' => 
      (array)(array(
         'theme_style' => '_default',
         'anchor' => '',
      )),
       'date' => 
      (array)(array(
         'format' => 'j M',
         'height' => 10,
      )),
    )),
    'element_id' => 'default-post-object',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-upost-responsive',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-upost-responsive',
      )),
    )),
    'hide_featured_image' => '',
    'full_featured_image' => '',
  ),
  'row' => 6,
  'sticky' => true,
  'disable_resize' => true,
  'disable_drag' => false,
  'wrapper_id' => 'wrapper-1408977742068-1128',
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
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($content);

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
  'row' => 15,
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
  'background_color' => '#ffffff',
)
			);

$region_1->add_element("Ucomment", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1445262122920-1064',
  'id' => 'module-1445262122920-1064',
  'options' => 
  array (
    'id_slug' => 'ucomment',
    'type' => 'UcommentModel',
    'view_class' => 'UcommentView',
    'class' => 'c24 upfront-comment',
    'has_settings' => 1,
    'prepend_form' => false,
    'element_id' => 'ucomment-object-1445262122920-1990',
    'row' => 193,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-ucomments-responsive',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-ucomments-responsive',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1446607358580-1091',
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

$regions->add($region_1);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

