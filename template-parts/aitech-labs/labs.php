<?php

/**
 * Labs section template
 *
 * @var array $args
 *
 */

$coin_ids = get_field('api_widget_ids', 'option');
?>

<section class="labs-section">
    <div class="container">
        <?php if ( !empty($args['label']) ) : ?>
            <div class="label"><?= esc_html($args['label']) ?></div>
        <?php endif; ?>

        <?php if ( !empty($args['title']) ) : ?>
            <h2><?= $args['title'] ?></h2>
        <?php endif; ?>

        <?php if ( !empty($args['subtitle']) ) : ?>
            <p><?= esc_html($args['subtitle']) ?></p>
        <?php endif; ?>

        <?php if ( !empty($args['button']) ) : ?>
            <a href="<?= esc_url($args['button']['url']) ?>" target="<?= $args['button']['target'] ?>" class="btn"><?= esc_html($args['button']['title']) ?></a>
        <?php endif; ?>

        <div class="labs-section__inner swiper">
            <div class="swiper-wrapper">

            <?php if ( !empty( $coin_ids ) ) : ?>
            <?php foreach ($coin_ids as $coin_id) : ?>
            <?php get_template_part('template-parts/coin-widget', null, ['coin_id' => $coin_id['id']]); ?>
            <?php endforeach; ?>
            <?php endif; ?>

            </div>

            <!-- navigation buttons -->
            <div class="swiper-controls">
                <div class="swiper-button-prev-widget">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <rect width="40" height="40" rx="20" fill="black" fill-opacity="0.4"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="white" stroke-opacity="0.5"/>
                            <path d="M26 20H14M14 20L18.5 15.5M14 20L18.5 24.5" stroke="white" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next-widget">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <rect width="40" height="40" rx="20" fill="black" fill-opacity="0.4"/>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="white" stroke-opacity="0.5"/>
                            <path d="M26 20H14M14 20L18.5 15.5M14 20L18.5 24.5" stroke="white" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>

                </div>
            </div>
        </div>
    </div>
</section>
