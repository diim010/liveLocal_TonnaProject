<?php
/**
 * Template part for displaying the hero block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package live-local
 */


  namespace Live_Local\Template_Parts\Blocks;

  ?>

  <div class="hero-block">
    <div class="hero-block__content">
      <h1 class="hero-block__title"><?php echo esc_html( get_field( 'hero_title' ) ); ?></h1>
      <p class="hero-block__description"><?php echo esc_html( get_field( 'hero_description' ) ); ?></p>
      <a href="<?php echo esc_url( get_field( 'hero_button_link' ) ); ?>" class="hero-block__button">
        <?php echo esc_html( get_field( 'hero_button_text' ) ); ?>
      </a>
    </div>
    <div class="hero-block__image">
      <?php
        $image = get_field( 'hero_image' );
        if ( $image ) {
          echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'hero-block__image' ) );
        }
      ?>
    </div>
  </div>

