<?php

/**
 * Incubation section template
 *
 * @var array $args
 *
 */

?>

<section class="section-unleash">
    <div class="container">
        <h2><?php echo nl2br($args['title']) ?></h2>
        <div class="img-wrap">
            <img src="<?php echo esc_url( $args['image'] ) ?>" alt="">
        </div>
        <div class="content-wrap">
            <img src="<?php echo get_template_directory_uri() . '/build/img/solidus-logo2.svg' ?>" alt="Solidus">
            <div class="content-item">
                <div class="content-item__inner">
                    <h4><?php echo esc_html( $args['title_1'] ) ?></h4>
                    <p><?php echo esc_html( $args['content_1'] ) ?></p>
                </div>
            </div>
            <div class="content-item">
                <div class="content-item__inner">
                    <h4><?php echo esc_html( $args['title_2'] ) ?></h4>
                    <p><?php echo esc_html( $args['content_2'] ) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
