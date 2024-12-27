<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aitech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aitech' ); ?></a>

	<header id="Header" class="site-header">
		<div class="container">
			<div class="header-holder">
				<div class="logo">
                    <a href="">
                        <?php
                        the_custom_logo();
                        ?>
                    </a>
                </div>

                <nav id="site-navigation" class="main-navigation desktop-only">
                    <ul class="menu">
                        <li class="active">
                            <a href="">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">Products</a>
                            <div class="submenu-block">
                                <div class="submenu-block-holder">
                                    <div class="content-holder">
                                        <div class="text-block">
                                            <div class="heading">Products</div>
                                            <p>Solidus built an 8,000 sq ft eco-friendly HPC Data Centre in Europe. $AITECH, the first deflationary AI utility token.</p>
                                        </div>
                                        <div class="links-holder">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon1.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">AI Marketplace</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon2.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">GPU Marketplace</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon3.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">AVACHAT</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon4.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">AITECH Debit Card</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon5.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">VPN Subscriptions</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <div class="image">
                                                            <img src="<?php echo get_template_directory_uri() ?>/src/img/menu-icon6.svg" alt="Icon">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title">Telegram Bot</div>
                                                            <p>Serverless Function</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="label">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/certik-logo.svg" alt="Icon">
                </div>
                <a href="javascript:void(0);" class="mobile-menu-btn">
                    <img class="menu-burger" src="<?php echo get_template_directory_uri() ?>/src/img/mobile-burger.svg" alt="Icon">
                    <img class="menu-cross" src="<?php echo get_template_directory_uri() ?>/src/img/menu-close.svg" alt="Icon">
                </a>
			</div>
		</div>
		<div class="mobile-sidenav">
            <div class="mobile-menu-holder">
                <ul>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">Products</a>
                        <div class="hidden-block">
                            <ul>
                                <li>
                                    <a href="">AI Marketplace</a>
                                    <a href="">AVACHAT</a>
                                    <a href="">GPU Marketplace</a>
                                    <a href="">AITECH Debit Card</a>
                                    <a href="">VPN Subscriptions</a>
                                    <a href="">Telegram Bot</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
	                    <a href="">Blog</a>
	                </li>
	                <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mobile-label">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/certik-logo.svg" alt="Icon">
            </div>
        </div>
	</header>
