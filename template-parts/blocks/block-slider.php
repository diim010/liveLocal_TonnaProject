<?php
/**
 * Block Name: Hero Block
 * Template part for displaying the hero block
 **/



  ?>
<div>

        <div class="uk-h3">Scale</div>

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale">

            <div class="uk-slideshow-items">
                <div>
                    <img src="images/photo.jpg" alt="" uk-cover>
                </div>
                <div>
                    <img src="images/dark.jpg" alt="" uk-cover>
                </div>
                <div>
                    <img src="images/light.jpg" alt="" uk-cover>
                </div>
            </div>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

    </div>
