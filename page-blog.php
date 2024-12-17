<?php
/* Template Name: Blog */

// Latest post
$latest_post = get_posts([
    'numberposts' => 1,
    'post_status' => 'publish',
]);
$latest_post = $latest_post[0];
$publish_date = get_the_date('j F Y', $latest_post->ID);
$author_id = $latest_post->post_author;
$author_name = get_the_author_meta('display_name', $author_id);

// Posts query
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'post_status'    => 'publish',
    'post__not_in'   => [$latest_post->ID],
]);


get_header();
?>

<section class="featured-post">
    <div class="container">
        <div class="featured-post__content">
            <div class="featured-post__info">
                <span><?= $publish_date ?></span> • <span><?= get_time_to_read($latest_post->ID) ?> to read</span>
            </div>
            <h1><?= get_the_title($latest_post->ID) ?></h1>
            <div class="featured-post__content-inner">
                <div class="featured-post__excerpt">
                    <?= get_the_excerpt($latest_post->ID) ?>
                </div>
                <div class="featured-post__author">
                    <span>By</span> <?= $author_name ?>
                </div>
                <a href="<?= get_permalink($latest_post->ID) ?>" class="btn">Read More</a>
            </div>
        </div>
        <div class="featured-post__img">
            <img src="<?= get_the_post_thumbnail_url($latest_post->ID, 'full') ?>" alt="<?= get_the_title($latest_post->ID) ?>">
        </div>
    </div>
</section>

<section class="posts">
    <div class="container">
    <?php
    if ($query->have_posts()) {
        echo '<div class="posts__list">';

        while ($query->have_posts()) {
            $query->the_post();

            $post_id = get_the_ID();
            $title = get_the_title();
            $author_name = get_the_author_meta('display_name', get_post_field('post_author', $post_id));
            $featured_image = get_the_post_thumbnail_url($post_id, 'medium');

            ?>

            <a class="post-item" href="<?= esc_url(get_permalink()) ?>">
                <img src="<?= esc_url($featured_image) ?>" alt="<?= esc_html($title) ?>">
                <div class="post-item__info">
                    <h2><?= esc_html($title) ?></h2>
                    <div class="author">
                        <?= esc_html($author_name) ?>
                        <span class="divider"></span>
                        <?= get_time_to_read($post_id) ?>
                    </div>
                </div>
            </a>

            <?php
        }

        echo '</div>';

        echo '<div class="pagination">';
        echo paginate_links([
            'total'   => $query->max_num_pages,
            'current' => $paged,
            'format'  => '?paged=%#%',
            'prev_text' => '<span class="nav prev"></span>',
            'next_text' => '<span class="nav next"></span>',
        ]);
        echo '</div>';
    }
    ?>
    </div>
</section>

<?php
get_footer();
