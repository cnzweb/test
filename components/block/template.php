<?php
$show_intro_description  = get_sub_field('show_intro_description');
$show_buttons            = get_sub_field('show_buttons');
$heading_type            = get_sub_field('heading_type');
$item_heading_type       = get_sub_field('item_heading_type');
$style                   = get_sub_field('style');
$item_width              = get_sub_field('item_width');
$bg_image                = get_sub_field('background_image');
$image_size              = get_sub_field('image_size');
?>
<section class="block block-<?php echo $style;?> block-<?php echo $bg_image['id'];?>">
<?php if($bg_image):?>
 <?php echo responsive_background('block-'. $bg_image['id'],$bg_image);?>
<?php endif;?>
<div class="block-bg">
    <?php if (get_sub_field('show_intro') == 1):?>
    <div class="container block-intro">
        <div class="row">
            <div class="col-md-12">
            <<?php echo $heading_type; ?> class="block-intro-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
            <?php if($show_intro_description == 1):?><?php the_sub_field('intro'); ?><?php endif;?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container block-items">
        <div class="row">
        <?php if (have_rows('block_items')) : ?>
         <?php $focus_item_counter = 0;?>
        <?php while (have_rows('block_items')) : the_row();?>
        <?php $focus_item_counter++;?>
            <div class="col<?php if(get_sub_field('block_item_width')):?><?php the_sub_field('block_item_width');?><?php else:?><?php echo $item_width; ?><?php endif;?> ">
            <?php include('template-partials/' .  get_sub_field('block_item_type')  . '.php');?>
            </div>
        <?php endwhile; ?>
        <?php endif;?>
        </div>
    </div>
</div>
</section>