<?php
    //Check if page title has been set and if not set a default.
    if(!isset($page_title)){
      $page_title = "Default page title goes here";
    }
?>

<!doctype html>
<html class="no-js" lang="es">

  <head>
      <meta charset="utf-8">
      <meta name="language" content="es">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title><?php echo h($page_title); ?> Terapia con Pablo : psicoterapeuta especializado en procesos de duelo, psicooncología y violencia de género - Ibiza, España</title>
      <meta name="description" content="Here a description of your website.">
      <meta name="keywords" content="psicoterapeuta, procesos de duelo, psicología, violencia de género, psicooncología, Ibiza, España">
      <meta name="author" content="Diseño y desarrollo por la baula www.labaula.net">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
      <meta name="robots" content="all">
      <meta name="theme-color" content="#2d2d2d">

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo url_for("_styles/normalize.min.css") ?>" >
      <link rel="stylesheet" type="text/css" href="<?php echo url_for("_styles/main.css") ?>" >

      <!-- Scripts -->
      <script type="text/javascript" src="<?php echo url_for("_scripts/vendor/tweenmax.min.js")?>"></script>
      <script type="text/javascript" src="<?php echo url_for("_scripts/vendor/jquery.min.js") ?>"></script>
  </head>

  <body id="body">
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--  Main Nav -->
    <nav>
      <div id="burger-button" class="burger-button">
        <img src="<?php echo url_for("_media/icon-burger.png")?>">
      </div>
      
      <ul id="menu" class="section-wrapp">
        <li class="nav-button"><a href="index.php#inicio">Inicio</a></li>
        <li class="nav-button"><a href="index.php#sobre-pablo">Sobre Pablo</a></li>
        <li class="nav-button"><a href="index.php#terapias">Terapias<span class="nav-indicator"></span></a></li>
        <li class="nav-button"><a href="index.php#formacion">Formación</a></li>
        <li class="nav-button"><a href="index.php#contacto">Contacto</a></li>
      </ul>
    </nav>
    <!-- Main Nav ends -->

    <!--  Quick Nav -->
    <div id="quick-nav">
      <ul class="quick-nav-buttons">
        <li class="quick-nav-button"><a href="#inicio"> <img class="arrow-up" src="<?php echo url_for("_media/icon-arrows.png")?>"> </a></li>
        <li class="quick-nav-button"><a href="#sobre-pablo"> <img class="arrow-down" src="<?php echo url_for("_media/icon-arrows.png")?>"> </a></li>
      </ul>
    </div>
    <!-- Nav ends -->

    <!-- Main container -->
    <div class="page-container">