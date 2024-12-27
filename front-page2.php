<?php

$numbers_section = get_field('numbers_section');
$card_section = get_field('card_section');
$chosen_by = get_field('chosen_by');
$roadmap = get_field('roadmap');
$ai_tech = get_field('ai_tech');
$aitech_labs = get_field('aitech_labs');
$coin_section = get_field('coin_section');

get_header();
?>

<div class="home-wrapper">

    <?php
    /**
     * team block
     */
    get_template_part('template-parts/home/team');
    ?>



	<section class="partners-section">
        <div class="container">
            <div class="heading">
                <h2><span>Partners</span></h2>
                <p>Meet the Trusted Partners Driving Innovation with Us</p>
                <div class="btn-list">
                    <div class="tab-btn">Exchange</div>
                    <div class="tab-btn">Partners + backers</div>
                </div>
            </div>
            <div class="tab-body">
                <div class="logos-holder">
                    <div class="logo-item front-side-active" style="--i: 1;">
                        <div class="logo-holder">
                            <div class="front">
                               <a href=""> <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo1.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 2;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <A href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 3;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 4;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 5;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 6;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 7;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo8.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 8;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo8.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo9.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 9;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo9.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo10.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 10;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo10.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo11.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 11;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo11.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo12.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 12;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo12.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo13.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 13;">
                        <div class="logo-holder">
                            <div class="front">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo13.svg" alt="Logo"></a>
                            </div>
                            <div class="back">
                                <a href=""><img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-body">
                <div class="logos-holder">
                    <div class="logo-item front-side-active" style="--i: 1;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo1.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 2;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 3;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 4;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 5;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 6;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 7;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo8.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 8;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo8.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo9.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 9;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo9.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo10.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 10;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo10.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo11.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 11;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo11.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo12.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 12;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo12.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo13.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 13;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo13.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 14;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo2.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 15;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo3.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 16;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo4.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 17;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo5.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 18;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo6.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="logo-item front-side-active" style="--i: 19;">
                        <div class="logo-holder">
                            <div class="front">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo7.svg" alt="Logo">
                            </div>
                            <div class="back">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/partners/partner-logo8.svg" alt="Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="solutions-form">
        <div class="container">
            <div class="mask-holder">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/mail-icon.svg" alt="Icon">
                </div>
                <div class="form-section-holder">
                    <div class="form-holder">
                        <?php
                        /**
                         * Form block
                         */
                        get_template_part('template-parts/home/form');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>













</div>

<?php
get_footer();
