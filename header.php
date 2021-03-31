<!DOCTYPE html>
<html lang="xyy">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thème Blog</title>

  <!-- AJOUT DU CSS -->
  <?php wp_head() ?>

  <!-- RESET ET NORMALIZE -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/1_reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/2_normalize.css" />

  <!-- MON CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
</head>

<body <?php body_class() ?>>

  <header class="p--1 d--flex ai--c bg--blue text--white">
    <nav class="header__nav d--flex jc--fe">
      <a class="container-logo" href="#">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="Logo" width="140"> 
      </a>
      <a class="text--white text--none p--1" href="#">Page WordPress réalisé avec le thème Blog</a>
    </nav>
  </header>

  <main>
