<?php if( have_rows('collaboration_section') ): ?>
    <?php while( have_rows('collaboration_section') ): the_row();
        $title      = get_sub_field('title');
        $subtitle   = get_sub_field('subtitle');
        $main_title = get_sub_field('main_title');
        $button     = get_sub_field('link');
        $cards      = get_sub_field('cards');
        ?>
        <section id="section5" class="collaboration">
            <div class="container">
                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                </div>
                <div class="content">
                    <div class="video">
                        <div class="head-video">
                            <video playsinline autoplay muted loop >
                                <source src="<?php echo get_template_directory_uri() ?>/src/video/Sphere-1x_HEVC.mp4" type="video/mp4">
                                <source src="<?php echo get_template_directory_uri() ?>/src/video/sphere-1x.webm" type="video/webm">
                            </video>
                            <?php if (!empty($main_title)): ?>
                                <div class="ball"><span><?php echo $main_title; ?></span></div>
                            <?php endif; ?>
                        </div>
                        <div class="body-video">
                            <video playsinline autoplay muted loop >
                                <source src="<?php echo get_template_directory_uri() ?>/src/video/Body_1x_HEVC.mp4" type="video/mp4">
                                <source src="<?php echo get_template_directory_uri() ?>/src/video/body-1x.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                    <?php if (!empty($cards)): ?>
                        <div class="content-items">
                            <?php foreach ($cards as $card):
                                $icon        = !empty($card['icon'])? $card['icon']['sizes']['thumbnail'] :  get_template_directory_uri() . '/src/img/com-icon1.svg';
                                $title       = !empty($card['title'])? $card['title'] : '';
                                $text        = !empty($card['texr'])? $card['texr'] : '';
                                $coming_soon = !empty($card['coming_soon'])? 'coming-soon' : '';
                            ?>
                                <div class="item">
                                    <div class="item-holder">
                                        <?php if (!empty($icon)): ?>
                                            <div class="icon">
                                                <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                                            </div>
                                        <?php endif; ?>

                                        <div class="content-holder">
                                            <div class="bg"></div>
                                            <div class="text-content <?php echo $coming_soon; ?>">
                                                <?php if (!empty($title)): ?>
                                                    <h4><?php echo $title; ?></h4>
                                                <?php endif; ?>
                                                <?php if (!empty($text)): ?>
                                                    <p><?php echo $text; ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
                <?php
                if($button):
                    $link_url    = $button['url'];
                    $link_title  = !empty($button['title'])? $button['title'] : __('Get started');
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <div class="btn-holder">
                        <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="btn green-btn"><?php echo $link_title; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
