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
<?php
  // Add any additional markup or classes as needed
  ?>
<style>

.block-about {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
}
.block-about__content {
  flex: 1;
  margin-right: 20px;
}
.block-about__title {
  font-size: 24px;
  margin-bottom: 10px;
}
.block-about__text {
  font-size: 16px;
}
.block-about__image {
  flex: 1;
}
.block-about__image img {
  max-width: 100%;
  height: auto;
}
</style>
