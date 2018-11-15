<div class="block-item block-item-markup-13">
  <div class="block-item-bg">
    <div class="block-item-content ">
        <<?php echo $item_heading_type; ?> class="block-item-heading"><?php the_sub_field('heading'); ?></<?php echo $item_heading_type; ?>>
        <?php the_sub_field('description'); ?>
        <?php echo gravity_form(get_sub_field('form_id'), false, false, false, '', false );?>
        <?php if($show_buttons == 1):?>
            <a href="<?php the_sub_field('button_link'); ?>" class="block-item-btn"><?php the_sub_field('button_text'); ?></a>
        <?php endif;?>
    </div>
  </div>
</div>