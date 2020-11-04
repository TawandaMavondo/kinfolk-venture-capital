<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/css/reset.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/lib/uikit-3.3.1/css/uikit.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;669;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head()?>
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/style.css">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title></head>

  <body <?php body_class(); ?>>

  
  <!-- Navigation bar -->
  <nav class="navbar navbar-light bg-white fixed-top">
    <a class="navbar-brand" href="<?php the_permalink( 16 );?>">
      <img src="<?php bloginfo( 'template_directory' )?>/img/KinfolkLogoArtboard-b.svg" width="50" height="50" alt="">
    </a>
    <a href="#nav-modal" uk-toggle id="nav-icon2">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </a>
  </nav>