<?php
/* Template Name: Compute marketplace */

get_header();

$hero = get_field('hero_section') ?? [];
$section_2 = get_field('section_2') ?? [];
$section_3 = get_field('section_3') ?? [];
$section_4 = get_field('section_4') ?? [];
$section_5 = get_field('section_5') ?? [];
$section_6 = get_field('section_6') ?? [];
$section_7 = get_field('section_7') ?? [];
$section_8 = get_field('section_8') ?? [];
$section_9 = get_field('section_9') ?? [];
$section_10 = get_field('section_10') ?? [];
$section_11 = get_field('section_11') ?? [];

?>

<section id="section1" class="hero-section">

    <div class="container">
        <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Hero Animation.webp' ?>">
            <source src="<?php echo get_template_directory_uri() . '/build/video/Hero Animation 2X.webm' ?>" type="video/webm">
            <source src="<?php echo get_template_directory_uri() . '/build/video/Hero Animation 2X.mp4.mp4' ?>" type="video/mp4">
        </video>

        <div class="heading">
            <h1><?php echo nl2br($hero['title']) ?></h1>
            <p><?php echo nl2br($hero['subtitle']) ?></p>
        </div>

        <?php if ( !empty( $hero['button_text'] ) ) : ?>
        <a href="<?php echo esc_url($hero['button_link']) ?>" class="btn"><?php echo esc_html($hero['button_text']) ?></a>
        <?php endif; ?>

        <?php if ( !empty( $hero['partners'] ) ) : ?>
        <div class="partners">
            <?php foreach ( $hero['partners'] as $partner ) : ?>
            <a href="<?php echo esc_url($partner['link']) ?>" class="partners__item"><img src="<?php echo esc_url($partner['logo']) ?>" alt=""><?php echo esc_html($partner['name']) ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section id="section2" class="section-bring">
    <div class="container">
        <h2 class="no-br-mobile"><?php echo nl2br($section_2['title']) ?></h2>

        <?php
        if('safari' === node_get_current_browser()){
            $video_controls = (!wp_is_mobile())? 'muted autoplay' : 'muted';
        }else{
            $video_controls = (!wp_is_mobile())? 'controls muted autoplay' : 'controls muted';
        }
        ?>
        <div class="video-container">
            <video id="video" poster="<?php echo esc_url($section_2['video_poster']) ?>" <?php echo $video_controls; ?>>
                <source src="<?php echo esc_url($section_2['video']) ?>" type="video/mp4">
            </video>
            <button id="play-btn" class="play-button"></button>
        </div>

        <?php if ( !empty( $section_2['button_text'] ) ) : ?>
            <a href="<?php echo esc_url($section_2['button_link']) ?>" class="btn"><?php echo esc_html($section_2['button_text']) ?></a>
        <?php endif; ?>
    </div>
</section>

