<?php
    //Check if page title has been set and if not set a default.
    if(!isset($pageTitle)){
      $pageTitle = "Terapia con Pablo - psicoterapeuta especializado en procesos de duelo, psicooncología y violencia de género. Ibiza, España";
    }

    //Set inner page indicator on nav
    $pageIndTerapias = ($page == "terapias-individuales" || $page == "terapias-familiares") ? True : False; 
    $pageIndCursos = ($page == "cursos") ? True : False; 
?>

<!doctype html>
<html class="no-js" lang="es">

  <head>
      <meta charset="utf-8">
      <meta name="language" content="es">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title><?php echo h($pageTitle); ?></title>
      <meta name="description" content="Pablo Rodriguez González - psicoterapeuta especializado en procesos de duelo, psicooncología y violencia de género. Apoyo y acompañamiento a personas, parejas y familias así como formación a profesionales y empresas.">
      <meta name="keywords" content="psicoterapeuta, procesos de duelo, psicología, violencia de género, psicooncología, Ibiza, España">
      <meta name="author" content="Diseño y desarrollo por la baula www.labaula.net">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no">
      <meta name="robots" content="all">
      <meta name="theme-color" content="#66819d">

      <!-- Icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url_for("_media/share_icons/apple-icon-57x57.png")?>">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url_for("_media/share_icons/apple-icon-60x60.png")?>">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url_for("_media/share_icons/apple-icon-72x72.png")?>">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url_for("_media/share_icons/apple-icon-76x76.png")?>">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url_for("_media/share_icons/apple-icon-114x114.png")?>">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url_for("_media/share_icons/apple-icon-120x120.png")?>">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo url_for("_media/share_icons/apple-icon-144x144.png")?>">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url_for("_media/share_icons/apple-icon-152x152.png")?>">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url_for("_media/share_icons/apple-icon-180x180.png")?>">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo url_for("_media/share_icons/android-icon-192x192.png")?>">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url_for("_media/share_icons/favicon-32x32.png")?>">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo url_for("_media/share_icons/favicon-96x96.png")?>">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url_for("_media/share_icons/favicon-16x16.png")?>">
      <link rel="manifest" href="<?php echo url_for("_media/share_icons/manifest.json")?>">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo url_for("_media/share_icons/ms-icon-144x144.png")?>">
      <meta name="theme-color" content="#ffffff">

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo url_for("_styles/normalize.min.css") ?>" >
      <link rel="stylesheet" type="text/css" href="<?php echo url_for("_styles/main.css") ?>" >

      <!-- Scripts -->
      <script type="text/javascript" src="<?php echo url_for("_scripts/vendor/tweenmax.min.js")?>"></script>
      <script type="text/javascript" src="<?php echo url_for("_scripts/vendor/scrollmagic.min.js")?>"></script>
      <script type="text/javascript" src="<?php echo url_for("_scripts/vendor/debugindicators.min.js")?>"></script>
  </head>

  <body id="body" class="scrollContent">
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--  Main Nav -->
    <nav>
      <div id="burger-button" class="burger-button">
        <img src="<?php echo url_for("_media/icon-burger.png")?>">
      </div>
      
      <ul id="menu" class="section-wrapp">
        <li id="nav-btn-inicio" class="nav-button"><a href="https://www.terapiaconpablo.com/#inicio">Inicio</a></li>
        <li id="nav-btn-sobre" class="nav-button"><a href="https://www.terapiaconpablo.com/#sobre-pablo">Sobre Pablo</a></li>
        <li id="nav-btn-terapias" class="nav-button"><a href="https://www.terapiaconpablo.com/#terapias">Terapias <?php if($pageIndTerapias){ echo "<span class='page-indicator'></span>"; } ?> </a></li>
        <li id="nav-btn-formacion" class="nav-button"><a href="https://www.terapiaconpablo.com/#formacion">Formación <?php if($pageIndCursos){ echo "<span class='page-indicator'></span>"; } ?> </a></li>
        <li id="nav-btn-contacto" class="nav-button"><a href="https://www.terapiaconpablo.com/#contacto">Contacto</a></li>
      </ul>
    </nav>
    <!-- Main Nav ends -->

    <!--  Quick Nav -->
    <div id="quick-nav">
      <ul class="quick-nav-buttons">
        <li class="quick-nav-button"><a id="quick-nav-up" href="#inicio"> <img class="arrow-up" src="<?php echo url_for("_media/icon-arrows.png")?>"> </a></li>
        <li class="quick-nav-button"><a id="quick-nav-down" href="#sobre-pablo"> <img class="arrow-down" src="<?php echo url_for("_media/icon-arrows.png")?>"> </a></li>
      </ul>
    </div>
    <!-- Quick Nav ends -->

    <!-- Main container -->
    <div class="page-container">