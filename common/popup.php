      <div id="expedite-pop-up-message">
         <?php if($image = get_field('pop_up_image','option')):?>
           <img src="<?php echo $image['url'];?>" alt="<?php the_field('pop_up_heading','option');?>" />
         <?php endif;?>
         <div class="expedite-pop-up-message-content">
         <h2 class="expedite-pop-up-message-heading"><?php the_field('pop_up_heading','option');?></h2>
          <p><?php the_field('pop_up_description','option');?></p>
          <a href="<?php the_field('pop_up_button_link','option');?>" class="expedite-pop-up-btn"><?php the_field('pop_up_button_text','option');?></a>
         </div>
        </div>
        <script>
			jQuery(function ($) {
				jQuery('#expedite-pop-up-message').firstVisitPopup({
					cookieName : 'popupmessages',
					/*showAgainSelector: '.footer', */
                    frequency: <?php echo get_field('pop_up_frequency','option');?>
				});
			});
		</script>