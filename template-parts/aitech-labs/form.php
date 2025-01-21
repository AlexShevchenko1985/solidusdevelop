<?php

/**
 * AITECH Labs form template
 *
 * @var array $args
 *
 */

?>

<section class="aitech-labs-form">
    <div class="container">
        <div class="mask-holder">
            <div class="icon"></div>

            <div class="form-section-holder">
                <div class="form-holder">

                    <?php if (!empty($args['title'])): ?>
                        <h2><?php echo $args['title']; ?></h2>
                    <?php endif; ?>

                    <div class="form-block" id="form-block">

                        <?php if (!empty($args['subtitle'])): ?>
                            <p><?php echo $args['subtitle']; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($args['form'])): ?>
                            <?php echo do_shortcode('[contact-form-7 id="'. $args['form'] .'"]'); ?>
                        <?php endif; ?>

                        <?php if (!empty($args['after_form_text'])): ?>
                            <p class="after-form"><?php echo nl2br($args['after_form_text']); ?></p>
                        <?php endif; ?>

                    </div>

                    <div class="form-block-message" id="form-block-message">

                        <?php if (!empty($args['message'])): ?>
                            <p class="subtitle"><?php echo $args['message']; ?></p>
                        <?php endif; ?>

                        <div class="submit"><a href="javascript:void(0)"
                                               id="form-message-button"><?php echo __('Resend', 'aitech'); ?></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
