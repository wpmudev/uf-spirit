<?php
/**
 * Template Name: Single Page 2.php Page template
 *
 * @package WordPress
 * @subpackage single-page-2.php
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-single-page-2php'));

get_header();
echo $layout->apply_layout();
get_footer();