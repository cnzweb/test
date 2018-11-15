<!-- Start Focus 4 (Image) -->
<div class="focus-item image">
 <div class="focus-item-bg">
    <div class="focus-item-image clearfix">
      <?php if (get_sub_field('image')):?>
      <?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), $image_size); ?>
      <img class="focus-list__image"  src="<?php echo $thumb[0]; ?>" />
	 <?php endif;?>
    </div>
    <div class="focus-item-content">
        <<?php echo $item_heading_type; ?> class="focus-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
        <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>"  class="focus-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
  </div>
</div>
<!-- End Focus 4 (Image) -->