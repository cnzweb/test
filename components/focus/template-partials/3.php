<!-- Start Focus 3 (Icon Side Heading) -->
<div class="focus-item icon-heading-side">
 <div class="focus-item-bg">
    <div class="focus-item-content">
        <div class="focus-item-content-icon"> <i class="fa <?php the_sub_field('icon'); ?>"></i>    <<?php echo $item_heading_type; ?> class="focus-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>   </div>
        <?php the_sub_field('description'); ?>
          <?php if($show_buttons == 1):?>  
            <a href="<?php the_sub_field('button_link'); ?>" class="focus-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
  </div>
</div>
<!-- End Focus 3 -->