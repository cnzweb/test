<!-- Start Footer 4 -->
<footer class="footer">
    <?php if($image = get_field('footer_background_image','option')):?>
     <?php echo responsive_background('footer',$image);?>
    <?php endif;?>
   <div class="footer-bg">
      <div class="container">
         <div class="row">
               <div class="col-md-4">
                  <h3 class="footer-heading">Footer 4</h3>
                    <?php get_template_part('/common/contact-list');?>
                    <?php get_template_part('/common/social-list');?>
               </div>
                <div class="col-md-4">
                 <h3 class="footer-heading">Navigation</h3>
                 <div class="row">
                 <div class="col-xs-6">
                  <nav><?php echo expedite_footer_nav1();?></nav>
                 </div>
                  <div class="col-xs-6">
                   <nav><?php echo expedite_footer_nav2();?></nav>
                 </div>
                 </div>
                </div>
                <div class="col-md-4">
                  <h3 class="footer-heading">About Us</h3>
                  <p class="footer-message"><?php the_field('footer_message','option');?></p>
               </div>
         </div>
      </div>
   </div>
</footer>
<!-- End Footer 4 -->