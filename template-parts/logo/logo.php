<?php namespace com\vanderms\wanderertheme; 

$customLogoId = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $customLogoId , 'full' );
?>
<a href='/' class="wanderer-logo">
  <?php if(has_custom_logo()): ?>
    <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php get_bloginfo( 'name' ); ?>"/>
  <?php else: ?>
    <span> <?php echo get_bloginfo('name');?></span>
  <?php endif; ?>
</a>
