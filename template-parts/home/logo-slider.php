<?php

/**
 * Logo slider section template
 *
 * @var array $args
 *
 */


?>

<section class="hero-home">

    <?php if (have_rows('hero_section')): ?>
        <?php while (have_rows('hero_section')): the_row();
            $video = !empty(get_sub_field('video'))? get_sub_field('video') : get_template_directory_uri() . '/build/video/Solidus-Hero-2X.mp4';
            $label = get_sub_field('label');
            $sup_title = get_sub_field('suptitle');
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $button = get_sub_field('link');
            ?>


            <?php if (!empty($video)): ?>
                <div class="media">
                    <video playsinline autoplay muted loop>
                        <source src="<?php echo $video ?>" type="video/mp4">
                    </video>
                </div>
            <?php endif; ?>



            <div class="container">
                <?php if (!empty($label)): ?>
                    <div class="label"><span><?php echo $label; ?></span></div>
                <?php endif; ?>

                <div class="columns-holder">
                    <div class="heading">
                        <?php if (!empty($sup_title)): ?>
                            <div class="suptitle"><?php echo $sup_title; ?></div>
                        <?php endif; ?>

                        <?php if (!empty($title)): ?>
                            <h1><?php echo $title; ?></h1>
                        <?php endif; ?>

                        <?php if (!empty($button)):
                            $link_url    = $button['url'];
                            $link_title  = !empty($button['title'])? $button['title'] : __('Get started');
                            $link_target = $button['target'] ? $button['target'] : '_self';
                            ?>
                            <div class="btn-holder">
                                <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="primary-btn"><span><?php echo $link_title; ?></span></a>
                            </div>
                        <?php endif; ?>

                    </div>

                    <?php if (!empty($content)): ?>
                        <div class="mask-block">
                            <div class="content-holder">
                                <p><?php echo $content; ?></p>
                                powerful-products-holder                         </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

	<div class="logo-slider">
        <?php if ( !empty($args['title']) ) : ?>
        <p><?= esc_html($args['title']) ?></p>
        <?php endif; ?>
        <div class="content ">
            <?php if ( !empty($args['logo_slider']) ) : ?>
            <div class="content__body">

                <?php foreach ($args['logo_slider'] as $slide) : ?>
                <div class="content__item" style="--mask-image: url('<?= esc_url($slide['logo']) ?>');">
                    <a target="_blank" href="<?= $slide['link'] ?? 'javascript:void(0)' ?>">
                        <img src="<?= esc_url($slide['logo']) ?>" alt="Logo">
                    </a>
                </div>
                <?php endforeach; ?>

                <?php foreach ($args['logo_slider'] as $slide) : ?>
                    <div class="content__item" style="--mask-image: url('<?= esc_url($slide['logo']) ?>');">
                        <a target="_blank" href="<?= $slide['link'] ?? 'javascript:void(0)' ?>">
                            <img src="<?= esc_url($slide['logo']) ?>" alt="Logo">
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
