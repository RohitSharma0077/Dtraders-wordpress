<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title><?php echo get_bloginfo('name') ?>  <?php echo get_bloginfo('description') ?> </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo get_bloginfo('template_url'); ?>/img/favicon.png" rel="icon">
  <!-- <link href="<?php echo get_bloginfo('template_url'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">


  <?php wp_head(); ?>


</head>


<body>
<center><h1 style="color:teal; margin-top: 5px;">Blogs Hub</h1></center>

<?php get_search_form(); ?>


<p style="margin-left: 6%;">You Search For: <?php echo get_search_query() ?></p>