<section id="section3" class="section-unlock">
    <div class="container">
        <h2><?php echo nl2br($section_3['title']) ?></h2>
        <div class="row">
            <div class="info-item full-width hover-video">
                <div class="corner-element corner">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/speed.svg' ?>" alt="Corner icon">
                </div>
                <div class="content-wrap">
                    <h3><?php echo esc_html( $section_3['item_1']['title'] ) ?></h3>
                    <p><?php echo esc_html( $section_3['item_1']['subtitle'] ) ?></p>

                    <?php if ( !empty( $section_3['item_1']['content'] ) ) : $i = 1 ?>
                    <div class="content">
                        <?php foreach ( $section_3['item_1']['content'] as $content ) : ?>
                        <div class="content__item">
                            <p><?php echo esc_html($content['text']) ?></p>
                        </div>

                        <?php if ( $i != 3 ) : ?>
                        <div class="separator"></div>
                        <?php endif; ?>

                        <?php $i++; endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="img-wrap">
                    <video playsinline muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Inferencing Speeds.webp' ?>">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Inferencing Speeds Background-2X.webm' ?>" type="video/webm">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Inferencing Speeds background-2X.mp4' ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="info-item side-center hover-video">
                <div class="corner-element side">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/ease-of-use.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3><?php echo esc_html( $section_3['item_2']['title'] ) ?></h3>
                    <p><?php echo esc_html( $section_3['item_2']['content'] ) ?></p>

                    <?php if ( !empty( $section_3['item_2']['button_text'] ) ) : ?>
                        <a href="<?php echo esc_url($section_3['item_2']['button_link']) ?>" class="btn"><?php echo esc_html($section_3['item_2']['button_text']) ?></a>
                    <?php endif; ?>
                </div>
                <div class="img-wrap">
                    <video playsinline muted loop  poster="<?php echo get_template_directory_uri() . '/build/img/Ease-Of-Use.webp' ?>">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Ease-Of-Use-2X.webm' ?>" type="video/webm">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Ease-Of-Use-2X.mp4' ?>" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="info-item small hover-video">
                <div class="corner-element corner">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/protection.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3><?php echo esc_html( $section_3['item_3']['title'] ) ?></h3>
                    <p><?php echo esc_html( $section_3['item_3']['content'] ) ?></p>
                </div>
                <div class="img-wrap">
                    <video playsinline muted loop  poster="<?php echo get_template_directory_uri() . '/build/img/59AFFF.webp' ?>">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/59Afff - 2X.webm' ?>" type="video/webm">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/59Afff - 2X.mp4' ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="info-item small no-title hover-video">
                <div class="corner-element corner">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/user-protection.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3><?php echo esc_html( $section_3['item_4']['title'] ) ?></h3>
                    <p><?php echo esc_html( $section_3['item_4']['content'] ) ?></p>
                </div>
                <div class="img-wrap">
                    <video playsinline muted loop  poster="<?php echo get_template_directory_uri() . '/build/img/Global Coverage.webp' ?>">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Global Coverage-2X.webm' ?>" type="video/webm">
                        <source src="<?php echo get_template_directory_uri() . '/build/video/Global Coverage-2X.mp4' ?>" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="info-item">
                <div class="corner-element side bottom">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/computation-power.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <div class="switcher">
                        <span class="left active" data-src="<?php echo esc_url( $section_3['item_5']['a100'] ) ?>" data-src_mobile="<?php echo esc_url( $section_3['item_5']['a100_mobile'] ) ?>">A100</span>
                        <span class="right" data-src="<?php echo esc_url( $section_3['item_5']['h100'] ) ?>" data-src_mobile="<?php echo esc_url( $section_3['item_5']['h100_mobile'] ) ?>">H100</span>
                    </div>
                    <h3><?php echo esc_html( $section_3['item_5']['title'] ) ?></h3>
                    <p><?php echo esc_html( $section_3['item_5']['content'] ) ?></p>
                </div>
                <div class="img-wrap">
                    <img src="<?php echo wp_is_mobile() ? esc_url( $section_3['item_5']['a100_mobile'] ) : esc_url( $section_3['item_5']['a100'] ) ?>" alt="Economic computation power">
                </div>
            </div>
        </div>

    </div>
</section>

<section id="section4" class="section-coming-soon">
    <div class="container">
        <h2><?php echo esc_html($section_4['title']) ?></h2>
        <div class="content">
            <div class="item">
                <h3><img src="<?php echo get_template_directory_uri() . '/build/img/gpu.svg' ?>" alt="GPU virtualization"><?php echo esc_html($section_4['title_1']) ?></h3>
                <p><?php echo esc_html($section_4['content_1']) ?></p>
                <img src="<?php echo get_template_directory_uri() . '/build/img/virtualization.webp' ?>" alt="GPU virtualization">
            </div>
            <div class="item">
                <h3><img src="<?php echo get_template_directory_uri() . '/build/img/autoscaling.svg' ?>" alt="Autoscaling"><?php echo esc_html($section_4['title_2']) ?></h3>
                <p><?php echo esc_html($section_4['content_2']) ?></p>
                <img src="<?php echo get_template_directory_uri() . '/build/img/autoscaling.webp' ?>" alt="Autoscaling">
            </div>
        </div>
    </div>
</section>

