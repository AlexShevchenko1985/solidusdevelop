<?php if (have_rows('team_section')): ?>
    <?php while (have_rows('team_section')): the_row();
        $title    = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $members = ['team', 'advisors'];
        $founders = get_sub_field('founders');
        $team     = get_sub_field('team');
        $advisors = get_sub_field('advisors');
        ?>

        <section class="teams-section">
            <div class="container">
                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                    <?php endif; ?>

                    <div class="btn-list">
                        <?php if (!empty($founders)): ?>
                            <div class="tab-btn"><?php echo __('Founders'); ?></div>
                        <?php endif; ?>
                        <?php if (!empty($team)): ?>
                            <div class="tab-btn"><?php echo __('Team'); ?></div>
                        <?php endif; ?>
                        <?php if (!empty($advisors)): ?>
                            <div class="tab-btn"><?php echo __('Advisors'); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($founders)): ?>
                    <div class="tab-body founders">
                        <div class="tabs-slider">
                            <div class="swiper js-team-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($founders as $founder):
                                        $position = get_field('position', $founder->ID);
                                        $linkedin = get_field('linkedin', $founder->ID);
                                         ?>
                                        <div class="swiper-slide">
                                            <div class="slide-holder">
                                                <div class="bg">
                                                    <div class="media-block">
                                                        <?php if (has_post_thumbnail($founder->ID)): ?>
                                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id($founder->ID), 'large');?>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php if (!empty($founder->post_content)):
                                                    $post_content = apply_filters('the_content', $founder->post_content);
                                                    ?>
                                                    <div class="back-side">
                                                        <?php echo truncate_html($post_content, 1200); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="content">
                                                    <div class="descr">
                                                        <?php if (!empty($founder->post_title)): ?>
                                                            <h4><span><?php echo $founder->post_title; ?></span></h4>
                                                        <?php endif; ?>
                                                        <?php if (!empty($position)): ?>
                                                            <div class="position"><?php echo ucfirst_lowercase($position); ?></div>
                                                        <?php endif; ?>

                                                    </div>
                                                    <div class="cta-holder">
                                            <span class="cta">
                                                <?php if (!empty($linkedin)): ?>
                                                    <a href="<?php echo $linkedin; ?>" target="_blank"></a>
                                                <?php endif; ?>
                                            </span>
                                            <span class="cta toggle-btn">
                                                <a href="javascript:void(0);"></a>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                                <div class="navigation">
                                    <div class="nav-btn">
                                        <div class="swiper-button-prev js-team-button-prev">
                                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <rect x="0.5" y="-0.000976562" width="40" height="40" rx="4" fill="url(#paint0_radial_500_16776)" fill-opacity="0.2"/>
                                                    <rect x="1" y="0.499023" width="39" height="39" rx="3.5" stroke="#756897" stroke-opacity="0.3"/>
                                                    <path d="M20.4053 28.6208C20.9108 28.1164 20.9108 27.2753 20.4053 26.7701L14.9892 21.3659L29.1935 21.3659C29.9097 21.3659 30.5 20.777 30.5 20.0623C30.5 19.3477 29.9097 18.7587 29.1935 18.7587L14.9677 18.7587L20.5107 13.228C21.0162 12.7236 21.0162 11.8825 20.5107 11.3773C20.0052 10.8729 19.1622 10.8729 18.6559 11.3773L11.1323 18.8843C11.0903 18.9262 11.0483 18.9681 11.0269 19.0108C10.7108 19.2424 10.5 19.6203 10.5 20.0622C10.5 20.4828 10.6893 20.8401 11.0055 21.0923L18.5506 28.6208C19.0569 29.1251 19.8998 29.1251 20.4053 28.6208Z" fill="#7E759D"/>
                                                </g>
                                                <defs>
                                                    <radialGradient id="paint0_radial_500_16776" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(5.5 30.999) rotate(-47.5638) scale(47.4236 35.3488)">
                                                        <stop stop-color="#190B30"/>
                                                        <stop offset="1" stop-color="#01020A"/>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="swiper-pagination pagination-team"></div>
                                        <div class="swiper-button-next js-team-button-next">
                                            <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="40.5" y="39.999" width="40" height="40" rx="4" transform="rotate(-180 40.5 39.999)" fill="url(#paint0_radial_500_16779)" fill-opacity="0.2"/>
                                                <rect x="40" y="39.499" width="39" height="39" rx="3.5" transform="rotate(-180 40 39.499)" stroke="#756897" stroke-opacity="0.3"/>
                                                <path d="M20.5947 11.3773C20.0892 11.8816 20.0892 12.7228 20.5947 13.228L26.0108 18.6321L11.8065 18.6321C11.0903 18.6321 10.5 19.2211 10.5 19.9357C10.5 20.6504 11.0903 21.2393 11.8065 21.2393L26.0323 21.2393L20.4893 26.7701C19.9838 27.2744 19.9838 28.1156 20.4893 28.6208C20.9948 29.1251 21.8378 29.1251 22.3441 28.6208L29.8677 21.1137C29.9097 21.0719 29.9517 21.03 29.9731 20.9872C30.2892 20.7556 30.5 20.3778 30.5 19.9358C30.5 19.5152 30.3106 19.1579 29.9945 18.9057L22.4494 11.3773C21.9431 10.8729 21.1002 10.8729 20.5947 11.3773Z" fill="#7E759D"/>
                                                <defs>
                                                    <radialGradient id="paint0_radial_500_16779" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(45.5 70.999) rotate(-47.5638) scale(47.4236 35.3488)">
                                                        <stop stop-color="#190B30"/>
                                                        <stop offset="1" stop-color="#01020A"/>
                                                    </radialGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php
                foreach ($members as $member):
                    if (!empty($member)): ?>
                        <div class="tab-body">
                            <div class="tabs-slider">
                                <div class="swiper js-team-slider">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $team     = get_sub_field($member);
                                        foreach ($team as $team_item):
                                            $position = get_field('position', $team_item->ID);
                                            $linkedin = get_field('linkedin', $team_item->ID);
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="slide-holder">
                                                    <div class="bg">
                                                        <div class="media-block">
                                                            <?php if (has_post_thumbnail($team_item->ID)): ?>
                                                                <?php echo wp_get_attachment_image(get_post_thumbnail_id($team_item->ID), 'large'); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <?php if (!empty($team_item->post_content)):
                                                        $post_content = apply_filters('the_content', $team_item->post_content);
                                                        ?>
                                                        <div class="back-side">
                                                            <?php echo truncate_html($post_content, 600); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="content">
                                                        <div class="descr">
                                                            <?php if (!empty($team_item->post_title)): ?>
                                                                <h4><span><?php echo $team_item->post_title; ?></span>
                                                                </h4>
                                                            <?php endif; ?>
                                                            <?php if (!empty($position)): ?>
                                                                <div class="position"><?php echo ucfirst_lowercase($position); ?></div>
                                                            <?php endif; ?>

                                                        </div>
                                                        <div class="cta-holder">
                                                <span class="cta">
                                                    <?php if (!empty($linkedin)): ?>
                                                        <a href="<?php echo $linkedin; ?>" target="_blank"></a>
                                                    <?php endif; ?>
                                                </span>
                                                            <span class="cta toggle-btn">
                                                <a href="javascript:void(0);"></a>
                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="navigation">
                                        <div class="nav-btn">
                                            <div class="swiper-button-prev js-team-button-prev">
                                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <rect x="0.5" y="-0.000976562" width="40" height="40" rx="4"
                                                              fill="url(#paint0_radial_500_16776)" fill-opacity="0.2"/>
                                                        <rect x="1" y="0.499023" width="39" height="39" rx="3.5"
                                                              stroke="#756897" stroke-opacity="0.3"/>
                                                        <path d="M20.4053 28.6208C20.9108 28.1164 20.9108 27.2753 20.4053 26.7701L14.9892 21.3659L29.1935 21.3659C29.9097 21.3659 30.5 20.777 30.5 20.0623C30.5 19.3477 29.9097 18.7587 29.1935 18.7587L14.9677 18.7587L20.5107 13.228C21.0162 12.7236 21.0162 11.8825 20.5107 11.3773C20.0052 10.8729 19.1622 10.8729 18.6559 11.3773L11.1323 18.8843C11.0903 18.9262 11.0483 18.9681 11.0269 19.0108C10.7108 19.2424 10.5 19.6203 10.5 20.0622C10.5 20.4828 10.6893 20.8401 11.0055 21.0923L18.5506 28.6208C19.0569 29.1251 19.8998 29.1251 20.4053 28.6208Z"
                                                              fill="#7E759D"/>
                                                    </g>
                                                    <defs>
                                                        <radialGradient id="paint0_radial_500_16776" cx="0" cy="0" r="1"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="translate(5.5 30.999) rotate(-47.5638) scale(47.4236 35.3488)">
                                                            <stop stop-color="#190B30"/>
                                                            <stop offset="1" stop-color="#01020A"/>
                                                        </radialGradient>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="swiper-pagination pagination-team"></div>
                                            <div class="swiper-button-next js-team-button-next">
                                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="40.5" y="39.999" width="40" height="40" rx="4"
                                                          transform="rotate(-180 40.5 39.999)"
                                                          fill="url(#paint0_radial_500_16779)" fill-opacity="0.2"/>
                                                    <rect x="40" y="39.499" width="39" height="39" rx="3.5"
                                                          transform="rotate(-180 40 39.499)" stroke="#756897"
                                                          stroke-opacity="0.3"/>
                                                    <path d="M20.5947 11.3773C20.0892 11.8816 20.0892 12.7228 20.5947 13.228L26.0108 18.6321L11.8065 18.6321C11.0903 18.6321 10.5 19.2211 10.5 19.9357C10.5 20.6504 11.0903 21.2393 11.8065 21.2393L26.0323 21.2393L20.4893 26.7701C19.9838 27.2744 19.9838 28.1156 20.4893 28.6208C20.9948 29.1251 21.8378 29.1251 22.3441 28.6208L29.8677 21.1137C29.9097 21.0719 29.9517 21.03 29.9731 20.9872C30.2892 20.7556 30.5 20.3778 30.5 19.9358C30.5 19.5152 30.3106 19.1579 29.9945 18.9057L22.4494 11.3773C21.9431 10.8729 21.1002 10.8729 20.5947 11.3773Z"
                                                          fill="#7E759D"/>
                                                    <defs>
                                                        <radialGradient id="paint0_radial_500_16779" cx="0" cy="0" r="1"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="translate(45.5 70.999) rotate(-47.5638) scale(47.4236 35.3488)">
                                                            <stop stop-color="#190B30"/>
                                                            <stop offset="1" stop-color="#01020A"/>
                                                        </radialGradient>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach;
                ?>

                </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
