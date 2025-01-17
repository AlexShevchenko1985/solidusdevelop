<?php

/**
 * AI tech section template
 *
 * @var array $args
 *
 */

?>

<section class="section-ai-tech">
    <div class="container">
        <div class="content">
            <div class="item">
                <?php if ( !empty($args['section_1']['title']) ) : ?>
                    <h3><img src="<?php echo get_template_directory_uri() . '/build/img/aitech-pad.svg' ?>" alt="AITECH PAD"><?= esc_html($args['section_1']['title']) ?></h3>
                <?php endif; ?>

                <?php if ( !empty($args['section_1']['description']) ) : ?>
                <p><?= esc_html($args['section_1']['description']) ?></p>
                <?php endif; ?>

                <?php if ( !empty($args['section_1']['button_text']) ) : ?>
                <a href="<?= $args['section_1']['button_link'] ?>" class="primary-btn"><span><?= esc_html($args['section_1']['button_text']) ?></span></a>
                <?php endif; ?>

                <div class="bg-holder">
                    <?php if ( !empty($args['section_1']['img']) ) : ?>
                    <img class="item-img"  src="<?= esc_url($args['section_1']['img']) ?>" alt="GPU virtualization">
                    <?php endif; ?>
                </div>
            </div>
            <div class="item">

                <?php if ( !empty($args['section_2']['title']) ) : ?>
                    <h3><img src="<?php echo get_template_directory_uri() . '/build/img/vision-makers.svg' ?>" alt="AITECH PAD"><?= esc_html($args['section_2']['title']) ?></h3>
                <?php endif; ?>

                <?php if ( !empty($args['section_2']['description']) ) : ?>
                    <p><?= esc_html($args['section_2']['description']) ?></p>
                <?php endif; ?>

                <?php if ( !empty($args['section_2']['button_text']) ) : ?>
                    <a href="<?= $args['section_2']['button_link'] ?>" class="primary-btn"><span><?= esc_html($args['section_2']['button_text']) ?></span></a>
                <?php endif; ?>

                <div class="bg-holder">
                    <?php if ( !empty($args['section_2']['img']) ) : ?>
                        <img class="item-img"  src="<?= esc_url($args['section_2']['img']) ?>" alt="GPU virtualization">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
