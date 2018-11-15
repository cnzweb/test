<?php
$item_width        = get_sub_field('item_width');
$markup            = get_sub_field('markup');
$style             = get_sub_field('style');
$bg_image          = get_sub_field('background_image');
$heading_type      = get_sub_field('heading_type');
$form_id           = get_sub_field('form_id');   
?>
<div class="contact contact-<?php echo $style;?> contact-<?php echo $bg_image['id'];?>">
<?php if($bg_image):?>
 <?php echo responsive_background('contact-'. $bg_image['id'],$bg_image);?>
<?php endif;?>
<div class="contact-bg">
 <?php include('template-partials/' . $markup . '.php');?>
</div>
</div>