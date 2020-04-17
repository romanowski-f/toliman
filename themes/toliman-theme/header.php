<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:300,500&display=swap" rel="stylesheet">
    <?php if (is_front_page()) : ?>
        <title><?php echo bloginfo('name'); ?></title>
    <?php else: ?>
        <title><?php echo wp_title('&raquo;', true, 'right') . ' ' . bloginfo('name');?></title>
    <?php endif; ?>
  </head>
<body <?php body_class(); ?>>

    <header class="main-header">
        <div class="container">
            <div class="row align-items-center justify-content-between m-0">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="">
                </div>
                <div class="menu-wrapper d-none d-md-flex align-items-center">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'nav-home nav justify-content-end',
                            'container'      => 'nav',
                            'container_class'   => 'toliman-main-menu'
                        ) );
                    ?>
                    <a class="btn btn-primary contact-button" href="#">Contact Us</a>
                </div>

                <div class="mobile-nav-button d-md-none"><div class="nav-icon"></div></div>
                <div class="mobile-nav d-md-none">
                     <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'menu-1',
                            'container'      => 'nav',
                            'container_class'   => 'toliman-mobile-menu'
                        ) );
                    ?>
                    <div class="close-button">Close</div>
                </div>
            </div>
        </div>

    </header>