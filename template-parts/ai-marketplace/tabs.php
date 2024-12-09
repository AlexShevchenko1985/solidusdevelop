<?php if( have_rows('tabs_section') ): ?>
    <?php while( have_rows('tabs_section') ): the_row();
        $title    = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $tabs     = get_sub_field('tabs');
        $video    = get_sub_field('video');
        echo '<pre>';
        print_r($video);
        echo '</pre>';
        ?>
        <section id="section6" class="two-column-tabs">
            <div class="container">

                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                </div>

                <?php if (!empty($tabs)): ?>


                <div class="tabs-holder">
                    <div class="content-column">
                        <?php foreach ($tabs as $tab):
                            $title = !empty($tab['title'])? $tab['title'] : '';
                            $text  = !empty($tab['text'])? $tab['text'] : '';
                            ?>
                            <div class="tab-item">

                                <?php if (!empty($video)): ?>
                                    <div class="mobile-only">
                                        <video playsinline autoplay muted loop poster="">
                                            <source src="<?php echo $video; ?>" type="video/webm">
                                        </video>
                                    </div>
                                <?php endif; ?>

                                <div class="content">
                                    <?php if (!empty($title)): ?>
                                        <h4><?php echo $title; ?></h4>
                                    <?php endif; ?>
                                    <?php if (!empty($text)): ?>
                                        <p><?php echo $text?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php foreach ($tabs as $video_item): ?>
                        <?php if (!empty($video)): ?>
                            <div class="video-column">
                                <video playsinline autoplay muted loop poster="">
                                    <source src="<?php echo $video; ?>" type="video/webm">
                                </video>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>

                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
