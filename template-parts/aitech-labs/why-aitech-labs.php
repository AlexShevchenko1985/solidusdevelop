<?php

/**
 * Why AITECH Labs template
 *
 * @var array $args
 *
 */

?>

<section class="why-aitech-labs">
    <div class="container">
        <?php if (!empty ($args['label'])) : ?>
        <div class="label"><?= esc_html($args['label']) ?></div>
        <?php endif; ?>

        <?php if (!empty ($args['title'])) : ?>
        <h2><?= $args['title'] ?></h2>
        <?php endif; ?>

        <?php if (!empty ($args['subtitle'])) : ?>
            <p><?= $args['subtitle'] ?></p>
        <?php endif; ?>

        <div class="why-aitech-labs__info-items">
            <div class="item">
                <div class="item__title">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/mentorship.svg' ?>" alt="<?php echo esc_html($args['title_1']) ?>">
                    <?php echo esc_html($args['title_1']) ?>
                </div>
                <div class="item__content">
                    <?php echo esc_html($args['content_1']) ?>
                </div>
            </div>

            <div class="item">
                <div class="item__title">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/network-access.svg' ?>" alt="<?php echo esc_html($args['title_2']) ?>">
                    <?php echo esc_html($args['title_2']) ?>
                </div>
                <div class="item__content">
                    <?php echo esc_html($args['content_2']) ?>
                </div>
            </div>

            <div class="item">
                <div class="item__title">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/technical-support.svg' ?>" alt="<?php echo esc_html($args['title_3']) ?>">
                    <?php echo esc_html($args['title_3']) ?>
                </div>
                <div class="item__content">
                    <?php echo esc_html($args['content_3']) ?>
                </div>
            </div>
        </div>
    </div>
</section>
