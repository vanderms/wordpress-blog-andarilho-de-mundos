<?php 
namespace com\vanderms\wanderertheme;


class PrimaryMenu {

  private static $links = [
    'Home' => '/',
    'Sobre' => '/#sobre',
    'Contato' => '/#contato'
  ];
  private static $name = "Menu Default";
  private static $hasInit = false;

  public static function init(){

    if(!PrimaryMenu::$hasInit){     
      add_action( 'init', 'com\\vanderms\\wanderertheme\\PrimaryMenu::build');
      PrimaryMenu::$hasInit = true;
    }
  }

  public static function getName(){
    return PrimaryMenu::$name;
  }

  public static function build(){
    PrimaryMenu::register();
    PrimaryMenu::createDefaultMenu();   
  }

  private static function register(){
    register_nav_menus([
      'menu-primary' => __('Menu Primário'), 
    ]);
  }

  private static function createDefaultMenu(){
    if (!is_nav_menu(PrimaryMenu::$name)):
     
      $menu_id = wp_create_nav_menu(PrimaryMenu::$name);
      
      foreach(PrimaryMenu::$links as $key => $value):
        wp_update_nav_menu_item( $menu_id, 0, [
          'menu-item-title'   =>  __( $key, 'textdomain' ),           
          'menu-item-url'     => home_url( $value ), 
          'menu-item-status'  => 'publish'
        ]);
      endforeach;
    
    endif;
  }
}
?>