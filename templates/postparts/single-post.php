<?php $templates = array(); 

$templates["title"] = '<h2 class="post_title"><a href="%permalink%">%title%</a></h2>';
$templates["author"] = '<div class="post_author">WRITTEN BY <a href="%author_url%">%author%</a></div>';
$templates["comments_count"] = '<div class="comments_count">COMMENTS / <a href="%permalink%#comments">%comments_count%</a></div>';
$templates["date"] = '<time class="post_date" datetime="%date_iso%">%date%</time>';
$templates["contents"] = '<div class="post_content">%contents%</div>';


return $templates;