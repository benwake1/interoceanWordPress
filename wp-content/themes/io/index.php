<?php get_header(); ?>

<?php

$hero = wp_get_attachment_image_src(7, null, 0);

var_dump($hero);

?>
    <img src="<?= $hero[0] ?>" width="<?= $hero[1] ?>" height="<?= $hero[2] ?>" />

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <picture>

                <source srcset="" media="(min-width: 2560px)">

                <source srcset="" media="(min-width: 1440px)">

                <source srcset="" media="(min-width: 768px)">

                <source srcset="" media="(min-width: 320px)">

                <img src="<?= $hero[0] ?>" width="<?= $hero[1] ?>" height="<?= $hero[2] ?>" />

            </picture>
        </div>
    </div>
</div>

<?php get_footer(); ?>