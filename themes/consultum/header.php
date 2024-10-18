<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consultum
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
  <?php wp_body_open(); ?>
  <div id="page" class="site general_bg_color">
    <header class="custom-containder" dir="ltr">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid p-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a href="" class="btn btn-default d-none d-lg-block">צור איתנו קשר</a>

          <div class="logo-block">
            <?php $logo_url = get_template_directory_uri() . '/assets/img/logo.svg'; ?>
            <a class="logo ms-auto" href="#"><img src="<?= esc_url($logo_url) ?>" alt="logo"></a>
          </div>

          <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'top',
              'menu_class'     => 'navbar-nav',
              'container'      => false,
              'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'link_class'     => 'nav-link',
              'li_class'       => 'nav-item',
            ));
            ?>
          </div>
        </div>
      </nav>
    </header>