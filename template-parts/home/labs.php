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
        <?php if ( !empty($args['title']) ) : ?>
            <h2><?= esc_html($args['title']) ?></h2>
        <?php endif; ?>

        <?php if ( !empty($args['subtitle']) ) : ?>
            <p><?= esc_html($args['subtitle']) ?></p>
        <?php endif; ?>

        <?php if ( !empty($args['button_text']) ) : ?>
            <a href="<?= esc_url($args['button_link']) ?>" class="btn"><?= esc_html($args['button_text']) ?></a>
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
                        <rect x="40" y="40" width="40" height="40" rx="4" transform="rotate(-180 40 40)" fill="url(#paint0_radial_500_16766)" fill-opacity="0.2"/>
                        <rect x="39.5" y="39.5" width="39" height="39" rx="3.5" transform="rotate(-180 39.5 39.5)" stroke="#756897" stroke-opacity="0.3"/>
                        <path d="M20.0947 11.3783C19.5892 11.8826 19.5892 12.7237 20.0947 13.2289L25.5108 18.6331L11.3065 18.6331C10.5903 18.6331 10 19.2221 10 19.9367C10 20.6513 10.5903 21.2403 11.3065 21.2403L25.5323 21.2403L19.9893 26.771C19.4838 27.2754 19.4838 28.1165 19.9893 28.6217C20.4948 29.1261 21.3378 29.1261 21.8441 28.6217L29.3677 21.1147C29.4097 21.0728 29.4517 21.0309 29.4731 20.9882C29.7892 20.7566 30 20.3787 30 19.9368C30 19.5162 29.8106 19.1589 29.4945 18.9067L21.9494 11.3783C21.4431 10.8739 20.6002 10.8739 20.0947 11.3783Z" fill="#7E759D"/>
                        <defs>
                            <radialGradient id="paint0_radial_500_16766" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(45 71) rotate(-47.5638) scale(47.4236 35.3488)">
                                <stop stop-color="#190B30"/>
                                <stop offset="1" stop-color="#01020A"/>
                            </radialGradient>
                        </defs>
                    </svg>

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next-widget">

                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="40" width="40" height="40" rx="4" transform="rotate(-180 40 40)" fill="url(#paint0_radial_500_16766)" fill-opacity="0.2"/>
                        <rect x="39.5" y="39.5" width="39" height="39" rx="3.5" transform="rotate(-180 39.5 39.5)" stroke="#756897" stroke-opacity="0.3"/>
                        <path d="M20.0947 11.3783C19.5892 11.8826 19.5892 12.7237 20.0947 13.2289L25.5108 18.6331L11.3065 18.6331C10.5903 18.6331 10 19.2221 10 19.9367C10 20.6513 10.5903 21.2403 11.3065 21.2403L25.5323 21.2403L19.9893 26.771C19.4838 27.2754 19.4838 28.1165 19.9893 28.6217C20.4948 29.1261 21.3378 29.1261 21.8441 28.6217L29.3677 21.1147C29.4097 21.0728 29.4517 21.0309 29.4731 20.9882C29.7892 20.7566 30 20.3787 30 19.9368C30 19.5162 29.8106 19.1589 29.4945 18.9067L21.9494 11.3783C21.4431 10.8739 20.6002 10.8739 20.0947 11.3783Z" fill="#7E759D"/>
                        <defs>
                            <radialGradient id="paint0_radial_500_16766" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(45 71) rotate(-47.5638) scale(47.4236 35.3488)">
                                <stop stop-color="#190B30"/>
                                <stop offset="1" stop-color="#01020A"/>
                            </radialGradient>
                        </defs>
                    </svg>

                </div>
            </div>
        </div>
    </div>
</section>
