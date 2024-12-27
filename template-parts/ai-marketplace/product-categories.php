<?php if( have_rows('product_categories_section') ): ?>
    <?php while( have_rows('product_categories_section') ): the_row();
        $title = get_sub_field('title');
        $cards = get_sub_field('cards');
        ?>
        <section id="section2" class="product-categories">
            <div class="container">
                <?php if (!empty($title)): ?>
                    <div class="heading">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>

                <div class="grid-slider">
                    <div class="swiper js-grid-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($cards as $card):
                                $icon  = !empty($card['icon'])? $card['icon']['sizes']['thumbnail'] : get_template_directory_uri() . '/src/img/grid-icon1.svg';
                                $video = !empty($card['video'])? $card['video'] : '';
                                $title = !empty($card['title'])? $card['title'] : '';
                                $text  = !empty($card['text'])? $card['text'] : '';
                                ?>
                                <div class="swiper-slide">
                                    <div class="icon">
                                        <img src="<?php echo $icon; ?>" alt="Icon">
                                    </div>
                                    <div class="slide-holder">
                                        <?php if (!empty($video)): ?>
                                            <div class="bg">
                                                <div class="media-block">
                                                    <video playsinline muted loop >
                                                        <source src="<?php echo $video['url']; ?>" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="bg">
                                                <div class="media-block">
                                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/ex-img.webp" alt="Icon">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="content">
                                            <?php if (!empty($title)): ?>
                                                <h4><?php echo $title; ?></h4>
                                            <?php endif; ?>
                                            <?php if (!empty($text)): ?>
                                                <p><?php echo $text; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
