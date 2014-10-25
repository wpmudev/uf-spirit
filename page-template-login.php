<?php
/**
 * Template Name: Template Login Page template
 *
 * @package WordPress
 * @subpackage template-login
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-template-login'));

get_header();
echo $layout->apply_layout();
get_footer();