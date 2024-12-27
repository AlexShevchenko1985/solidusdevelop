<?php
if (empty($args['data'])) {
    return;
}

?>
<?php foreach ($args['data'] as $item_1):
    $item_1 = !empty($item_1['card']) ? $item_1['card'] : null;
    if (null === $item_1) {
        return;
    }
    ?>
    <div class="item-block">
        <?php if (!empty($item_1['title'])): ?>
            <h4><?php echo $item_1['title']; ?></h4>
        <?php endif; ?>

        <?php if (!empty($item_1['items'])): ?>
            <div class="content-holder">
                <?php foreach ($item_1['items'] as $value):
                    $style = (!empty($value['width']))? 'style="width:100%"' : '';
                    ?>
                    <div class="content-item" <?php echo $style; ?>>
                        <?php if (!empty($value['title'])): ?>
                            <div class="title"><?php echo $value['title']; ?></div>
                        <?php endif; ?>
                        <?php if (!empty($value['desc'])): ?>
                            <div class="descr"><?php echo $value['desc']; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>
    </div>
<?php endforeach;