<!-- Start Divider 2 -->
    <div class="container">
        <div class="row">
            <div class="col<?php echo $item_width;?>">
                <div class="divider-skinny">
                <?php if(get_sub_field('heading')):?> <<?php echo $heading_type; ?> class="divider-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>><?php endif;?>
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
    </div>
<!-- End Divider 2 -->