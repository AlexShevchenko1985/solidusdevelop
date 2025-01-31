<?php

/**
 * Frmae section template
 */

?>
<?php if (have_rows('iframe_section')): ?>
<?php while (have_rows('iframe_section')): the_row();
$title    = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$link     = get_sub_field('link');
if(empty($link)){
    return;
}
?>
    <section class="home-numbers">
        <div class="container">
            <?php if (!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if (!empty($subtitle)): ?>
                <p><?php echo $subtitle; ?></p>
            <?php endif; ?>


            <div class="frame-area">
                <iframe
                  title="squid_widget_1"
                  width="100%"
                  height="840"
                  src="<?php echo $link; ?>"
                ></iframe>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>