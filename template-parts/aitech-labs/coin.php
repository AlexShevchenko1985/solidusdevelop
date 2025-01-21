<?php

/**
 * Roadmap section template
 *
 * @var array $args
 *
 */

?>

<section class="aitech-labs-coin">
    <div class="container">
        <div class="content-wrap">
            <?php if ( !empty($args['title']) ) : ?>
                <h2><?= nl2br($args['title']) ?></h2>
            <?php endif; ?>
            <div class="content">
                <?php if ( !empty($args['description']) ) : ?>
                    <p><?= esc_html($args['description']) ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="">
                <source src="<?php echo get_template_directory_uri() . '/build/video/Coin-1X.mp4' ?>" type="video/webm">
            </video>
        </div>
    </div>
</section>
