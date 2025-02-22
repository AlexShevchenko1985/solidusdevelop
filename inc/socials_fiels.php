<?php

add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key' => 'group_6749957915ac0',
        'title' => 'Socials',
        'fields' => array(
            array(
                'key' => 'field_67499579d17fd',
                'label' => 'Discord',
                'name' => 'discord',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://discord.com/invite/solidusai',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_674995f7d17fe',
                'label' => 'Telegram',
                'name' => 'telegram',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://t.me/solidusaichat',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_67499624d17ff',
                'label' => 'X',
                'name' => 'x',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://x.com/AITECHio',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb502a02a7',
                'label' => 'Facebook',
                'name' => 'facebook',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.facebook.com/AITECHio',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb52da02a9',
                'label' => 'Linkedin',
                'name' => 'linkedin',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.linkedin.com/company/80320132/',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb562a02aa',
                'label' => 'Reddit',
                'name' => 'reddit',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.reddit.com/user/AITECHtoken/',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb4cea02a6',
                'label' => 'Instagram',
                'name' => 'instagram',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.instagram.com/aitechio/',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb50fa02a8',
                'label' => 'Youtube',
                'name' => 'youtube',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.youtube.com/channel/UCAoiPKK4VkbngPGw4mHqCKQ',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb72fa02ac',
                'label' => 'Coingecko',
                'name' => 'coingecko',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.coingecko.com/en/coins/solidus-ai-tech',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb69ba02ab',
                'label' => 'Medium',
                'name' => 'medium',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://coinmarketcap.com/currencies/solidus-ai-tech/',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_676bb73fa02ad',
                'label' => 'Footer contact form shortcode',
                'name' => 'footer_contact_form_shortcode',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '[contact-form-7 id="e2fdc4d" title="Subscribe form"]',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'social-links',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );
} );

