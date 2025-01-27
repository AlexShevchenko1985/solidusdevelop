<?php if (have_rows('form_section')): ?>
    <?php while (have_rows('form_section')): the_row();
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $form = get_sub_field('form_shortcode');
        $message = get_sub_field('form_message');
        ?>

        <section class="solutions-form" id="solutions-form">
            <div class="container">
                <div class="mask-holder">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/mail-icon.svg" alt="Icon">
                    </div>
                    <div class="form-section-holder">
                        <div class="form-holder">

                            <?php if (!empty($title)): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>


                            <div class="form-block" id="form-block">

                                <?php if (!empty($subtitle)): ?>
                                    <p><?php echo $subtitle; ?></p>
                                <?php endif; ?>

                                <?php if (!empty($form)): ?>
                                    <?php echo do_shortcode($form) ?>
                                <?php endif; ?>

                            </div>

                            <div class="form-block-message" id="form-block-message">

                                <?php if (!empty($message)): ?>
                                    <p class="subtitle"><?php echo $message; ?></p>
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
    <?php endwhile; ?>
<?php endif; ?>
