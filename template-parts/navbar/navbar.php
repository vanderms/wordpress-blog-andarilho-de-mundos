<?php namespace com\vanderms\wanderertheme; ?>
<nav class='wanderer-nav-header wanderer-close'>
  <div class="wanderer-placeholder"></div>
  <div class="wanderer-backdrop"></div>
  <div class="wanderer-menu-bar">
    <span class="wanderer-menu-btn">
    <?php get_template_part('template-parts/icons/menu') ?>
    </span>
  </div> 
  <div class="wanderer-bar">
    <span class="wanderer-close-btn">
      <?php get_template_part('template-parts/icons/close') ?>
    </span>    
    <?php get_template_part('template-parts/logo/logo') ?>
    <?php get_template_part('template-parts/navlinks/navlinks'); ?>
  </div>
</nav>