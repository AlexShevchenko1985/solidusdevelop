<?php if (have_rows('banner_section')): ?>
    <?php while (have_rows('banner_section')): the_row();
        $title = get_sub_field('title');
        $video = get_sub_field('video');
        $button = get_sub_field('link');
        $video_mp4 = get_sub_field('video_mp4');
        ?>
        <section id="section7" class="banner-section">
            <?php if (!empty($video)): ?>
                <div class="video-bg">
                    <?php if ('image' === $video['type']): ?>
                        <div class="media">
                            <?php echo wp_get_attachment_image($video['ID'], 'hd-size'); ?>
                        </div>
                    <?php else: ?>
                        <video playsinline="" autoplay="" muted="" loop="" poster="">
                            <?php if (!empty($video_mp4)): ?>
                                <source src="<?php echo $video_mp4; ?>" type="video/mp4">
                            <?php endif; ?>
                            <source src="<?php echo $video['url']; ?>" type="video/webm">
                        </video>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="heading-holder">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($button['url'])):
                        $link_url = $button['url'];
                        $link_title = !empty($button['title']) ? $button['title'] : __('Get started');
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="btn-holder">
                            <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>"
                               class="btn green-btn"><?php echo $link_title; ?></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
