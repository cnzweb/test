<!-- Start Contact 4 -->
        <div class="container">
           <?php if (get_sub_field('show_intro') == 1):?>
           <div class="row contact-intro">
           <div class="col-md-12">
                <<?php echo $heading_type; ?> class="contact-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
                <?php the_sub_field('intro'); ?>
           </div>
           </div>
           <div class="col-md-10 col-md-offset-1">
                <div class="row contacts-row">
                    <div class="col-md-4">
                        <?php if(get_field('email','option')):?>
                        <i class="ex-envelope"></i>
                        <h4>Email</h4>
                        <a href="mailto: <?php the_field('email','option');?>"><?php the_field('email','option');?></a>
                        <?php endif;?>
                    </div>
                    <div class="col-md-4">
                        <?php if(get_field('phone','option')):?>
                        <i class="ex-phone"></i>
                        <h4>Phone</h4>
                        <a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><?php the_field('phone','option');?></a>
                        <?php endif;?>
                    </div>
                    <div class="col-md-4">
                        <?php if(get_field('address','option')):?>
                        <i class="ex-direction"></i>
                        <h4>Address</h4>
                        <?php the_field('address','option');?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
           <?php endif;?>
            <div class="row">
                <div class="col-md-12">
                    <?php echo gravity_form($form_id, false, false, false, '', false );?>
                </div>
            </div>
            <div class="row">
                   <div class="col-md-12">
                    <?php if (get_sub_field('show_social') == 1):?>
                         <?php get_template_part('/common/social-list');?>
                    <?php endif;?>
                </div>
            </div>
        </div>
<!-- End Contact 4 -->























