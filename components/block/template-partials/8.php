<?php  $images = get_sub_field('gallery'); ?>
<div class="block-item block-item-markup-8">
    <div class="block-item-bg">
     <div class="block-item-carousel">
     <div class="slider-i">
     <?php if($images):	foreach( $images as $image ): ?>
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
     <?php endforeach; endif; ?>
     </div>
    </div>
  </div>
</div>
<?php if(count($images) > 1):?>
<script type="text/javascript">
    jQuery(document).ready(function($){
      $('.slider-i').slick({
       dots: true,
       infinite: true,
       autoplay: true,
       speed: 500,
       slidesToShow: 1,
       adaptiveHeight: true,
       lazyLoad: 'ondemand',
       fade: false
      });
    });
</script>
<?php endif;?>