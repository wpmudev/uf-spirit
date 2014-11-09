<?php
/**
 * Template Name: About Page Template
 *
 * @package WordPress
 * @subpackage template-about
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-about'));

get_header();
echo $layout->apply_layout();
get_footer();