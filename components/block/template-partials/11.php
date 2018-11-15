<!-- Accordian Block Component Partial 11 -->
<div class="block-item block-item-markup-11">
  <div class="block-item-bg">
    <div class="block-item-content">
        <?php if(get_sub_field('heading') != ''):?>
        <<?php echo $item_heading_type; ?> class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php endif;?>
        <?php the_sub_field('description'); ?>
            <?php if (have_rows('repeatable_content')) : ?>
            <div class="expedite-accordian">
            <div class="responsive-tabs">
                   <?php while (have_rows('repeatable_content')) : the_row();?>
                    <h2><?php the_sub_field('heading'); ?></h2>
                    <div><?php the_sub_field('description'); ?></div>
                   <?php endwhile; ?>
            </div>
            </div>
            <?php endif;?>
    </div>
  </div>
</div>