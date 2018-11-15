<!-- Start Divider 5 -->
        <div class="container">
           <div class="row divider-intro">
           <div class="col<?php echo $item_width;?>">
               <?php if(get_sub_field('heading')):?> <<?php echo $heading_type; ?> class="divider-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>><?php endif;?>
                <?php the_sub_field('intro'); ?>

                  <?php if($features = get_sub_field('features')):?>
                    <ul class="features">
                    <?php foreach($features as $feature):?>
                    <li><?php echo $feature['feature'];?></li>
                    <?php endforeach;?>
                    </ul>
                  <?php endif;?>
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
<!-- End Divider 5 -->