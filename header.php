<?php namespace com\vanderms\wanderertheme; 
?>
<html lang='pt-br'>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <nav>
    <?php get_template_part('components/navlinks/navlinks'); ?>
  </nav>
<main>