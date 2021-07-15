<?php namespace com\vanderms\wanderertheme; 

$menuName = PrimaryMenu::getName();

if(has_nav_menu('menu-primary')):
  $menuName = wp_get_nav_menu_name('menu-primary');
endif;

$navLinks = wp_get_nav_menu_items($menuName);

?>
<div class='wanderer-links'>
  <?php foreach($navLinks as $link): ?>
    <a href="<?php echo $link->url; ?>"><?php echo $link->title; ?></a>   
  <?php endforeach; ?>
</div>
