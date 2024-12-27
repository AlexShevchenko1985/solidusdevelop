<?php
get_header();

$numbers_section = get_field('numbers_section');
$card_section = get_field('card_section');
$chosen_by = get_field('chosen_by');
$roadmap = get_field('roadmap');
$ai_tech = get_field('ai_tech');
$aitech_labs = get_field('aitech_labs');
$coin_section = get_field('coin_section');

?>

<div class="home-wrapper">

    <?php
    /**
     * Logo slider
     */
    get_template_part('template-parts/home/logo-slider', null, $chosen_by);
    ?>

    <?php
    /**
     * Product block
     */
    get_template_part('template-parts/home/powerful-product');
    ?>

    <?php
    /**
     * Data Center block
     */
    get_template_part('template-parts/home/data-center');
    ?>

    <?php
    /**
     * card section
     *
     */
    get_template_part('template-parts/home/card', null, $card_section);
    ?>

    <?php
    /**
     * numbers section
     *
     */
    get_template_part('template-parts/home/numbers', null, $numbers_section);
    ?>

    <?php
    /**
     * team block
     */
    get_template_part('template-parts/home/team');
    ?>

    <?php
    /**
     * partners block
     */
    get_template_part('template-parts/home/partners');
    ?>

    <?php
    /**
     * roadmap tech section
     */
    get_template_part('template-parts/home/roadmap', null, $roadmap);
    ?>

    <?php
    /**
     * ai tech section
     */
    get_template_part('template-parts/home/ai-tech', null, $ai_tech);
    ?>

    <?php
    /**
     * labs section
     */
    get_template_part('template-parts/home/labs', null, $aitech_labs);
    ?>

    <?php
    /**
     * coin section
     */
    get_template_part('template-parts/home/coin', null, $coin_section);
    ?>

    <?php
    /**
     * blog section
     */
    get_template_part('template-parts/home/blog');
    ?>

    <?php
    /**
     * Form block
     */
    get_template_part('template-parts/home/form');
    ?>

</div>

<?php
get_footer();
