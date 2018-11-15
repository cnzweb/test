<!-- Start Focus 1 (Default) -->
<div class="focus-item">
   <div class="focus-item-bg">
      <div class="focus-item-icon">
         <?php if(get_sub_field('button_link') != ''):?>
         <a href="<?php the_sub_field('button_link'); ?>"><i class="fa <?php the_sub_field('icon'); ?>"></i></a>
         <?php else:?>
        <i class="fa <?php the_sub_field('icon'); ?>"></i>
         <?php endif;?>
      </div>
      <div class="focus-item-content">
         <<?php echo $item_heading_type; ?> class="focus-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
         <?php the_sub_field('description'); ?>
          <?php if($show_buttons == 1):?>
         <a href="<?php the_sub_field('button_link'); ?>" class="focus-item-btn"><?php the_sub_field('button_text'); ?></a>
         <?php endif;?>
      </div>
   </div>
</div>
<!-- End Focus 1 -->