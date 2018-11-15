<?php
$style          = get_sub_field('style');
$markup         = get_sub_field('markup');
$bg_image       = get_sub_field('background_image');
$heading_type   = get_sub_field('heading_type');
$images         = get_sub_field('images');
?>
<section class="side side-<?php echo $style;?>">
<?php if($bg_image):?>
 <?php echo responsive_background('side',$bg_image);?>
<?php endif;?>
<div class="side-bg">
    <div class="container">
        <div class="row">
           <?php include('template-partials/' . $markup . '.php');?>
        </div>
    </div>
</div>
</section>
