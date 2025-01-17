<?php

/**
 * Logo slider section template
 *
 * @var array $args
 *
 */

?>

<section class="hero-home">
	<div class="media">

        <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri() ?>/src/img/hero-img1.webp">
            <source src="<?php echo get_template_directory_uri() . '/build/video/Solidus-Hero-2X.webm' ?>" type="video/webm">
            <source src="<?php echo get_template_directory_uri() . '/build/video/Solidus-Hero-2X.mp4' ?>" type="video/mp4">
        </video>
	</div>
	<div class="container">
		<div class="label"><span>Powering Sustainable AI</span></div>
		<div class="columns-holder">
			<div class="heading">
				<div class="suptitle">Europe’s</div>
				<h1><span>First Eco-Friendly HPC Data Center</span> & $AITECH Token Revolution</h1>
				<div class="btn-holder">
                    <a target="_self" href="" class="primary-btn"><span>Get Started</span></a>
                </div>
			</div>
			<div class="mask-block">
				<div class="content-holder">
					<p>Solidus has built an eco-friendly High-Performance Computing (HPC) Data Centre spanning 8,000 sq ft in Europe. $AITECH, the world’s first deflationary AI infrastructure utility token, facilitates access to the Launchpad, Artificial Intelligence & GPU Marketplace. $AITECH powers the Solidus AI Tech ecosystem.</p>
					<div class="btn-holder">
						<a target="_self" href="" class="primary-btn"><span>Get Started</span></a>
						<a target="_self" href="" class="arrow-btn"><span>Learn More</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>

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