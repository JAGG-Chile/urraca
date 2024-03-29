<?php
require ".env.php";
define('ROOT', dirname(__FILE__)); // Esta constante es para poder crear rutas absolutas
//define('URL', 'https://' . $_SERVER['SERVER_NAME']); // La URL base de tu sitio web. También para crear, en este caso, URLs absolutas.
define('URL', $base_url); // La URL base de tu sitio web. También para crear, en este caso, URLs absolutas.
$pagina = basename($_SERVER['PHP_SELF']);
if ($pagina == 'index.php') {
  $idpage = 'principal';
} else {
  $idpage = 'secundaria';
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta name="keywords" content="desarrollo web, programacion, aplicacion movil, software a medida, sistema, programador, php, mysql, bootstrap, html5" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="<?php echo URL; ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- mis estilos -->
  <link href="<?php echo URL; ?>/css/estilos.css" rel="stylesheet">

  <title>Coderland</title>

  <!-- Creado con Favicon-generator-org-->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL; ?>/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo URL; ?>/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo URL; ?>/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>

<body id="<?php echo $idpage; ?>">

  <header>
    <!-- Cabecera -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!--Logo -->
        <a class="navbar-brand" href="<?php echo URL; ?>/index.php">
          <img src="<?php echo URL; ?>/img/logo-avatar.png" class="d-inline-block align-text-top" height="40px" alt="Logo Coderland">
        </a>
        <!-- Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo URL; ?>/index.php">Inicio</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL; ?>/about.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL; ?>/programacion.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL; ?>/soporte.php">Soporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL; ?>/servicio.php">Contacto</a>
            </li>            
          </ul>
        </div>
        <span class="navbar-text">          
          <img class="navbar-text" src="<?php echo URL; ?>/img/phone_black_24dp.svg">&nbsp;(569) 2620 2614</img>
        </span>
      </div>
    </nav>

  </header>
  <div id="liveAlertPlaceholder"></div>
