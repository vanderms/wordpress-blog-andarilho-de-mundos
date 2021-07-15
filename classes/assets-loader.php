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
      add_filter('script_loader_tag', $namespace.'loadAsJsModule', 10, 3);
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
    wp_enqueue_script( 'wanderer-main', AssetsLoader::$uri . '/assets/js/main.js', 
      false,  AssetsLoader::$version, true
    );
  }

  public static function loadAsJsModule($tag, $handle, $src){
    if ('wanderer-main' !== $handle ):
      return $tag;
    endif;
    
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
  }
}
?>