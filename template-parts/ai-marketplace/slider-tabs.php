<?php if( have_rows('slider_tabs') ): ?>
    <?php while( have_rows('slider_tabs') ): the_row();
        $title = get_sub_field('title');
        $tabs  = get_sub_field('tabs');
        ?>
        <section id="section4" class="slider-tabs">
            <div class="container">
                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($tabs)): ?>
                        <div class="tab-btn-list">
                            <?php foreach ($tabs as $tab_header): ?>
                                <?php if (!empty($tab_header['tab_name'])): ?>
                                    <div class="tab-btn"><?php echo $tab_header['tab_name']; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <?php if (!empty($tabs)): ?>
                    <?php foreach ($tabs as $item): ?>
                    <div class="tabs-slider">
                            <div class="swiper js-tabs-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($item['cards'] as $tab):
                                        $icon  = !empty($tab['icon'])? $tab['icon']['sizes']['thumbnail'] : get_template_directory_uri() . '/src/img/tab-icon1.svg';
                                        $image = !empty($tab['image'])? $tab['image'] : '';
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="slide-holder">
                                                <?php if (!empty($image)): ?>
                                                    <div class="bg">
                                                        <div class="media-block">
                                                            <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo !empty($image['alt'])? $image['alt'] : ''; ?>">
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="content">
                                                    <?php if (!empty($tab['title'])): ?>
                                                        <h4><?php echo $tab['title']; ?></h4>
                                                    <?php endif; ?>
                                                    <?php if (!empty($tab['text'])): ?>
                                                        <p><?php echo $tab['text']; ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php if (!empty($icon)): ?>
                                                <div class="icon">
                                                    <img src="<?php echo $icon; ?>" alt="Icon">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
