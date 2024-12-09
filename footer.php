<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aitech
 */

$discord = get_field('discord', 'option');
$telegram = get_field('telegram', 'option');
$x = get_field('x', 'option');

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-logo">
                <?php the_custom_logo(); ?>
                <p>© 2024 SOLIDUS AI TECH LIMITED, ALL RIGHTS RESERVED</p>
            </div>
            <div class="footer-navbar">
                <?php if ( has_nav_menu( 'footer_menu_1' ) ) : ?>
                <div class="navbar-section">
                    <b>Company</b>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu_1',
                        'menu_class'     => 'footer-menu-1',
                    ) );
                    ?>
                </div>
                <?php endif; ?>

                <?php if ( has_nav_menu( 'footer_menu_1' ) ) : ?>
                    <div class="navbar-section">
                        <b>Resources</b>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer_menu_2',
                            'menu_class'     => 'footer-menu-2',
                        ) );
                        ?>
                    </div>
                <?php endif; ?>

                <div class="navbar-section">
                    <b class="desktop-only">Socials</b>
                    <div class="socials">
                        <?php if ( !empty( $discord ) ) : ?>
                        <a href="<?php echo esc_url($discord) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/tg.svg' ?>" alt="Discord"></a>
                        <?php endif; ?>

                        <?php if ( !empty( $telegram ) ) : ?>
                        <a href="<?php echo esc_url($telegram) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/discord.svg' ?>" alt="Telegram"></a>
                        <?php endif; ?>

                        <?php if ( !empty( $x ) ) : ?>
                        <a href="<?php echo esc_url($x) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/x.svg' ?>" alt="X"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