<section id="section5" class="section-start-using">
    <div class="container">
        <h2><?php echo nl2br($section_5['title']) ?></h2>
        <div class="section-content">
            <div class="items">

                <div class="item active">
                    <div class="arrow"></div>
                    <div class="corner-element">
                        <span>1</span>
                    </div>
                    <div class="item__inner">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/create-account.svg' ?>" alt="">
                        </div>
                        <div class="content">
                            <h4><?php echo esc_html($section_5['item_title_1']) ?></h4>
                            <p><?php echo esc_html($section_5['item_content_1']) ?></p>
                        </div>
                    </div>

                    <video class="item-image" playsinline autoplay muted loop >
                        <source src="<?php echo esc_url($section_5['item_video_1']) ?>" type="video/mp4">
                    </video>
                </div>

                <div class="item">
                    <div class="arrow"></div>
                    <div class="corner-element">
                        <span>2</span>
                    </div>
                    <div class="item__inner">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/deposit.svg' ?>" alt="">
                        </div>
                        <div class="content">
                            <h4><?php echo esc_html($section_5['item_title_2']) ?></h4>
                            <p><?php echo esc_html($section_5['item_content_2']) ?></p>
                        </div>
                    </div>

                    <video class="item-image" playsinline autoplay muted loop >
                        <source src="<?php echo esc_url($section_5['item_video_2']) ?>" type="video/mp4">
                    </video>
                </div>

                <div class="item">
                    <div class="arrow"></div>
                    <div class="item__inner">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri() . '/build/img/buy-deploy.svg' ?>" alt="">
                        </div>
                        <div class="content">
                            <h4><?php echo esc_html($section_5['item_title_3']) ?></h4>
                            <p><?php echo esc_html($section_5['item_content_3']) ?></p>
                        </div>
                    </div>
                    <div class="corner-element">
                        <span>3</span>
                    </div>
                    <video  class="item-image" playsinline autoplay muted loop >
                        <source src="<?php echo esc_url($section_5['item_video_3']) ?>" type="video/mp4">
                    </video>
                </div>

            </div>
            <div class="info">
                <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri() . '/build/img/poster_create_account.webp' ?>">
                    <source src="<?php echo esc_url($section_5['item_video_1']) ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

<section id="section6" class="section-access">
    <div class="container">
        <div class="content-wrap">
            <h2><?php echo nl2br($section_6['title']) ?></h2>
            <p><?php echo esc_html($section_6['content']) ?></p>

            <?php if ( !empty( $section_6['button_text'] ) ) : ?>
                <a href="<?php echo esc_url($section_6['button_link']) ?>" class="btn"><?php echo esc_html($section_6['button_text']) ?></a>
            <?php endif; ?>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Globe-gpu.webp' ?>">
                <source src="<?php echo get_template_directory_uri() . '/build/video/Globe-Gpu 2X.webm' ?>" type="video/webm">
                <source src="<?php echo get_template_directory_uri() . '/build/video/Globe-Gpu 2X.mp4' ?>" type="video/mp4">
            </video>
        </div>
    </div>
</section>

