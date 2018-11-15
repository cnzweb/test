<!-- Start Divider 1 -->
        <div class="container">
           <div class="row divider-intro">
           <div class="col<?php echo $item_width;?>">
               <?php if(get_sub_field('sub_heading')):?><<?php echo $sub_heading_type; ?> class="divider-sub-heading"><?php the_sub_field('sub_heading'); ?></<?php echo $sub_heading_type; ?>><?php endif;?>
               <?php if(get_sub_field('heading')):?> <<?php echo $heading_type; ?> class="divider-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>><?php endif;?>
                <?php the_sub_field('intro'); ?>
                 <?php if($buttons = get_sub_field('buttons') AND $show_buttons == 1):?>
                    <ul class="divider-buttons">
                        <?php foreach($buttons as $button):?>
                            <li><a href="<?php echo $button['button_link'];?>" class="divider-btn"><span><?php echo $button['button_text'];?></span></a></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
           </div>
           </div>
           
        </div>
<!-- End Divider 1 -->