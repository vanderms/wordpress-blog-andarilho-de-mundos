<?php namespace com\vanderms\wanderertheme; 
  $backgroundImage = get_template_directory_uri() . "/assets/images/cover.jpg";

?>
 <style>
  .wanderer-cover .wanderer-image{      
    background-image: url(<?php echo $backgroundImage; ?>)       
  }
</style>
<section class="wanderer-cover">

  <div class="wanderer-text-container">
    <header>
      <h1>BLOG DO ESCRITOR ANDRÉ SOARES</h1>
      <blockquote>
        <p class='wanderer-quotation'>"Se o cotidiano lhe parece pobre, não o acuse: acuse-se a si próprio de não ser muito poeta para extrair as suas riquezas."</p>        
        <p class='wanderer-author'><small>Rainer Maria Rilke</small></p>
      </blockquote>
    </header>
    <div class="wanderer-cta">
      <p><small>Cadastre seu email para ser notificado quando sair uma nova publicação</small></p>
      <form action="/#">
        <input type="text">
        <button>
        <svg xmlns="http://www.w3.org/2000/svg" width="26.003" height="26" viewBox="0 0 26.003 26">
          <path id="Icon_ionic-ios-send" data-name="Icon ionic-ios-send" d="M29.686,4.561,4.825,15.4a.57.57,0,0,0,.02,1.036l6.725,3.8a1.084,1.084,0,0,0,1.239-.122L26.07,8.679c.088-.074.3-.217.379-.135s-.047.291-.122.379L14.855,21.844a1.081,1.081,0,0,0-.108,1.293l4.4,7.05a.572.572,0,0,0,1.029-.014L30.451,5.313A.57.57,0,0,0,29.686,4.561Z" transform="translate(-4.503 -4.503)"/>
        </svg>
        </button>
      </form>
    </div>
  </div>  
 
  <div class="wanderer-image">

  </div>
</section>