<?php 
function stringClean($text){
   $text = filter_var($text, FILTER_SANITIZE_STRING);
   $text = strip_tags($text);
   return $text;
}