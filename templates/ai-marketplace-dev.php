<?php
/**
 * Template name: AI Marketplace layout
 */
get_header();
?>

    <section id="section1" class="hero-inner-section">
        <video playsinline autoplay muted loop >
            <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="content-block">
                <div class="heading">
                    <h1>Solidus <span>AI</span> TECH</h1>
                    <video playsinline autoplay muted loop >
                        <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
                    </video>
                    <p>Solidus AI TECH connects developers and users with advanced AI tools, high-performance computing, and quality datasets. Our marketplace offers access to AI models, agents, and stand-alone applications, while fostering community through a dedicated forum.</p>
                </div>
                <div class="btn-holder">
                    <a href="" class="btn green-btn">Get started</a>
                    <div class="scroll-btn">
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.96552 1.71259V12.7471M5.96552 12.7471L1 7.74707M5.96552 12.7471L10.931 7.74707" stroke="#BBFFEC" stroke-opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="product-categories">
        <div class="container">
            <div class="heading">
                <h2><b>Revolutionizing</b> <span>AI</span> <br>with Four Powerful Product Categories</h2>
            </div>
            <div class="grid-slider">
                <div class="swiper js-grid-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon1.svg" alt="Icon">
                            </div>
                            <div class="slide-holder">
                                <div class="bg">
                                    <div class="media-block">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/ex-img.webp" alt="Icon">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Foundational AI Models</h4>
                                    <p>Solidus AI TECH provides users with high-speed inferencing for open-source models through the SambaNova RDU Technology from our HPC Datacentre in Romania. These models are accessible via API subscriptions, with flexible payment options to meet the needs of businesses, researchers, and developers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon2.svg" alt="Icon">
                            </div>
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>AI Agents</h4>
                                    <p>Publishers can create specialized AI agents designed for specific tasks, offering them to users through simple subscriptions. These agents integrate easily into applications, providing a ready-made solution for automation and productivity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon3.svg" alt="Icon">
                            </div>
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>Stand-alone AI Applications</h4>
                                    <p>Publishers can also develop and offer stand-alone AI applications with intuitive interfaces. These applications can be hosted on the publisher’s infrastructure or deployed via our platform, allowing users to subscribe and benefit from powerful AI tools with minimal setup.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon4.svg" alt="Icon">
                            </div>
                            <div class="slide-holder">
                                <div class="bg">

                                </div>
                                <div class="content">
                                    <h4>Datamart</h4>
                                    <p>Our Datamart offers high-quality labeled datasets from trusted aggregators in the Web 3.0 ecosystem. Users can purchase datasets to train their AI models and build high-impact use cases.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section3" class="video-block">
        <div class="container">
            <div class="video-holder">
                <video id="video" poster="<?php echo get_template_directory_uri() ?>/src/img/video-poster.webp" >
                    <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
                </video>
                <button id="play-btn" class="play-button"></button>
            </div>
        </div>
    </section>
    <section id="section4" class="slider-tabs">
        <div class="container">
            <div class="heading">
                <h2>Why <span>Solidus AITECH</span>?</h2>
                <div class="tab-btn-list">
                    <div class="tab-btn">Users</div>
                    <div class="tab-btn">Publishers</div>
                </div>
            </div>
            <div class="tabs-slider">
                <div class="swiper js-tabs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg">
                                    <div class="media-block">
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/ex-img.webp" alt="Icon">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Cost-Effective Solutions</h4>
                                    <p>Flexible subscription models and pay-as-you-go pricing ensure you only pay for what you need, without the burden of maintaining expensive infrastructure.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon1.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg">

                                </div>
                                <div class="content">
                                    <h4>Access to Cutting-Edge AI</h4>
                                    <p>Whether you need foundational AI models, task-specific AI agents, or complete applications, the marketplace offers a wide range of solutions ready for immediate use.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon2.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>Seamless Integration</h4>
                                    <p>Easily integrate AI solutions into your workflows with minimal setup, allowing for faster deployment and quicker results.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon3.svg" alt="Icon">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="tabs-slider">
                <div class="swiper js-tabs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>Cost-Effective Solutions</h4>
                                    <p>Flexible subscription models and pay-as-you-go pricing ensure you only pay for what you need, without the burden of maintaining expensive infrastructure.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon1.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>Access to Cutting-Edge AI</h4>
                                    <p>Whether you need foundational AI models, task-specific AI agents, or complete applications, the marketplace offers a wide range of solutions ready for immediate use.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon2.svg" alt="Icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-holder">
                                <div class="bg"></div>
                                <div class="content">
                                    <h4>Seamless Integration</h4>
                                    <p>Easily integrate AI solutions into your workflows with minimal setup, allowing for faster deployment and quicker results.</p>
                                </div>
                            </div>
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon3.svg" alt="Icon">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section5" class="collaboration">
        <div class="container">
            <div class="heading">
                <h2>Community and <span>Collaboration</span></h2>
                <p>At Solidus AITECH, we’re building more than just a marketplace—we’re building a community.</p>
            </div>
            <div class="content">
                <div class="video">
                    <div class="head-video">
                        <video playsinline autoplay muted loop >
                            <source src="<?php echo get_template_directory_uri() ?>/src/video/head-video.webm" type="video/webm">
                        </video>
                        <div class="ball"><span>Discussion Forum</span></div>
                    </div>
                    <div class="body-video">
                        <video playsinline autoplay muted loop >
                            <source src="<?php echo get_template_directory_uri() ?>/src/video/body-video.webm" type="video/webm">
                        </video>
                    </div>
                </div>
                <div class="content-items">
                    <div class="item">
                        <div class="item-holder">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/com-icon1.svg" alt="Icon">
                            </div>
                            <div class="content-holder">
                                <div class="bg"></div>
                                <div class="text-content">
                                    <h4>Issue Resolution</h4>
                                    <p>Users can rise complains or issues related solutions they have purchased and assistance from developers and the community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-holder">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/com-icon2.svg" alt="Icon">
                            </div>
                            <div class="content-holder">
                                <div class="bg"></div>
                                <div class="text-content">
                                    <h4>Industry Discussions</h4>
                                    <p>Engage with experts and peers to discuss the latest trends, challenges, and innovations in the AI landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-holder">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/com-icon3.svg" alt="Icon">
                            </div>
                            <div class="content-holder">
                                <div class="bg"></div>
                                <div class="text-content">
                                    <h4>Bespoke AI Requests</h4>
                                    <p>Users can request custom AI solutions, which developers can create and offer one-time purchases.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-holder">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/com-icon4.svg" alt="Icon">
                            </div>
                            <div class="content-holder">
                                <div class="bg"></div>
                                <div class="text-content coming-soon">
                                    <h4>Coming soon</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-holder">
                <a href="" class="btn green-btn">Get started</a>
            </div>
        </div>
    </section>
    <section id="section6" class="two-column-tabs">
        <div class="container">
            <div class="heading">
                <h2>Powered by <span>AITECH</span> Tokens</h2>
                <p>The AITECH token is the backbone of our marketplace, facilitating every transaction. Whether purchasing AI models, subscribing to agents, or accessing datasets, AITECH tokens make transactions secure and efficient.</p>
            </div>
            <div class="tabs-holder">
                <div class="content-column">
                    <div class="tab-item">
                        <div class="mobile-only">
                            <video playsinline autoplay muted loop poster="">
                                <source src="<?= get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
                            </video>
                        </div>
                        <div class="content">
                            <h4>Perpetual Burn Mechanism</h4>
                            <p>To add further value for publishers, Solidus AITECH uses a perpetual burn mechanism. A portion of our profits from every transaction is burned, reducing the overall supply of AITECH tokens over time. This deflationary system helps increase the value of publisher earnings as the marketplace continues to grow.</p>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="mobile-only">
                            <video playsinline autoplay muted loop poster="">
                                <source src="<?= get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
                            </video>
                        </div>
                        <div class="content">
                            <h4>Empowering the Gig Economy</h4>
                            <p>At Solidus AITECH, we are dedicated to democratizing the AI landscape by providing developers with the tools and marketplace to monetize their solutions, while enabling users to access high-performance AI technology. Whether you are a solo developer in the gig economy or a business looking to scale, Solidus AITECH connects you to the future of AI.</p>
                        </div>
                    </div>
                </div>
                <div class="video-column">
                    <video playsinline autoplay muted loop poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
                    </video>
                </div>
                <div class="video-column">
                    <video playsinline autoplay muted loop poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <section id="section7" class="banner-section">
        <div class="video-bg">
            <video playsinline autoplay muted loop poster="">
                <source src="<?php echo get_template_directory_uri() ?>/src/video/bottom-video.webm" type="video/webm">
            </video>
        </div>
        <div class="container">
            <div class="heading-holder">
                <h2>Join us today and be part of the<br> <span>AI revolution</span></h2>
                <div class="btn-holder">
                    <a href="" class="btn green-btn">Get started</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
