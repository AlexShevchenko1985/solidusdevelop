<?php

/**
 * Card section template
 *
 * @var array $args
 *
 */
if(empty($args)){
    return;
}
?>

<section class="home-card">
    <div class="container">
        <div class="home-card__inner">

            <div class="home-card__inner-item">
                <div class="corner-element">
                    <img src="<?= get_template_directory_uri() . '/build/img/aitech-debit-card.svg' ?>" alt="AITECH Debit Card">
                </div>
                <div class="card-wrap">
                    <h3><?php echo $args['card_1_content']['title']; ?></h3>
                    <div class="card-subtitle"><?= nl2br( $args['card_1_content']['subtitle'] ) ?></div>
                    <div class="card-content">
                        <?= $args['card_1_content']['content'] ?>
                        <a href="<?= esc_url($args['card_1_content']['button_link']) ?>" class="btn"><?= esc_html( $args['card_1_content']['button_text'] ) ?></a>
                    </div>
                </div>
            </div>

            <div class="home-card__inner-item">
                <div class="corner-element">
                    <img src="<?= get_template_directory_uri() . '/build/img/ai-assistant.svg' ?>" alt="AI assistant">
                </div>
                <div class="card-wrap">
                    <h3><?php echo $args['card_2_content']['title']; ?></h3>

                    <div class="card-content">
                        <?= $args['card_2_content']['content'] ?>
                        <a href="<?= esc_url($args['card_2_content']['button_link']) ?>" class="btn"><?= esc_html( $args['card_2_content']['button_text'] ) ?></a>
                    </div>
                </div>
            </div>

            <div class="home-card__inner-item">
                <div class="corner-element">
                    <img src="<?= get_template_directory_uri() . '/build/img/vpn-subscriptions.svg' ?>" alt="VPN subscriptions">
                </div>
                <div class="card-wrap">
                    <h3><?php echo $args['card_3_content']['title']; ?></h3>
                    <div class="card-subtitle">
                        <?= nl2br($args['card_3_content']['subtitle']) ?>
                    </div>
                    <div class="card-content">
                        <div class="d-flex">
                            <div class="content-item">
                                <div class="value">
                                    <?= esc_html($args['card_3_content']['info_item_1']) ?>
                                </div>
                                <div class="description">
                                    <?= esc_html($args['card_3_content']['info_item_1_description']) ?>
                                </div>
                            </div>
                            <div class="content-item">
                                <div class="value">
                                    <?= esc_html($args['card_3_content']['info_item_2']) ?>
                                </div>
                                <div class="description">
                                    <?= esc_html($args['card_3_content']['info_item_2_description']) ?>
                                </div>
                            </div>
                        </div>
                        <a href="<?= esc_url($args['card_3_content']['button_link']) ?>" class="btn"><?= esc_html( $args['card_3_content']['button_text'] ) ?></a>
                    </div>
                </div>
            </div>

            <div class="home-card__inner-item">
                <div class="corner-element">
                    <img src="<?= get_template_directory_uri() . '/build/img/telegram-bot.svg' ?>" alt="Telegram bot">
                </div>
                <div class="card-wrap">
                    <h3><?php echo $args['card_4_content']['title']; ?></h3>

                    <div class="card-content">
                        <?= $args['card_4_content']['content'] ?>
                        <a href="<?= esc_url($args['card_4_content']['button_link']) ?>" class="btn"><?= esc_html( $args['card_4_content']['button_text'] ) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
