<?php
/**
 * Template Name: Archive Page template
 *
 * @package WordPress
 * @subpackage archive
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-archive'));

get_header();
echo $layout->apply_layout();
get_footer();