<?php namespace com\vanderms\wanderertheme;


class AssetsLoader {
  
  private static $version;
  private static $uri;
  private static $hasInit = false;

  public static function init(){
    if(!AssetsLoader::$hasInit):      
      
      AssetsLoader::$version = wp_get_theme()->get('Version') . rand(1, 1000000);
      AssetsLoader::$uri = get_template_directory_uri();

      $namespace = 'com\\vanderms\\wanderertheme\\AssetsLoader::'; 
      add_action( 'wp_enqueue_scripts', $namespace . 'loadStyles');
      add_action( 'wp_enqueue_scripts',$namespace . 'loadScripts');
      AssetsLoader::$hasInit = true;
    endif;
  }

  public static function loadStyles(){
    
    $files = scandir(get_template_directory().'/assets/css/');

    foreach($files as $file):
      if($file !== 'globals.css' && strpos($file, '.css') !== false):        
        wp_enqueue_style( $file, AssetsLoader::$uri . '/assets/css/' . $file,
          false,  AssetsLoader::$version
        );
      endif;
    endforeach;
  }

  public static function loadScripts(){
    $files = scandir(get_template_directory().'/assets/js/');

    foreach($files as $file):
      if(strpos($file, '.js') !== false):        
        wp_enqueue_script( $file, AssetsLoader::$uri . '/assets/js/' . $file, 
          false,  AssetsLoader::$version, true
        );
      endif;
    endforeach;
  }
}
?>