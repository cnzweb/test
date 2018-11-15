<?php
$sliders           = get_sub_field('slider_items');
$show_sub_heading  = get_sub_field('show_sub_heading');
$show_description  = get_sub_field('show_description');
$show_buttons      = get_sub_field('show_buttons');
$style             = get_sub_field('style');
$markup            = get_sub_field('markup');
$bg_image          = get_sub_field('background_image');
$image_size        = get_sub_field('image_size');
$content_width     = get_sub_field('content_width');
?>
<?php if($sliders):?>
<div class="slider slider-<?php echo $style;?>">
 <?php include('template-partials/' . $markup . '.php');?>
</div>
<?php endif;?>