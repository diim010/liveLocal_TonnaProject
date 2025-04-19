<?php
/**
 * Template for displaying single event
 *
 * @package my-wordpress-theme
 */

get_header();
?>

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
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="course-thumbnail">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

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

    <?php get_sidebar(); ?>
</div>

<?php
get_footer();
