<!-- Start Footer 3 -->
<footer class="footer">
    <?php if($image = get_field('footer_background_image','option')):?>
     <?php echo responsive_background('footer',$image);?>
    <?php endif;?>
   <div class="footer-bg">
      <div class="container">
         <div class="row">
               <div class="col-md-6">
                  <h3 class="footer-heading">Footer 3</h3>
                  <p class="footer-message"><?php the_field('footer_message','option');?></p>
                    <?php get_template_part('/common/contact-list');?>
                    <?php get_template_part('/common/social-list');?>
               </div>
               <div class="col-md-6">
                  <h3 class="footer-heading">Get in Touch</h3>
                  <div class="footer-form">
                     <?php gravity_form( 1, false, false, false, '', false );?>
                  </div>
               </div>
            </div>
      </div>
   </div>
</footer>
<!-- End Footer 3 -->