<?php
$heading_type      = get_sub_field('heading_type');
$item_heading_type = get_sub_field('item_heading_type');
$show_description  = get_sub_field('show_description');
$show_buttons      = get_sub_field('show_buttons');
$style             = get_sub_field('style');
$markup            = get_sub_field('markup');
$item_width        = get_sub_field('item_width');
$bg_image          = get_sub_field('background_image');
$image_size        = get_sub_field('image_size');
?>
<section class="focus focus-<?php echo $style;?> focus-<?php echo $bg_image['id'];?>">
<?php if($bg_image):?>
 <?php echo responsive_background('focus-' . $bg_image['id'],$bg_image);?>
<?php endif;?>
<div class="focus-bg">
    <?php if (get_sub_field('show_intro') == 1):?>
    <div class="container focus-intro">
        <div class="row">
            <div class="col-md-12">
            <<?php echo $heading_type; ?> class="focus-intro-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
            <?php if (get_sub_field('show_intro_description') == 1):?><?php the_sub_field('intro'); ?><?php endif;?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container">
        <div class="row">
        <?php if ( have_rows('focus_items')) : ?>
        <?php while (have_rows('focus_items')) : the_row();?>
            <div class="col<?php echo $item_width; ?>">
                <?php include('template-partials/' . $markup . '.php');?>
            </div>
        <?php endwhile; ?>
        <?php endif;?>
        </div>
    </div>
</div>
</section> 