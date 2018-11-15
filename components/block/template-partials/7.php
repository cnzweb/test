<?php  $images = get_sub_field('gallery'); ?>
<div class="block-item block-item-markup-7">
  <div class="block-item-bg clearfix">
     <div class="block-item-gallery">
     <?php if($images):	foreach( $images as $image ): ?>
         <a href="<?php echo $image['sizes']['large']; ?>" class="venobox" data-gall="block-gallery">
             <img src="<?php echo $image['sizes']['gallery_thumb']; ?>" alt="<?php echo $image['alt']; ?>" />
        	 <div class="overlay"><span>+</span></div>
         </a>
     <?php endforeach; endif; ?>
    </div>
  </div>
</div>