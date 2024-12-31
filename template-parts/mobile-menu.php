<?php
$menu = MenuAitech::getMainMenu('mobile_menu');
if (!empty($menu)): ?>
    <div class="mobile-sidenav">
        <div class="mobile-menu-holder">
            <ul>
                <?php foreach ($menu as $level_1): ?>
                    <?php if (!empty($level_1)): ?>

                        <?php if (!empty($level_1['children'])):  ?>

                            <li class="has-submenu">

                                <a href="javascript:void(0);"><?php echo $level_1['title']; ?></a>

                                <div class="hidden-block">
                                    <ul>
                                        <li>
                                            <?php foreach ($level_1['children'] as $level_2):  ?>
                                                <a class="<?php echo MenuAitech::getMenuClass($level_2['url']); ?>" href="<?php echo MenuAitech::checkMenuLink($level_2['url']); ?>" target="<?php echo $level_2['target']; ?>" title="<?php echo $level_2['title']; ?>">
                                                    <?php echo $level_2['title']; ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        <?php else: ?>

                            <li>
                                <a class="<?php echo MenuAitech::getMenuClass($level_1['url']); ?>" href="<?php echo MenuAitech::checkMenuLink($level_1['url']); ?>" target="<?php echo $level_1['target']; ?>">
                                    <?php echo $level_1['title']; ?>
                                </a>
                            </li>

                        <?php endif; ?>

                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>
        </div>
        <div class="mobile-label">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/certik-logo.svg" alt="Icon">
        </div>
    </div>
<?php endif;