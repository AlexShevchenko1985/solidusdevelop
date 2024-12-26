<?php
/**
 * Coinmarketcap widget template
 * see here: https://coinmarketcap.com/widget/ticker/
 *
 * @var array $args
 */
?>

<div class="coinmarketcap-currency-widget swiper-slide"
     data-currencyid="<?= esc_attr($args['coin_id']); ?>"
     data-base="USD"
     data-secondary=""
     data-ticker="false"
     data-rank="true"
     data-marketcap="true"
     data-volume="true"
     data-statsticker="false"
     data-stats="USD">
</div>
