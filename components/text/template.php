<?php
$item_width        = get_sub_field('item_width');
$style             = get_sub_field('style');
$item_heading_type = get_sub_field('item_heading_type');
?>
<section class="text text-<?php echo $style;?>">
    <div class="container">
           <div class="row">
            <?php if ( have_rows('text_items') ) : ?>
            <?php $text_item_counter = 0;?>
            <?php while (have_rows('text_items') ) : the_row();?>
            <?php $text_item_counter++;?>
            <div class="col<?php echo $item_width; ?>">
            <div class="text-item">
            <<?php echo $item_heading_type; ?> class="text-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
            <?php the_sub_field('description'); ?>
            </div>
            </div>
            <?php endwhile; ?>
            <?php endif;?>
        </div>
        </div>
</section>

















