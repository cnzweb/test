<!-- Start Footer 2 -->
<footer class="footer">
   <?php if($image = get_field('footer_background_image','option')):?>
    <?php echo responsive_background('footer',$image);?>
   <?php endif;?>
   <div class="footer-bg">
      <div class="container">
         <div class="row">
                <div class="col-md-4">
                  <h3 class="footer-heading">Footer 2</h3>
                    <?php get_template_part('/common/contact-list');?>
                    <?php get_template_part('/common/social-list');?>
               </div>
               <div class="col-md-4">
                  <h3 class="footer-heading">Footer Gallery</h3>
                  <?php $images = get_field('footer_gallery','options');  ?>
                  <?php if( $images ): ?>
                  <div class="footer-gallery">
                     <?php foreach( $images as $image ): ?>
                     <a href="<?php echo $image['sizes']['large']; ?>" class="venobox" data-gall="ex-footer-gallery">
                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <div class="overlay"><span>+</span></div>
                     </a>
                     <?php endforeach; ?>
                  </div>
                  <?php endif; ?>
               </div>
               <div class="col-md-4">
                  <h3 class="footer-heading">Facebook</h3>
                  <div id="fb-root"></div>
                  <script>(function(d, s, id) {
                     var js, fjs = d.getElementsByTagName(s)[0];
                     if (d.getElementById(id)) return;
                     js = d.createElement(s); js.id = id;
                     js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7&appId=185712635185";
                     fjs.parentNode.insertBefore(js, fjs);
                     }(document, 'script', 'facebook-jssdk'));
                  </script>
                  <div class="fb-page" data-href="https://www.facebook.com/bigbluecreative.com.au/" data-tabs="timeline" data-width="500" data-height="240" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                     <blockquote cite="https://www.facebook.com/bigbluecreative.com.au/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bigbluecreative.com.au/">Big Blue Creative</a></blockquote>
                  </div>
               </div>

         </div>
      </div>
   </div>
</footer>
<!-- End Footer 2 -->