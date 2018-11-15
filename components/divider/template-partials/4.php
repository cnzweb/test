<!-- Start Divider 4 -->
        <div class="container">
           <div class="col<?php echo $item_width;?>">
                <?php if($logos):?>
                <div class="divider-logo-slider">
                 <?php foreach($logos as $logo):?>

                    <div class="divider-logo-slider-item">
                      <img src="<?php echo $logo['image']['sizes']['large'];?>" alt="<?php echo $logo['image']['alt'];?>" width="<?php echo $logo['image']['sizes']['large'];?>" height="<?php echo $logo['image']['sizes']['large'];?>" />
                    </div>
                 <?php endforeach;?>
                 </div>
               <?php endif;?>
           </div>
        </div>
    <script type="text/javascript">
    jQuery(document).ready(function($){
      $('.divider-logo-slider').slick({
       dots: true,
       arrows: false,
       infinite: true,
       autoplay: true,
       speed: 500,
       slidesToShow: 5,
       adaptiveHeight: true,
       lazyLoad: 'ondemand',
       fade: false,
       responsive: [
       {
        breakpoint: 768,
        settings: {
        slidesToShow: 4
       }
       },
       {
       breakpoint: 480,
       settings: {
       slidesToShow: 2
      }
      }
     ]
      });
    });
</script>
<!-- End Divider 4 -->