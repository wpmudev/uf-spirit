<?php
/**
 * Template Name: Template Contactus Old Page template
 *
 * @package WordPress
 * @subpackage template-contactus-old
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-contactus-old'));

get_header();
echo $layout->apply_layout();
get_footer();