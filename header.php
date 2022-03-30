<?php
/**
 * The header for our theme
 *
 * @package Package Name
 */

?>
<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Navbar -->
  <nav class="navbar sticky-top py-4 navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="#home" class="navbar-brand">
        <!-- <h3>CoinY App</h3> -->
        <img src="images/coiny-logo.png" alt="">
      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
          <li class="nav-item"><a href="#how-it-works" class="nav-link">How it Works</a></li>
          <li class="nav-item"><a href="#tips" class="nav-link">Financial Tips</a></li>
          <li class="nav-item"><a href="#team" class="nav-link">Meet our Team</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar-end -->