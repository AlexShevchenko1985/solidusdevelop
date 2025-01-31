<?php

/**
 * Roadmap section template
 *
 * @var array $args
 *
 */

?>

<section class="home-coin">
    <div class="container">
        <div class="content-wrap">
            <?php if ( !empty($args['title']) ) : ?>
                <h2><?= nl2br($args['title']) ?></h2>
            <?php endif; ?>
            <div class="content">
                <?php if ( !empty($args['description']) ) : ?>
                    <p><?= esc_html($args['description']) ?></p>
                <?php endif; ?>

                <?php if ( !empty($args['button_text']) ) : ?>
                    <a href="<?= esc_url($args['button_link']) ?>" class="btn"><?= esc_html($args['button_text']) ?></a>
                <?php endif; ?>

            </div>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="">
                <source src="<?php echo get_template_directory_uri() ?>/src/img/Coin-1X2.mp4' ?>" type="video/mp4">
            </video>
        </div>
    </div>
</section>
