<?php if (have_rows('form_section')): ?>
    <?php while (have_rows('form_section')): the_row();
        $title    = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $form     = get_sub_field('form_shortcode');
        $message  = get_sub_field('form_message');
        ?>
        <section id="section7" class="banner-section">

            <div class="hero-block">
                <?php if (!empty($title)): ?>
                    <h4><?php echo $title; ?></h4>
                <?php endif; ?>

                <div class="form-block" id="form-block">

                    <?php if (!empty($subtitle)): ?>
                        <span class="subtitle"><?php echo $subtitle; ?></span>
                    <?php endif; ?>

                    <?php if (!empty($form)): ?>
                        <?php echo do_shortcode($form)?>
                    <?php endif; ?>

                </div>

                <div class="form-block-message" id="form-block-message">

                    <?php if (!empty($message)): ?>
                        <p class="subtitle"><?php echo $message; ?></p>
                    <?php endif; ?>

                    <a href="javascript:void(0)" id="form-message-button"><?php echo __('Resend', 'aitech'); ?></a>

                </div>

            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
