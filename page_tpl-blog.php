<?php
/**
 * Template Name: About Page template
 *
 * @package WordPress
 * @subpackage blog
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'archive'));

get_header();
echo $layout->apply_layout();
get_footer();