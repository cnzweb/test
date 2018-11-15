<?php $bg_image_item   = (get_sub_field('image')) ?  wp_get_attachment_image_src(get_sub_field('image'), $image_size) : ''; ?>
<div class="block-item block-item--background-image block-item-markup-2" style="background-image: url(<?php echo $bg_image_item[0]; ?>);">
  <div class="block-item-bg">
    <div class="block-item-content">
        <<?php echo $item_heading_type; ?>  class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
             <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>" class="block-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
  </div>
</div>