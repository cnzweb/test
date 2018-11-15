<!-- Start Focus 6 (Background Image) -->
<?php $bg_image_item = (get_sub_field('image')) ?  wp_get_attachment_image_src(get_sub_field('image'), $image_size) : ''; ?>
<div class="focus-item image-bg" style="background-image: url(<?php echo $bg_image_item[0]; ?>);">
    <div class="focus-item-bg">
        <div class="focus-item-content">
             <<?php echo $item_heading_type; ?> class="focus-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
            <?php the_sub_field('description'); ?>
              <?php if($show_buttons == 1):?>  
                <a href="<?php the_sub_field('button_link'); ?>" class="focus-item-btn"><?php the_sub_field('button_text'); ?></a>
            <?php endif;?>
        </div>
     </div>
</div>
<!-- End Focus 6 -->