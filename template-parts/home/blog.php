<?php

$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
]);

?>

<section class="home-blog">
    <div class="container">
        <h2>Explore <span>Our Blog</span></h2>

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

            wp_reset_postdata();
            ?>
            <a href="/blog" class="btn">View all</a>
            <?php
        }
        ?>

    </div>

</section>
