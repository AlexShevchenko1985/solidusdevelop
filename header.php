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

                        <?php
                        the_custom_logo();
                        ?>

                </div>

                <?php
               $menu = MenuAitech::getMainMenu();
                ?>
                <?php if (!empty($menu)): ?>
                    <nav id="site-navigation" class="main-navigation desktop-only">
                        <ul class="menu">
                            <?php foreach ($menu as $level_1): ?>
                                <?php if (!empty($level_1)): ?>

                                    <?php if ($level_1['children']):  ?>

                                        <li class="has-submenu">

                                            <a href="javascript:void(0);"><?php echo $level_1['title']; ?></a>

                                            <div class="submenu-block">
                                                <div class="submenu-block-holder">
                                                    <div class="content-holder">
                                                        <div class="text-block">
                                                            <div class="heading"><?php echo $level_1['title']; ?></div>
                                                            <?php if (!empty($level_1['post_content'])): ?>
                                                                <p><?php echo $level_1['post_content']; ?></p>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="links-holder">
                                                            <ul>
                                                                <?php foreach ($level_1['children'] as $level_2):
                                                                    $subtitle = get_field('subtitle', $level_2['ID']);
                                                                    $logo = get_field('logo', $level_2['ID']);
                                                                    ?>
                                                                    <li>
                                                                        <a class="<?php echo MenuAitech::getMenuClass($level_2['url']); ?>" href="<?php echo MenuAitech::checkMenuLink($level_2['url']); ?>" target="<?php echo $level_2['target']; ?>" title="<?php echo $level_2['title']; ?>">
                                                                            <div class="image">
                                                                                <?php echo wp_get_attachment_image($logo);?>
                                                                            </div>
                                                                            <div class="content">
                                                                                <div class="title"><?php echo $level_2['title']; ?></div>
                                                                                <?php if (!empty($subtitle)): ?>
                                                                                    <p><?php echo $subtitle ?></p>
                                                                                <?php endif; ?>

                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    <?php else: ?>
                                        <li class="<?php echo MenuAitech::isCurrentPage($level_1['url'])?>">
                                            <a class="<?php echo MenuAitech::getMenuClass($level_1['url']); ?>" href="<?php echo MenuAitech::checkMenuLink($level_1['url']); ?>" target="<?php echo $level_1['target']; ?>">
                                                <?php echo $level_1['title']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                <?php endif; ?>
                            <?php endforeach; ?>


                        </ul>
                    </nav>
                <?php endif; ?>

                <div class="ajeeb">
                    <div class="certik-emblem" data-id="bbfe9657">
                        <a href="https://skynet.certik.com/projects/solidus-ai-tech?utm_source=SkyEmblem&utm_campaign=solidus-ai-tech&utm_medium=link">View project at certik.com</a>
                    </div>
                </div>
                <a href="javascript:void(0);" class="mobile-menu-btn">
                    <img class="menu-burger" src="<?php echo get_template_directory_uri() ?>/src/img/mobile-burger.svg" alt="Icon">
                    <img class="menu-cross" src="<?php echo get_template_directory_uri() ?>/src/img/menu-close.svg" alt="Icon">
                </a>
			</div>
		</div>

        <?php
        /**
         * Mobile menu block
         */
        get_template_part('template-parts/mobile-menu');
        ?>
	</header>
