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
    <div class="block-faq__title" >
              <h2 uk-scrollspy="cls: uk-animation-slide-down; delay: 1500; repeat: true"><?php the_field('faq_title'); ?></h2>
              <?php if ( get_field('faq_description') ) : ?>
                <p uk-scrollspy="cls: uk-animation-slide-up; delay: 2000; repeat: true"><?php echo get_field('faq_description'); ?></p>
              <?php endif; ?>
    </div>
    <div class="block-faq__content" uk-scrollspy="cls: uk-animation-slide-right; delay: 2500; repeat: true">
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
</section>
