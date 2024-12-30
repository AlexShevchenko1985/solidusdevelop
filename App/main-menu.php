<?php

$menu_tree = Menu::getMainMenu();
echo '<pre>';
print_r($menu_tree);
echo '</pre>';

if(empty($menu_tree)){
    return;
}
?>
<div class="main-menu">
    <ul>

        <?php foreach ($menu_tree as $level_1): ?>
            <?php if (!empty($level_1)): ?>
                <li>

                    <a class="<?php echo Menu::getMenuClass($level_1['url']); ?>" href="<?php echo Menu::checkMenuLink($level_1['url']); ?>" target="<?php echo $level_1['target']; ?>" title="<?php echo $level_1['title']; ?>">
                        <?php echo $level_1['title']; ?>
                    </a>

                    <?php if ($level_1['children']): ?>
                        <div class="submenu-block">

                        <div class="container">
                            <div class="submenu-block-holder">

                                <div class="heading"><?php echo $level_1['title']; ?></div>

                                <ul class="submenu">
                                    <?php foreach ($level_1['children'] as $level_2): ?>
                                        <li class="submenu-l2">
                                            <a class="<?php echo Menu::getMenuClass($level_2['url']); ?>" href="<?php echo Menu::checkMenuLink($level_2['url']); ?>" target="<?php echo $level_2['target']; ?>" title="<?php echo $level_2['title']; ?>">
                                                <?php echo $level_2['title']; ?>
                                            </a>

                                            <?php if ($level_2['children']): ?>
                                                <ul class="submenu-child">
                                                    <?php foreach ($level_2['children'] as $level_3): ?>
                                                        <li>
                                                            <a class="<?php echo Menu::getMenuClass($level_3['url']); ?>" href="<?php echo Menu::checkMenuLink($level_3['url']); ?>" target="<?php echo $level_3['target']; ?>" title="<?php echo $level_3['title']; ?>">
                                                                <?php echo $level_3['title']; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>

                                    </li>
                                    <?php endforeach; ?>
                                </ul>

                                <?php
                                /**
                                 * Header Related Post
                                 */
                                $headerRelatedPost = Menu::getHeaderRelatedPost($level_1['ID']);
                                if (!empty($headerRelatedPost)): ?>
                                    <a href="<?php echo get_permalink($headerRelatedPost->ID); ?>" title="<?php echo $headerRelatedPost->post_title; ?>" >
                                        <div class="recent-post">

                                                <div class="image">
                                                    <?php
                                                    $menu_attachment_image = wp_get_attachment_image(get_post_thumbnail_id($headerRelatedPost->ID), 'medium_large');
                                                    if (!empty($menu_attachment_image)):
                                                        echo $menu_attachment_image;
                                                    else: ?>
                                                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/redesign-img/recent-post-img.webp"
                                                             alt="Post"/>
                                                    <?php endif; ?>


                                                    <div class="title">
                                                       <?php echo $headerRelatedPost->post_title; ?>
                                                    </div>
                                                </div>
                                            <div class="description">
                                                <?php if (!empty($headerRelatedPost->post_content)): ?>
                                                    <p><?php echo Helper::doExcerpt( $headerRelatedPost->post_content, 254); ?></p>
                                                <?php endif; ?>
                                                <div class="cta-holder">
                                                    <p class="more-btn"><?php echo __('Read more', 'bis'); ?></p>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php
                                /**
                                 * Secondary menu
                                 */
                                $locations   = !empty(get_nav_menu_locations()) ? get_nav_menu_locations()['header_secondary'] : null;
                                if(null !== $locations){
                                    Menu::getHeaderSecondaryMenu();
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

                </li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
</div>
