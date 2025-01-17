<?php

/**
 * Numbers section template
 *
 * @var array $args
 *
 */

?>

<section class="home-numbers">
    <div class="container">
        <h2><?= $args['heading'] ?></h2>
        <p><?= esc_html( $args['subheading'] ) ?></p>

        <div class="home-numbers__items">

            <?php for ($i = 1; $i <= 6; $i++) : ?>

            <div class="home-numbers__item">
                <div>
                    <?php if ( !empty( $args['company_'.$i] ) ) : ?>
                    <div class="company">
                        <?= esc_html($args['company_'.$i] ) ?>
                    </div>
                    <?php endif; ?>

                    <?php if ( !empty( $args['metric_'.$i] ) ) : ?>
                        <div class="metric"><?= esc_html($args['metric_'.$i]) ?></div>
                    <?php endif; ?>
                </div>

                <?php if ( !empty( $args['value_'.$i] ) ) :
                    $step = !empty($args['step_'.$i])? $args['step_'.$i] : 1;
                    ?>
                    <div class="value">
                        <span class="number-counter number" data-step="<?php echo $step; ?>" data-number="<?php echo esc_html($args['value_'.$i]); ?>"><?php echo esc_html($args['value_'.$i]); ?></span>
                        <?php if (!empty($args['sign_'.$i])): ?>
                            <span class="number"><?php echo $args['sign_'.$i]; ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php endfor; ?>

        </div>
    </div>
</section>
