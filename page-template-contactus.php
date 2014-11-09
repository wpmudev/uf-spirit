<?php
/**
 * Template Name: Contactus Page Template
 *
 * @package WordPress
 * @subpackage template-contactus
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-contactus'));

get_header();
echo $layout->apply_layout();
get_footer();