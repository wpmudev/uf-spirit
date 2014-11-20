<?php
/**
 * Template Name: Login Page template
 *
 * @package WordPress
 * @subpackage login
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-login'));

get_header();
echo $layout->apply_layout();
get_footer();