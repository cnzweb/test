<div class="block-item block-item-markup-6">
  <div class="block-item-bg">
    <div class="row">
    <div class="col-md-6">
    <div class="block-item-content">
        <<?php echo $item_heading_type; ?> class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
        <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>" class="block-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
   </div>
   <div class="col-md-6">
   <?php if($two_images = get_sub_field('two_images')):?>
   <?php foreach($two_images as $image):?>
       <div class="block-images-vertical" style="background-image: url(<?php echo $image['image']['sizes']['large'];?>);">&nbsp;</div>
    <?php endforeach;?>
    <?php endif;?>
   </div>
   </div>
  </div>
</div>