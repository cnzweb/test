<!-- Accordian Block Component Partial 12 -->
<div class="block-item block-item-markup-12">
  <div class="block-item-bg">
    <div class="block-item-content">
            <?php if (have_rows('repeatable_content')) : ?>
                   <div class="row">
                   <?php while (have_rows('repeatable_content')) : the_row();?>
                    <div class="col-md-4">
                        <div class="block-item-icons">
                        <i class="<?php the_sub_field('icon'); ?>"></i>
                        <h2><?php the_sub_field('heading'); ?></h2>
                        <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                   <?php endwhile; ?>
                    </div>
            <?php endif;?>
    </div>
  </div>
</div>