<?php if (have_rows('products_section')): ?>
    <?php while (have_rows('products_section')): the_row();
        $title = get_sub_field('title');
        $cards = get_sub_field('cards');
        ?>
        <section class="powerful-products">
            <div class="container">
                <?php if (!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>

                <div class="powerful-products-holder">
                    <?php foreach ($cards as $card):

                        ?>
                        <div class="item">
                            <?php if (!empty($card['icon'])): ?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($card['icon']); ?>
                                </div>
                            <?php endif; ?>

                            <div class="bg-block">

                                <?php if (!empty($card['media'])):
                                    $media = $card['media'];
                                    $mobile_image = $card['mobile_image'];
                                    ?>

                                    <?php if (wp_is_mobile()): ?>
                                        <?php if (!empty($mobile_image)): ?>
                                            <div class="media">
                                                <?php echo wp_get_attachment_image($mobile_image, 'large'); ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>


                                    <?php if (!empty($media['url'])): ?>
                                        <div class="media">
                                            <video playsinline muted loop>
                                                <source src="<?php echo !empty($media['url']) ? $media['url'] : ''; ?>"
                                                        type="video/mp4">
                                            </video>
                                        </div>
                                    <?php endif; ?>

                                <?php endif; ?>


                                <div class="content">
                                    <?php if (!empty($card['topic'])): ?>
                                        <div class="label"><span><?php echo $card['topic']; ?></span></div>
                                    <?php endif; ?>

                                    <?php if (!empty($card['title'])): ?>
                                        <h3><?php echo $card['title']; ?></h3>
                                    <?php endif; ?>

                                    <?php if (!empty($card['text'])): ?>
                                        <?php echo $card['text']; ?>
                                    <?php endif; ?>

                                    <?php
                                    if (!empty($card['link'])):
                                        $button = $card['link'];
                                        $link_url = $button['url'];
                                        $link_title = !empty($button['title']) ? $button['title'] : __('Get started');
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                        <div class="btn-holder">
                                            <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>"
                                               class="primary-btn"><span><?php echo $link_title; ?></span></a>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>