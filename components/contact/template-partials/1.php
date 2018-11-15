<!-- Start Contact 1 -->
        <div class="container">
           <?php if (get_sub_field('show_intro') == 1):?>
           <div class="row contact-intro">
           <div class="col-md-12">
                <<?php echo $heading_type; ?> class="contact-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
                <?php the_sub_field('intro'); ?>
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
<!-- End Contact 1 -->























