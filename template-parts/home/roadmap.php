<?php

/**
 * Roadmap section template
 *
 * @var array $args
 *
 */

?>

<section class="home-roadmap">
    <div class="container">
        <?php if ( !empty($args['title']) ) : ?>
        <h2><?= esc_html($args['title']) ?></h2>
        <?php endif; ?>

        <?php if ( !empty($args['subtitle']) ) : ?>
        <p><?= esc_html($args['subtitle']) ?></p>
        <?php endif; ?>

        <div class="home-roadmap__inner">
            <div class="home-roadmap__inner-item">
                <?php if ( !empty($args['section_1']['title']) ) : ?>
                    <h3><?= esc_html($args['section_1']['title']) ?></h3>
                <?php endif; ?>

                <?php if ( !empty($args['section_1']['steps']) ) : ?>
                <ul class="content">
                    <?php foreach ( $args['section_1']['steps'] as $step ): ?>
                    <li class="content__item">
                        <span class="<?= $step['ready'] ? 'check' : 'circle' ?>"></span>
                        <?= esc_html($step['description']) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>

            <div class="home-roadmap__inner-item">
                <?php if ( !empty($args['section_2']['title']) ) : ?>
                    <h3><?= esc_html($args['section_2']['title']) ?></h3>
                <?php endif; ?>

                <?php if ( !empty($args['section_2']['steps']) ) : ?>
                    <ul class="content">
                        <?php foreach ( $args['section_2']['steps'] as $step ): ?>
                            <li class="content__item">
                                <span class="<?= $step['ready'] ? 'check' : 'circle' ?>"></span>
                                <?= esc_html($step['description']) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <img src="<?= get_template_directory_uri() . '/build/img/solidus-logo2.svg' ?>" alt="Solidus" class="solidus-logo">
        </div>
    </div>
</section>
