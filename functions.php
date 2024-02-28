<?php
function ladakh(){
wp_enqueue_script('rameshwararam', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0',true);
wp_enqueue_style('gangotri','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

wp_enqueue_style('rishikesh',get_theme_file_uri('/build/style-index.css'));
wp_enqueue_style('kedarnath',get_theme_file_uri('/build/index.css'));
wp_enqueue_style('ayodhya','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}
add_action('wp_enqueue_scripts','ladakh');
function doodhkaasi(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','doodhkaasi');
?>