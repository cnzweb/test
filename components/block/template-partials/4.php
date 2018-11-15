<div class="block-item block-item-markup-4">
  <div class="block-item-bg">

    <div class="block-item-content ">

    <div class="block-item-top-image">
    <?php if($inline_image = get_sub_field('inline_image')):?>
    <?php //print_r($inline_image);?>
        <img src="<?php echo $inline_image['sizes']['block-inline'];?>" class="block-inline-image" alt="<?php echo $inline_image['alt'];?>" width="<?php echo $inline_image['sizes']['block-inline-width'];?>"  height="<?php echo $inline_image['sizes']['block-inline-height'];?>" />
    <?php endif;?>
   </div>

        <<?php echo $item_heading_type; ?>  class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
             <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>" class="block-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
  </div>
</div>