<!-- Start Footer 5 -->
<footer class="footer footer-2">
<?php if($image = get_field('footer_background_image','option')):?>
     <?php echo responsive_background('footer',$image);?>
<?php endif;?>
<div class="footer-bg">
 <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
             <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png"  alt="<?php get_field('company_name','option');?>" class="footer-logo"></a>
             <p class="footer-message"><?php the_field('footer_message','option');?></p>
             <?php get_template_part('/common/contact-list');?>
             <?php get_template_part('/common/social-list');?>
        </div>
    </div>
</div>
</div>
</footer>
<!-- End Footer 5 -->