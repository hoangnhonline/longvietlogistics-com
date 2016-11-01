<?php
global $wp_query;
$post = $wp_query->post;
if ( in_category(array(3,4) )) {
  include(TEMPLATEPATH . '/single-in-category.php'); }
else {
  include(TEMPLATEPATH . '/single-default.php');
}
?>