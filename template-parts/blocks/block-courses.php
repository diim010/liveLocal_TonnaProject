<?php
/**
 * Template part for displaying the courses block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package live-local
 */
?>
<?php
$block_title = get_field( 'headline' );
$block_subtitle = get_field( 'subhead' );
$block_courses = get_field( 'courses' );

?>
<section class="block block-courses">
  <div class="container">
    <div class="block-header text-center">
      <h2 class="block-title"><?php echo esc_html( $block_title ); ?></h2>
      <p class="block-subtitle"><?php echo esc_html( $block_subtitle ); ?></p>
    </div>
    <div class="block-content">
      <?php if ( $block_courses ) : ?>
          <?php foreach ( $block_courses as $course ) : ?>
              <div class="course-card">
                <a href="<?php echo esc_url( get_permalink( $course->ID ) ); ?>">
                  <?php echo get_the_post_thumbnail( $course->ID, 'medium' ); ?>
                  <h3><?php echo esc_html( get_the_title( $course->ID ) ); ?></h3>
                </a>
              </div>
          <?php endforeach; ?>
      <?php endif; ?>
      <?php if ( $block_courses_link && $block_courses_link_text ) : ?>
        <a href="<?php echo esc_url( $block_courses_link ); ?>" class="btn btn-primary"><?php echo esc_html( $block_courses_link_text ); ?></a>
      <?php endif; ?>
