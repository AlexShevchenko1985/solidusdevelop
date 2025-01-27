<?php
/**
 * Template name: AITECH Labs
 */

$hero               = get_field('hero') ?? [];
$labs               = get_field('diverse_portfolio') ?? [];
$coin               = get_field('coin') ?? [];
$incubation         = get_field('incubation') ?? [];
$why_aitech_labs    = get_field('why_aitech_labs') ?? [];
$form               = get_field('form') ?? [];
$grant              = get_field('grant') ?? [];


get_header();
?>

<div class="aitech-labs">
    <?php
    /**
     * Logo slider
     */
    get_template_part('template-parts/aitech-labs/hero', null, $hero);
    ?>

    <?php
    /**
     * labs section
     */
    get_template_part('template-parts/aitech-labs/labs', null, $labs);
    ?>

    <?php
    /**
     * coin section
     */
    get_template_part('template-parts/aitech-labs/coin', null, $coin);
    ?>

    <?php
    /**
     * incubation section
     */
    get_template_part('template-parts/aitech-labs/incubation', null, $incubation);
    ?>

    <?php
    /**
     * grant section
     */
    get_template_part('template-parts/aitech-labs/grant', null, $grant);
    ?>

    <?php
    /**
     * why us section
     */
    get_template_part('template-parts/aitech-labs/why-aitech-labs', null, $why_aitech_labs);
    ?>

    <?php
    /**
     * why us section
     */
    get_template_part('template-parts/aitech-labs/form', null, $form);
    ?>

</div>

<?php
get_footer();
