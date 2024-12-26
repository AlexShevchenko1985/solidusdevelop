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

                <?php if ( !empty( $args['value_'.$i] ) ) : ?>
                    <div class="value">
                        <?= esc_html($args['value_'.$i]) ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php endfor; ?>

        </div>
    </div>
</section>
