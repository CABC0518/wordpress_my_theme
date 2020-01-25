<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>my_theme site</title>
    <?php wp_head();?>
  </head>
  <?php
  if(!is_home()):
    $my_classes = array('thisIsHome', 'yeahIAmHome');
  else:
    $my_classes = array('IAmNotHome');
  endif;
  ?>
  <body <?php body_class($my_classes); ?>>

    <?php wp_nav_menu(array('theme_location'=>'primary'));?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()-> width ?>" alt="" />
