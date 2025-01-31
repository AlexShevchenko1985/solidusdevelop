<?php

/* Template Name: AVAchat */

$hero = get_field('hero') ?? [];
$avachat = get_field('avachat') ?? [];
$faq_items = get_field('faq') ?? [];
$video = get_field('video') ?? [];

get_header();
?>

    <section class="hero">
        <div class="container">
            <div class="hero__content">
                <a href="<?php echo esc_url($hero['avachat_button_link']) ?>" class="round-btn">AVACHAT</a>
                <img src="<?php echo get_template_directory_uri() . '/build/img/sambanova-logo1.svg' ?>" alt="SambaNova">
                <h1><?php echo esc_html($hero['title']) ?></h1>
                <p><?php echo esc_html($hero['subtitle']) ?></p>

                <?php if (!empty($hero['button_1_text']) || !empty($hero['button_2_text'])): ?>
                    <div class="btn-wrap">
                        <?php if (!empty($hero['button_1_text'])): ?>
                            <a href="<?php echo esc_url($hero['button_1_link']) ?>" class="btn green inverted"><?php echo esc_html($hero['button_1_text']) ?></a>
                        <?php endif; ?>
                        <?php if (!empty($hero['button_2_text'])): ?>
                            <a href="<?php echo esc_url($hero['button_2_link']) ?>" class="btn green"><?php echo esc_html($hero['button_2_text']) ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="hero__info">
                <div class="girl">
                    <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri() . '/build/img/girl-bg.webp' ?>">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/AVACHAT Video v2.webm' ?>" type="video/webm">
<!--                        <source src="--><?php //echo get_template_directory_uri() . '/build/video/AVACHAT Video Compressed.mp4' ?><!--" type="video/mp4">-->
                    </video>
                </div>
                
                <div class="hero__info-items">
                    <div class="item">
                        <div class="item__title">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/choose-model.svg' ?>" alt="<?php echo esc_html($avachat['title']) ?>">
                           <?php echo esc_html($avachat['title']) ?>
                        </div>
                        <div class="item__content">
                            <?php echo esc_html($avachat['content']) ?>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item__title">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/your-style.svg' ?>" alt="<?php echo esc_html($avachat['title_2']) ?>">
                            <?php echo esc_html($avachat['title_2']) ?>
                        </div>
                        <div class="item__content">
                            <?php echo esc_html($avachat['content_2']) ?>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item__title">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/creativity.svg' ?>" alt="<?php echo esc_html($avachat['title_3']) ?>">
                            <?php echo esc_html($avachat['title_3']) ?>
                        </div>
                        <div class="item__content">
                            <?php echo esc_html($avachat['content_3']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="iframe-section">
        <div class="container">
            <div class="iframe-wrap">
                <iframe
                        src="https://avachat-tg.ai.aitech.io/"
                        width="100%"
                        height="700px"
                        style="border: none;">
                </iframe>
            </div>
        </div>
    </section>

    <section class="faq">
        <?php
        if ( !empty($faq_items) ) :
        $items_per_carousel = 5;
        $faq_chunks = array_chunk($faq_items, $items_per_carousel);

        foreach ($faq_chunks as $index => $chunk) {
            $carousel_class = ($index % 2 === 0) ? 'faq-carousel-left' : 'faq-carousel-right';

            echo '<div class=" faq-carousel ' . $carousel_class . '">';
            echo '<div class="faq-carousel__body">';

            foreach ($chunk as $item) {
                echo '<div class="swiper-slide faq__item">';
                echo '<a href="' . esc_url($item['link']) . '">' . esc_html($item['question']) . '<span class="arrow"></span></a>';
                echo '</div>';
            }

            foreach ($chunk as $item) {
                echo '<div class="swiper-slide faq__item">';
                echo '<a href="' . esc_url($item['link']) . '">' . esc_html($item['question']) . '<span class="arrow"></span></a>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        }

        endif;
        ?>
    </section>

    <?php
    if('safari' === node_get_current_browser()){
        $video_controls = (!wp_is_mobile())? 'muted autoplay' : 'muted';
    }else{
        $video_controls = (!wp_is_mobile())? 'controls muted autoplay' : 'controls muted';
    }
    ?>

    <section id="section2" class="section-bring">
        <div class="container">

            <div class="video-container">
                <video id="video" poster="<?php echo get_template_directory_uri() . '/build/img/ava-poster.webp' ?>" <?php echo $video_controls; ?>>
                    <source src="<?php echo esc_url($video) ?>" type="video/mp4">
                </video>
                <button id="play-btn" class="play-button"></button>
            </div>

        </div>
    </section>

<?php
get_footer();
