<?php
$item_width        = get_sub_field('item_width');
$markup            = get_sub_field('markup');
$style             = get_sub_field('style');
$bg_image          = get_sub_field('background_image');
$heading_type      = get_sub_field('heading_type');
$sub_heading_type  = get_sub_field('sub_heading_type');
$show_buttons      = get_sub_field('show_buttons'); 
$logos             = get_sub_field('logos');   
?>
<div class="divider divider-<?php echo $style;?> divider-<?php echo $bg_image['id'];?>">
<?php if($bg_image):?><?php echo responsive_background('divider-' . $bg_image['id'],$bg_image);?><?php endif;?>
<div class="divider-bg">
 <?php include('template-partials/' . $markup . '.php');?>
</div>
</div>

