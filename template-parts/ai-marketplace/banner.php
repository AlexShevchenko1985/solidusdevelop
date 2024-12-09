<?php if (have_rows('banner_section')): ?>
    <?php while (have_rows('banner_section')): the_row();
        $title = get_sub_field('title');
        $video = get_sub_field('video');
        $button = get_sub_field('link');
        ?>
        <section id="section7" class="banner-section">
            <?php if (!empty($video)): ?>
                <div class="video-bg">
                    <video playsinline autoplay muted loop poster="">
                        <source src="<?php echo $video['url']; ?>" type="video/webm">
                    </video>
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
