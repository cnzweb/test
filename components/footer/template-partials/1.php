<!-- Start Footer 1 -->
<footer class="footer">
    <?php if($image = get_field('footer_background_image','option')):?>
     <?php echo responsive_background('footer',$image);?>
    <?php endif;?>
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="footer-heading">Footer 1</h3>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png"  alt="<?php get_field('company_name','option');?>" class="footer-logo"></a>
                    <p class="footer-message"><?php the_field('footer_message','option');?></p>
                </div>
                <div class="col-md-4">
                    <h3 class="footer-heading">Contact Us</h3>
                    <?php get_template_part('/common/contact-list');?>
                    <?php get_template_part('/common/social-list');?>
                </div>
                <div class="col-md-4">
                    <h3  class="footer-heading">Opening Hours</h3>
                    <?php if( have_rows('opening_hours','option') ): ?>
                    <ul class="footer-opening-hours">
                    <?php while( have_rows('opening_hours','option') ): the_row();?>
                    <li><strong><?php the_sub_field('day');?></strong> - <?php the_sub_field('hours');?></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                </div>
        </div>
    </div>
</footer>
<!-- End Footer 1 -->