<?php
/**
 * Template part for displaying the courses block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package live-local
 */
?>
<?php
$courses_block_title = get_field( 'courses_block_title' );
$courses_block_subtitle = get_field( 'courses_block_subtitle' );
$courses = get_field( 'courses' );

?>
<section class="block block-courses">
  <div class="container">
    <div class="block-header text-center">
      <h2 class="block-title"><?php echo esc_html( $courses_block_title ); ?></h2>
      <p class="block-subtitle"><?php echo esc_html( $courses_block_subtitle ); ?></p>
    </div>
    <div class="block-content">
      <?php if ( $courses ) : ?>
          <?php foreach ( $courses as $course ) : ?>
                <a class="course-card" href="<?php echo esc_url( get_permalink( $course->ID ) ); ?>">
                  <?php echo get_the_post_thumbnail( $course->ID, 'large' ); ?>
                  <h3><?php echo esc_html( get_the_title( $course->ID ) ); ?></h3>
                </a>
          <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
