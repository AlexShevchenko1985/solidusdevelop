<?php if (have_rows('data_center_section')): ?>
    <?php while (have_rows('data_center_section')): the_row();
        $title    = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $tabs     = get_sub_field('tabs');

        ?>

        <section class="data-center">
            <div class="container">
                <div class="heading">
                    <?php if (!empty($title)): ?>
                        <h2><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($tabs)): ?>
                        <div class="btn-list">
                            <?php foreach ($tabs as $tab): ?>
                                <?php if (!empty($tab->post_title)): ?>
                                    <div class="tab-btn"><?php echo $tab->post_title; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

                <?php if (!empty($tabs)): ?>
                    <?php foreach ($tabs as $tab):
                        $type = get_field('type', $tab->ID);
                    ?>
                    <?php if ('card' === $type):
                        $card_block = get_field('card_block', $tab->ID);
                        ?>

                        <div class="tab-body">
                            <div class="container">
	                            <div class="columns-holder">

	                                <?php if (!empty($card_block['col_1'])): ?>
	                                    <div class="col">
	                                        <?php get_template_part('template-parts/data-column', '', ['data' => $card_block['col_1']]); ?>
	                                    </div>
	                                <?php endif; ?>

	                                <?php if (!empty($card_block['col_2'])): ?>
	                                    <div class="col double-col">
	                                        <?php get_template_part('template-parts/data-column', '', ['data' => $card_block['col_2']]); ?>
	                                    </div>
	                                <?php endif; ?>

	                                <?php if (!empty($card_block['col_3'])): ?>
	                                    <div class="col">
	                                        <?php get_template_part('template-parts/data-column', '', ['data' => $card_block['col_3']]); ?>
	                                    </div>
	                                <?php endif; ?>
	                            </div>
                            </div>

                            <?php if (!empty($card_block['video'])): ?>
                                <div class="video-holder">
                                    <video playsinline muted loop autoplay>
                                        <source src="<?php echo $card_block['video']['url']; ?>" type="video/mp4">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($card_block['benefits'])): ?>
                                <div class="advantages-list">
                                    <div class="container">
	                                    <div class="title"><?php echo __('Benefits / Use cases', 'aitech'); ?></div>
	                                    <ul>
	                                        <?php
	                                        foreach ($card_block['benefits'] as $benefit):  ?>
	                                            <?php if (!empty($benefit['item'])): ?>
	                                                <li><?php echo $benefit['item']; ?></li>
	                                            <?php endif; ?>
	                                        <?php endforeach; ?>
	                                    </ul>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>

                    <?php endif; ?>
                        <?php if ('table' === $type):
                        $table_block = get_field('table_block', $tab->ID);
                        ?>

                        <div class="tab-body table-layout">
                            <div class="container">

                            <div class="heading">
                                <?php if (!empty($table_block['title'])): ?>
                                    <div class="title"><?php echo $table_block['title']; ?></div>
                                <?php endif; ?>
                                <?php if (!empty($table_block['subtitle'])): ?>
                                    <div class="subtitle"><?php echo $table_block['subtitle']; ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="columns-holder">
                                <?php if (!empty($table_block['table'])): ?>
                                    <div class="column">
                                        <?php foreach ($table_block['table'] as $item): ?>
                                            <div class="table-row">
                                                <div class="table-col">
                                                    <?php if (!empty($item['title_left_col'])): ?>
                                                        <div class="table-title"><?php echo $item['title_left_col']; ?></div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($item['text_left_col'])): ?>
                                                        <div class="descr"><?php echo $item['text_left_col']; ?></div>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="table-col">
                                                    <?php if (!empty($item['title_right_col'])): ?>
                                                        <div class="table-title"><?php echo $item['title_right_col']; ?></div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($item['text_right_col'])): ?>
                                                        <div class="descr"><?php echo $item['text_right_col']; ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($table_block['image'])): ?>
                                    <div class="column">
                                        <div class="image">
                                            <?php echo wp_get_attachment_image($table_block['image'], 'large'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
