<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_3 = upfront_create_region(
			array(
"name" => "region-3", 
"title" => "Region 3", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-3", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 154, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "0", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-template-login/Login-Bg.jpg", 
"background_image_ratio" => 0.56, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 0%", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => true, 
		"row" => 144
		), 
	"custom-1408717918354" => array(
		"edited" => true, 
		"row" => 124
		), 
	"custom-1408717978058" => array(
		"edited" => true, 
		"row" => 94
		), 
	"custom-1408718022181" => array(
		"edited" => true, 
		"row" => 94
		), 
	"tablet" => array(
		"edited" => true, 
		"row" => 94
		), 
	"custom-1408718098456" => array(
		"edited" => true, 
		"row" => 94
		)
	)
)
			);

$region_3->add_element("PlainTxt", array(
"columns" => "22", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1408525024897-1934", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">MEMBERS</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1408525024896-1770", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1408525051645-1279", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 22
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 16
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 14
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 10
		)
	)
));

$region_3->add_element("Code", array(
"columns" => "8", 
"margin_left" => "8", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1408622871360-1289", 
"rows" => 32, 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1408622871359-1811", 
	"code_selection_type" => "Create", 
	"markup" => "<form class=\"form-container\" id=\"LoginForm\" action=\"\" method=\"post\">
<div class=\"login-fields\">
<div class=\"login-fields-container\">
<input type=\"text\" name=\"email\" placeholder=\"Name/Email\">
<input type=\"password\" name=\"password\" placeholder=\"Password\">
</div>
<div class=\"links-bar\">
    <p><a href=\"#PasswordForm\">Forgotten password</a> | <a href=\"#RegisterForm\">Sign Up</a></p>
</div>
<input type=\"submit\" value=\"Submit\">
</div>
</form>

<form class=\"form-container hidden\" id=\"PasswordForm\" action=\"\" method=\"post\">
<div class=\"login-fields\">
<div class=\"login-fields-container\">
<input type=\"text\" name=\"email\" placeholder=\"Email address\">
</div>
<div class=\"links-bar\">
    <p><a href=\"#LoginForm\">Login</a> | <a href=\"#RegisterForm\">Sign Up</a></p>
</div>
<input type=\"submit\" value=\"Recover\">
</div>
</form>

<form class=\"form-container hidden\" id=\"RegisterForm\" action=\"\" method=\"post\">
<div class=\"login-fields\">
<div class=\"login-fields-container\">
<input type=\"text\" name=\"email\" placeholder=\"Email\">
<input type=\"text\" name=\"your-name\" placeholder=\"Name\">
<input type=\"password\" name=\"password\" placeholder=\"Password\">
<input type=\"password\" name=\"password1\" placeholder=\"Verify Password\">
</div>
<div class=\"links-bar\">
    <p><a href=\"#LoginForm\">Login</a></p>
</div>
<input type=\"submit\" value=\"Create\">
</div>
</form>", 
	"style" => ".form-container.hidden {
 display: none;   
}
.login-fields input[type=\"text\"],
.login-fields input[type=\"password\"] {
  width: 100%;   
  float: left;
  padding: 10px;
  box-sizing: border-box;
  font: 16px Open Sans, Arial;
  color: #707070;
  background: rgba(250, 250, 250, 0.90);
  border: 1px solid #d0d0d0;
  outline: 0px ;
}

.login-fields input[type=\"text\"]:focus,
.login-fields input[type=\"password\"]:focus {
  outline: 0px;
  border-color: #69a8a6;
}

.login-fields input[type=\"submit\"] {
    background:#69a8a6;
    color: #FFFFFF;
    border-radius: 4px;
    border: 0px;
    border-bottom:3px solid #4f7e7d;
    padding: 4px 25px;
    font-size: 24px;
    display: inline-block;
    text-decoration: none; 
    float : right;
    font: 24px Open Sans, Arial;
    width: 150px;
}
.login-fields input[type=\"submit\"]:hover {
   background: #4f7e7d;
}

.login-fields .login-fields-container {
  float: left; 
  margin-bottom: 20px;
  width: 100%;
}

.links-bar {
  background: rgba(250, 250, 250, 0.90);
  width: 100%;
  padding: 5px 0px;    
  margin: 0px 0px 20px;
  display: block;
  clear: left;
}

.links-bar p {
    font-size: 14px;
    text-align: center;
}", 
	"script" => "jQuery(document).ready(function($){

 $(\".links-bar\").find(\"a\").click(function(){
     $(\".form-container\").addClass(\"hidden\");
     $(\"#\"+$(this).attr(\"href\").replace(\"#\",\"\")).removeClass(\"hidden\");
     return false;
 })

})", 
	"row" => 26
	), 
"wrapper_id" => "wrapper-1408622963086-1817", 
"breakpoint" => array(
	"custom-1408717728290" => array(
		"edited" => false, 
		"left" => 7, 
		"col" => 8
		), 
	"custom-1408717918354" => array(
		"edited" => false, 
		"left" => 5, 
		"col" => 8
		), 
	"custom-1408717978058" => array(
		"edited" => false, 
		"left" => 4, 
		"col" => 8
		), 
	"custom-1408718022181" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 8
		), 
	"tablet" => array(
		"edited" => false, 
		"left" => 2, 
		"col" => 8
		), 
	"custom-1408718098456" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 8
		)
	)
));

$regions->add($region_3);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

