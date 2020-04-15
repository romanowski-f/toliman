<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:300,500&display=swap" rel="stylesheet">
    <?php if (is_front_page()) : ?>
        <title><?php echo bloginfo('name'); ?></title>
    <?php else: ?>
        <title><?php echo wp_title('&raquo;', true, 'right') . ' ' . bloginfo('name');?></title>
    <?php endif; ?>
  </head>


    <?php global $post; $postid = $post->ID; ?>
    <?php if (is_front_page()) : ?>
        <meta property="og:url"                content="<?php bloginfo('url'); ?>" />
        <meta property="og:title"              content="<?php bloginfo('name'); ?>" />
    <?php else: ?>
        <meta property="og:url"                content="<?php echo get_permalink( $postid ); ?>" />
        <meta property="og:title"              content="<?php wp_title(); ?>" />
    <?php endif; ?>

    <meta property="og:description"        content="<?php bloginfo('description'); ?>" />
    <meta property="og:image"              content="<?php bloginfo('template_directory'); ?>/assets/images/fb-image-tag.png" />

    <?php if (is_front_page()) : ?>
        <title><?php echo bloginfo('name'); ?></title>
    <?php else: ?>
        <title>Huber & Palsir - <?php echo bloginfo('name') . ' ' . wp_title(); ?></title>
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <link rel="apple-touch-icon" href="icon.png">

    <meta name="google-site-verification" content="onET2ZYakxunDZdEFOVzXhV-Fa1h8jsv9xRQzYB73B0" />

    <?php wp_head(); ?>
   
</head>  
<body>