<?php if( have_rows('hero_section') ): ?>
    <?php while( have_rows('hero_section') ): the_row();
        $video        = get_sub_field('video');
        $mobile_video = get_sub_field('mobile_video');
        $title        = get_sub_field('title');
        $text         = get_sub_field('text');
        $button       = get_sub_field('button');

        ?>
        <section id="section1" class="hero-inner-section">
            <?php if (!empty($video)): ?>
                <video playsinline="" autoplay="" muted="" loop="">
                    <source src="<?php echo get_template_directory_uri() . '/src/video/ai-hero-video.webm'; ?>" type="video/webm">
                    <source src="<?php echo $video['url']; ?>" type="video/mp4">
                </video>
            <?php endif; ?>

            <div class="container">
                <div class="content-block">
                    <div class="heading">
                        <h1>Solidus <span>AI</span> TECH</h1>

                        <?php if (!empty($mobile_video)): ?>
                            <video playsinline="" autoplay="" muted="" loop="" poster="">
                                <source src="<?php echo get_template_directory_uri() . '/src/video/ai-hero-video.webm'; ?>" type="video/webm">
                                <source src="<?php echo $mobile_video['url']; ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>

                        <?php if (!empty($text)): ?>
                            <?php echo $text; ?>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($button['url'])):
                        $link_url    = $button['url'];
                        $link_title  = !empty($button['title'])? $button['title'] : __('Get started');
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="btn-holder">
                            <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="btn green-btn"><?php echo $link_title; ?></a>
                            <div class="scroll-btn">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.96552 1.71259V12.7471M5.96552 12.7471L1 7.74707M5.96552 12.7471L10.931 7.74707" stroke="#BBFFEC" stroke-opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
