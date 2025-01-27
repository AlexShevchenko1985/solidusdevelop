<?php

/**
 * Incubation section template
 *
 * @var array $args
 *
 */

?>

<section class="section-grant">
    <div class="container">
        <div class="section-grant__inner">
            <div class="content">
                <?php if ( !empty($args['title']) ) : ?>
                    <h2><?= $args['title'] ?></h2>
                <?php endif; ?>

                <?php if ( !empty($args['description']) ) : ?>
                    <p><?= $args['description'] ?></p>
                <?php endif; ?>

                <?php if (!empty ($args['button'])) : ?>
                    <a href="<?= esc_url($args['button']['url']) ?>" target="<?= $args['button']['target'] ?>" class="btn btn-white"><?= esc_html($args['button']['title']) ?></a>
                <?php endif; ?>
            </div>

            <div class="img-wrap">
                <img src="<?= get_template_directory_uri() . '/build/img/grant.webp' ?>" alt="Grant">
            </div>
        </div>
    </div>
</section>