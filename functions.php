<?php
namespace com\vanderms\wanderertheme; 
require_once 'classes/assets-loader.php';
require_once 'classes/primary-menu.php';

  

AssetsLoader::init();

PrimaryMenu::init();

add_theme_support('custom-logo');


?>
