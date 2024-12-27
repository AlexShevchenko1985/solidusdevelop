<?php if( have_rows('video_section') ): ?>
    <?php while( have_rows('video_section') ): the_row();
        $poster = !empty(get_sub_field('poster'))? get_sub_field('poster')['sizes']['hd-size'] : get_template_directory_uri() . '/src/img/video-poster.webp' ;
        $video  = get_sub_field('video');
        ?>
        <section id="section3" class="video-block section-bring">
            <div class="container">
                <div class="video-holder video-container">
                    <?php if (!empty($video)): ?>
                        <video id="video" poster="<?php echo $poster; ?>" >
                            <source src="<?php echo $video['url']; ?>" type="video/mp4">
                        </video>
                        <button id="play-btn" class="play-button"></button>
                    <?php endif; ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
