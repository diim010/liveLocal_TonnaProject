<?php
/**
 * Template for displaying single course
 *
 * @package my-wordpress-theme
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
if ( have_rows( 'hero' ) ) {
   while ( have_rows( 'hero' ) ) {
        the_row();
        $hero_title = get_sub_field( 'hero_title' );
        $hero_subtitle = get_sub_field( 'hero_subtitle' );
        $hero_image = get_sub_field( 'hero_image' );
    }
}
if ( have_rows( 'course_stats' ) ) {
    while ( have_rows( 'course_stats' ) ) {
        the_row();
        $course_hours = get_sub_field( 'hours' );
        $course_lessons = get_sub_field( 'lessons' );
        $course_coast = get_sub_field( 'coast' );
    }
}
get_header();
?>


<div class="course-post-type">

  <section class="hero-section" style="background-image: url('<?php echo esc_url( $hero_image ); ?>');">
          <div class="hero-content">
              <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
              <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
          </div>
          <div class="hero-section__stats">
              <div class="hero-section__stats-item">
                  <h3><?php echo $course_hours; ?></h3>
                  <p>Hours</p>
              </div>
              <div class="hero-section__stats-item">
                  <h3><?php echo $course_lessons; ?></h3>
                  <p>Lessons</p>
              </div>
              <div class="hero-section__stats-item">
                  <h3><?php echo $course_coast; ?></h3>
                  <p>Coast</p>
          </div>
  </section>
  <div class="container">
      <main id="primary" class="site-main">
          <?php
          while ( have_posts() ) :
              the_post();
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header">
                      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                  </header>

                  <div class="entry-content">


                      <div class="course-meta">
                          <?php
                          $duration = get_post_meta( get_the_ID(), 'course_duration', true );
                          $level = get_post_meta( get_the_ID(), 'course_level', true );

                          if ( $duration ) {
                              echo '<span class="course-duration">' . esc_html( $duration ) . '</span>';
                          }
                          if ( $level ) {
                              echo '<span class="course-level">' . esc_html( $level ) . '</span>';
                          }
                          ?>
                      </div>

                      <?php
                      the_content();
                      ?>
                  </div>
              </article>

          <?php endwhile; ?>
      </main>


  </div>
</div>

<?php
get_footer();
