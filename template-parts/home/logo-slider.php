<?php

/**
 * Logo slider section template
 *
 * @var array $args
 *
 */

?>

<section class="logo-slider">
    <?php if ( !empty($args['title']) ) : ?>
    <p><?= esc_html($args['title']) ?></p>
    <?php endif; ?>
    <div class="content ">
        <?php if ( !empty($args['logo_slider']) ) : ?>
        <div class="content__body">

            <?php foreach ($args['logo_slider'] as $slide) : ?>
            <div class="content__item" style="--mask-image: url('<?= esc_url($slide['logo']) ?>');">
                <a target="_blank" href="<?= $slide['link'] ?? 'javascript:void(0)' ?>">
                    <img src="<?= esc_url($slide['logo']) ?>" alt="Logo">
                </a>
            </div>
            <?php endforeach; ?>

            <?php foreach ($args['logo_slider'] as $slide) : ?>
                <div class="content__item" style="--mask-image: url('<?= esc_url($slide['logo']) ?>');">
                    <a target="_blank" href="<?= $slide['link'] ?? 'javascript:void(0)' ?>">
                        <img src="<?= esc_url($slide['logo']) ?>" alt="Logo">
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
        <?php endif; ?>
    </div>
</section>

