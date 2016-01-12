<?php
$layout_version = '1.0.0';

$home_header = upfront_create_region(
			array (
  'name' => 'home-header',
  'title' => 'Home Header',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'home-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 80,
  'background_type' => 'color',
  'background_color' => '#c5d0db',
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
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$regions->add($home_header);

