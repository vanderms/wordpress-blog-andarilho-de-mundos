<?php namespace com\vanderms\wanderertheme;


class AssetsLoader {
  
  private static $version;
  private static $uri;
  private static $hasInit = false;

  public static function init(){
    if(!AssetsLoader::$hasInit):      
      
      AssetsLoader::$version = wp_get_theme()->get('Version') . rand(1, 100);
      AssetsLoader::$uri = get_template_directory_uri();

      $namespace = 'com\\vanderms\\wanderertheme\\AssetsLoader::'; 
      add_action( 'wp_enqueue_scripts', $namespace . 'loadStyles');
      add_action( 'wp_enqueue_scripts',$namespace . 'loadScripts');
      AssetsLoader::$hasInit = true;
    endif;
  }

  public static function loadStyles(){
    wp_enqueue_style( 'index', AssetsLoader::$uri . '/assets/css/index.css',
      false,  AssetsLoader::$version
    );
  }

  public static function loadScripts(){
    wp_enqueue_script( 'main', AssetsLoader::$uri . '/assets/js/main.js', 
      false,  AssetsLoader::$version, true
    );
  }
}
?>