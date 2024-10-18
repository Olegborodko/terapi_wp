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
    <header class="custom-containder">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключить навигацию">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a href="" class="btn btn-default">צור איתנו קשר</a>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Услуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
              </li>
            </ul>
          </div>
          <div>
          <?php $logo_url = get_template_directory_uri() . '/assets/img/logo.svg'; ?>
          <a class="logo ms-auto" href="#"><img src="<?= esc_url($logo_url) ?>" alt="logo"></a>
        </div>
      </nav>
    </header>