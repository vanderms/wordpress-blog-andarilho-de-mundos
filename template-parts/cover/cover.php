<?php namespace com\vanderms\wanderertheme; 
  $backgroundImage = get_template_directory_uri() . "/assets/images/cover.jpg";

?>
 <style>
  .wanderer-cover .wanderer-image, .wanderer-cover .wanderer-tablet-image{      
    background-image: url(<?php echo $backgroundImage; ?>)       
  }
</style>
<section class="wanderer-cover">
  <div class="wanderer-text-container">
    <header>
      <h1>BLOG DO ESCRITOR ANDRÉ SOARES</h1>
      <div class="wanderer-tablet-image"></div>
      <blockquote>
        <p class='wanderer-quotation'>"Se o cotidiano lhe parece pobre, não o acuse: acuse-se a si próprio de não ser muito poeta para extrair as suas riquezas."</p>        
        <p class='wanderer-author wanderer-small'>Rainer Maria Rilke</p>
      </blockquote>
    </header>
    <div class="wanderer-cta">
      <p class='wanderer-small'>Cadastre seu email para ser notificado quando sair uma nova publicação</p>
      <form action="/#">
        <input type="text">
        <button>
        <?php get_template_part('template-parts/icons/send') ?>
        </button>
      </form>
    </div>
  </div> 
  <div class="wanderer-image"></div>
</section>