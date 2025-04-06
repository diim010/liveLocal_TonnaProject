<?php
/**
 * Template part for displaying the about block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package live-local
 */


  namespace Live_Local\Template_Parts\Blocks;

  ?>
<div class="block-about">
  <div class="block-about__content">
    <h2 class="block-about__title">
      <?php echo esc_html( get_field( 'title' ) ); ?>
    </h2>
    <p class="block-about__text">
      <?php echo esc_html( get_field( 'text' ) ); ?>
    </p>
  </div>
  <div class="block-about__image">
    <?php
    $image = get_field( 'image' );
    if ( $image ) {
      echo wp_get_attachment_image( $image, 'full' );
    }
    ?>
  </div>
</div>

