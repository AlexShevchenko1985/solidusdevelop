<?php

/**
 * Hero section template
 *
 * @var array $args
 *
 */

?>

<section class="aitech-labs-hero">
    <div class="media">
        <video playsinline autoplay muted loop>
            <source src="<?php echo get_template_directory_uri() . '/build/video/Ai-Techlabs-Hero-1X.mp4' ?>" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="heading">
            <?php if (!empty ($args['label'])) : ?>
                <div class="label"><?= esc_html($args['label']) ?></div>
            <?php endif; ?>

            <?php if (!empty ($args['title'])) : ?>
            <h1><?= nl2br($args['title']) ?></h1>
            <?php endif; ?>

            <?php if (!empty ($args['button'])) : ?>
            <a href="<?= esc_url($args['button']['url']) ?>" target="<?= $args['button']['target'] ?>" class="btn btn-white"><?= esc_html($args['button']['title']) ?></a>
            <?php endif; ?>
        </div>
        <div class="description">
            <?php if (!empty ($args['description'])) : ?>
                <?= nl2br($args['description']) ?>
            <?php endif; ?>

            <?php if (!empty ($args['description_link'])) : ?>
                <a href="<?= esc_url($args['description_link']['url']) ?>" target="<?= $args['description_link']['target'] ?>" class="description__btn"><?= esc_html($args['description_link']['title']) ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>