<section id="section7" class="section-unleash">
    <div class="container">
        <h2><?php echo nl2br($section_7['title']) ?></h2>
        <div class="img-wrap">
            <img src="<?php echo esc_url( $section_7['image_1'] ) ?>" alt="">
        </div>
        <div class="content-wrap">
            <img src="<?php echo get_template_directory_uri() . '/build/img/solidus-logo2.svg' ?>" alt="Solidus">
            <div class="content-item active" data-src="<?php echo esc_url( $section_7['image_1'] ) ?>">
                <div class="border-area"></div>
                <div class="corner"></div>
                <div class="content-item__inner">
                    <h4><?php echo esc_html( $section_7['title_1'] ) ?></h4>
                    <p><?php echo esc_html( $section_7['content_1'] ) ?></p>
                </div>
            </div>
            <div class="content-item" data-src="<?php echo esc_url( $section_7['image_2'] ) ?>">
                <div class="border-area"></div>
                <div class="corner"></div>
                <div class="content-item__inner">
                    <h4><?php echo esc_html( $section_7['title_2'] ) ?></h4>
                    <p><?php echo esc_html( $section_7['content_2'] ) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section8" class="section-effortless-hosting">
    <div class="container">
        <h2><?php echo nl2br($section_8['title']) ?></h2>
        <div class="content-wrap">
            <div class="content-item hover-video">
                <video playsinline muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Simple Onboarding.webp' ?>">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Simple Onboarding 2X.webm' ?>" type="video/webm">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Simple Onboarding 2X.mp4' ?>" type="video/mp4">
                </video>

                <h4><?php echo nl2br($section_8['title_1']) ?></h4>
                <p><?php echo esc_html($section_8['content_1']) ?></p>
            </div>
            <div class="content-item hover-video">
                <video playsinline muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Sourcing demand.webp' ?>">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Sourcing Demand 2X.webm' ?>" type="video/webm">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Sourcing Demand 2X.mp4' ?>" type="video/mp4">
                </video>

                <h4><?php echo nl2br($section_8['title_2']) ?></h4>
                <p><?php echo esc_html($section_8['content_2']) ?></p>

                <?php if ( !empty( $section_8['button_text'] ) ) : ?>
                    <a href="<?php echo esc_url($section_8['button_link']) ?>" class="btn"><?php echo esc_html($section_8['button_text']) ?></a>
                <?php endif; ?>
            </div>
            <div class="content-item hover-video">
                <video playsinline muted loop poster="<?php echo get_template_directory_uri() . '/build/img/Streamlined Transactions.webp' ?>">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Streamlined Transactions 2X.webm' ?>" type="video/webm">
                    <source src="<?php echo get_template_directory_uri() . '/build/video/Streamlined Transactions 2X.mp4' ?>" type="video/mp4">
                </video>

                <h4><?php echo nl2br($section_8['title_3']) ?></h4>
                <p><?php echo nl2br($section_8['content_3']) ?></p>
            </div>
        </div>
    </div>
</section>

<section id="section9" class="section-increase-value">
    <div class="container">
        <div class="content-wrap">
            <h2><?php echo nl2br($section_9['title']) ?></h2>
            <div class="content">
                <h4><?php echo esc_html($section_9['subtitle']) ?></h4>
                <p><?php echo esc_html($section_9['content']) ?></p>

                <?php if ( !empty( $section_9['button_text'] ) ) : ?>
                    <a href="<?php echo esc_url($section_9['button_link']) ?>" class="btn"><?php echo esc_html($section_9['button_text']) ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="">
                <source src="<?php echo get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
            </video>
        </div>
    </div>
</section>

<section id="section10" class="section-multilayered">
    <div class="container">
        <h2><?php echo nl2br($section_10['title']) ?></h2>
        <p class="no-br-mobile"><?php echo nl2br($section_10['subtitle']) ?></p>

        <div class="content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p class="no-br-mobile"><?php echo nl2br($section_10['content_1']) ?></p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/build/img/slide1.webp' ?>" alt="Multilayered AI Marketplace">
                </div>


                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p class="no-br-mobile"><?php echo nl2br($section_10['content_2']) ?></p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/build/img/slide2.webp' ?>" alt="Multilayered AI Marketplace">
                </div>

                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p class="no-br-mobile"><?php echo nl2br($section_10['content_3']) ?></p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/build/img/slide3.webp' ?>" alt="Multilayered AI Marketplace">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section11" class="section-value-of-revenue">
    <div class="container">
        <h2><?php echo nl2br($section_11['title']) ?></h2>
        <p><?php echo nl2br($section_11['subtitle']) ?></p>

        <?php if ( !empty( $section_11['button_text'] ) ) : ?>
            <a href="<?php echo esc_url($section_11['button_link']) ?>" class="btn"><?php echo esc_html($section_11['button_text']) ?></a>
        <?php endif; ?>
    </div>

    <video autoplay playsinline muted loop poster="">
        <source src="<?php echo get_template_directory_uri() . '/build/video/Embark Your Journey-1920Px.webm' ?>" type="video/webm">
        <source src="<?php echo get_template_directory_uri() . '/build/video/Embark Your Journey-1920Px.mp4' ?>" type="video/mp4">
    </video>
</section>

<?php
get_footer();
