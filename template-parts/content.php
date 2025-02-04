<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aitech
 */

$publish_date = get_the_date('j F Y', get_the_ID());
$author_id = $post->post_author;
$author_name = get_the_author_meta('display_name', $author_id);
$author_bio = get_the_author_meta('description', $author_id);
$author_avatar = get_avatar_url($author_id);

$discord = get_field('discord', 'option');
$telegram = get_field('telegram', 'option');
$x = get_field('x', 'option');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <header class="entry-header">
            <a href="javascript:history.back()" class="back"><span></span>Back</a>
            
            <div class="post__info">
                <span><?= $publish_date ?></span> • <span><?= get_time_to_read(get_the_ID()) ?> to read</span>
            </div>
            <?php
            the_title( '<h1 class="entry-title">', '</h1>' );
            ?>

            <div class="post-author">
                <img src="<?= $author_avatar ?>" alt="">
                <div class="author-info">
                    <div><?= $author_name; ?></div>
                    <div class="position"><?= $author_bio;?></div>
                </div>
            </div>
        </header>

        <div class="post-img">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
        </div>

        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aitech' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );


            ?>
        </div><!-- .entry-content -->

        <div class="share">
            Share this

            <?php if ( !empty( $telegram ) ) : ?>
                <a href="<?php echo esc_url($telegram) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/tg.svg' ?>" alt="Discord"></a>
            <?php endif; ?>

            <?php if ( !empty( $discord ) ) : ?>
                <a href="<?php echo esc_url($discord) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/discord.svg' ?>" alt="Telegram"></a>
            <?php endif; ?>

            <?php if ( !empty( $x ) ) : ?>
                <a href="<?php echo esc_url($x) ?>" target="_blank" class="socials__item"><img src="<?= get_template_directory_uri() . '/build/img/x.svg' ?>" alt="X"></a>
            <?php endif; ?>
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
