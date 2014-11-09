<?php
/**
 * Template Name: Services Page Template
 *
 * @package WordPress
 * @subpackage template-services
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-services'));

get_header();
echo $layout->apply_layout();
get_footer();