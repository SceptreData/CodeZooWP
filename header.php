<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeZoo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      <div class="header-container fit-content">
      <a href="/" class="site-branding">
        <svg class="logo-hippo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M581.12 96.2c-27.67-.15-52.5 17.58-76.6 26.62C489.98 88.27 455.83 64 416 64c-11.28 0-21.95 2.3-32 5.88V56c0-13.26-10.75-24-24-24h-16c-13.25 0-24 10.74-24 24v48.98C286.01 79.58 241.24 64 192 64 85.96 64 0 135.64 0 224v240c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16v-70.79C128.35 407.57 166.72 416 208 416s79.65-8.43 112-22.79V464c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V288h128v32c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-32c17.67 0 32-14.33 32-32v-92.02c0-34.09-24.79-67.59-58.88-67.78zM448 176c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path></svg>
        <div class="site-branding-titles">
        <?php
        if (is_front_page() && is_home()) :
          ?>
          <h2 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
        <?php
        else :
          ?>
          <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        $codezoo_description = get_bloginfo('description', 'display');
        if ($codezoo_description || is_customize_preview()) :
          ?>
          <p class="site-description"><?php echo $codezoo_description; /* WPCS: xss ok. */ ?></p>
        <?php endif; ?>
        </div>
        </a><!-- .site-branding -->

        <nav class="site-nav">
       <ul class="icon-view">
        
       <li class="list-view-container">
            <?php wp_nav_menu(array('menu' => 'Articles', 'menu_class'=> 'list-view',));?>
       </li>


       <li id="mobile-menu-button" class="mobile-menu" >
          <svg aria-hidden="true" focusable="false"  class="mobile-menu-icon svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
       </li>

        <li class="login">
        <a  class="login-button" href="https://davidbergeron.dev/wp-admin">login</a>
       </li>

       </ul>
</nav>
        <aside id="mobile-menu-items" class="mobile-menu-items hide-menu">
           <?php wp_nav_menu(array('menu'=>'Articles', 'menu_class'=> 'icon-list')); ?>
        </aside>
      </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">