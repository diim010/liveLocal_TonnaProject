<?php
/**
 * Block Name: Hero Block
 * Template part for displaying the hero block
 **/


 $image = get_field( 'hero_image' );

  ?>

  <div class="hero-block uk-background-fixed uk-background-center-center uk-background-cover uk-light" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
    <div class="hero-block__content">
      <div class="hero-block__content-wrap">
        <h1 class="hero-block__title"><?php echo esc_html( get_field( 'hero_title' ) ); ?></h1>
        <p class="hero-block__description"><?php echo esc_html( get_field( 'hero_description' ) ); ?></p>
        <a href="<?php echo esc_url( get_field( 'hero_button_link' ) ); ?>" class="hero-block__button">
        <?php echo esc_html( get_field( 'hero_button_text' ) ); ?>
      </a>
      </div>

    </div>

  </div>

