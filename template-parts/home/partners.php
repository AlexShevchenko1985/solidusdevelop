<?php if (have_rows('partners_sectin')): ?>
    <?php while (have_rows('partners_sectin')): the_row();
        $title    = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $tabs     = get_sub_field('tabs');
        ?>
        <section class="partners-section">
            <div class="container">
                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><span><?php echo $title; ?></span></h2>
                    <?php endif; ?>

                    <?php if (!empty($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($tabs)): ?>
                        <div class="btn-list">
                            <?php foreach ($tabs as $tab): ?>
                                <?php if (!empty($tab['tab_title'])): ?>
                                    <div class="tab-btn"><?php echo $tab['tab_title']; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
                <?php foreach ($tabs as $tab):
                    if(empty($tab['cards'])){
                        continue;
                    }
                    ?>
                    <div class="tab-body">
                        <div class="logos-holder">
                            <?php foreach ($tab['cards'] as $key => $card):
                                $front_part_link = (!empty($card['front_part']['link']))? $card['front_part']['link'] : 'javascript:void(0)';
                                $back_part_link = (!empty($card['back_part']['link']))? $card['back_part']['link'] : 'javascript:void(0)';
                                $front_part_image = (!empty($card['front_part']['image']))? $card['front_part']['image'] : '';
                                $back_part_image = (!empty($card['back_part']['image']))? $card['back_part']['image'] : '';
                                ?>
                                <div class="logo-item front-side-active" style="--i: <?php echo $key + 1; ?>;">
                                    <div class="logo-holder">
                                        <div class="front">
                                            <a href="<?php echo $front_part_link; ?>" target="_blank">
                                                <?php echo wp_get_attachment_image($front_part_image, 'medium'); ?>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo $back_part_link; ?>" target="_blank">
                                                <?php echo wp_get_attachment_image($back_part_image, 'medium'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
