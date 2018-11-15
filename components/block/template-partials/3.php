<div class="block-item block-item-markup-3">
  <div class="block-item-bg">
    <div class="block-item-content">
    <div class="row">
    <div class="col-md-6">
        <<?php echo $item_heading_type; ?> class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
        <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>" class="block-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
   </div>
   <div class="col-md-6">
    <?php if($inline_image = get_sub_field('inline_image')):?>
    <?php //print_r($inline_image);?>
        <img src="<?php echo $inline_image['sizes']['block-inline'];?>" class="block-inline-image" alt="<?php echo $inline_image['alt'];?>" width="<?php echo $inline_image['sizes']['block-inline-width'];?>"  height="<?php echo $inline_image['sizes']['block-inline-height'];?>" />
    <?php endif;?>
   </div>
   </div>
   </div>
  </div>
</div>