<?php
/**
 * Template part for displaying the FAQ block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package live-local
 */



?>
<section class="block block-faq">
  <div class="container">
    <div class="block-header">
      <h2><?php the_field('block-title'); ?></h2>
      <?php if ( get_field('block-description') ) : ?>
        <p><?php echo get_field('block-description'); ?></p>
      <?php endif; ?>

    </div>
      <div class="block-content">
        <?php if ( have_rows('faq') ) : ?>
          <ul uk-accordion class="faq-list">
          <?php while( have_rows('faq') ) : the_row(); ?>
              <!--  -->
            <li class="<?php the_sub_field('open'); ?> faq-list__item">
                <a class="uk-accordion-title" href><?php the_sub_field('question'); ?></a>
                <div class="faq-list__item-content uk-accordion-content">
                    <p><?php the_sub_field('answer'); ?></p>
                </div>
              </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>




      </div>
    </div>
  </div>
</section>
