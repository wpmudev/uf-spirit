<?php
/**
 * Template Name: Template Gallery Page template
 *
 * @package WordPress
 * @subpackage template-gallery
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-gallery'));

get_header();
echo $layout->apply_layout();
get_footer();