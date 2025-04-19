<?php
/**
 * Block Name: Hero Block
 * Template part for displaying the hero block
 **/
?>
  <section class="block-slider">
    <?php if ( have_rows('slider') ) : ?>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale">
            <div class="block-slider__wrap uk-slideshow-items">
            <?php while( have_rows('slider') ) : the_row(); ?>
                <div class="block-slider__item  uk-background-cover uk-light" style="background-image: url(<?php echo esc_url(get_sub_field('slide_img')['url']); ?>);">
                    <img src="<?php echo esc_url(get_sub_field('slide_img')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('slide_img')['alt']); ?>" uk-cover>
                    <div class="block-slider__item-content uk-position-center uk-position-small uk-text-center">
                      <h1 class="uk-margin-remove"><?php the_sub_field('slide_title'); ?></h1>
                      <p><?php the_sub_field('slide_text'); ?></p>
                      <a href="<?php the_sub_field('slide_button_link'); ?>" class="uk-button uk-button-default"><?php the_sub_field('slide_button_name'); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
    <?php endif; ?>
  </section>
