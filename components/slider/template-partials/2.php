<div class="slick-slider">
<?php if (have_rows('slider_items')) : ?>
    <?php while (have_rows('slider_items')) : the_row();?>
    <?php if($image = get_sub_field('image')):?>
    <div class="slider-full slider-full-<?php echo $image['id'];?>">
    <?php echo responsive_background('slider-full-' . $image['id'],$image);?>
    <div class="slider-bg">
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col<?php echo $content_width;?>">
                       <div class="content-bg">
                         <?php if(get_sub_field('sub_heading') AND $show_sub_heading == 1):?><h3 class="slider-sub-heading"><?php the_sub_field('sub_heading'); ?></h3><?php endif;?>
                         <?php if(get_sub_field('heading')):?><h2 class="slider-heading"><?php the_sub_field('heading'); ?></h2><?php endif;?>
                         <?php if(get_sub_field('description') AND $show_description == 1):?><p><?php the_sub_field('description'); ?></p><?php endif;?>
                         <?php if($buttons = get_sub_field('buttons') AND $show_buttons == 1):?>
                             <ul class="slider-buttons">
                                 <?php foreach($buttons as $button):?>
                                    <li><a href="<?php echo $button['button_link'];?>" class="slider-btn"><span><?php echo $button['button_text'];?></span></a></li>
                                 <?php endforeach;?>
                             </ul>
                         <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <?php endif;?>
 <?php endwhile; ?>
<?php endif;?>
</div>
<?php if(count($sliders) > 1):?>
<script type="text/javascript">
    jQuery(document).ready(function($){
      $('.slick-slider').slick({
       dots: true,
       infinite: true,
       autoplay: true,
       speed: 500,
       slidesToShow: 1,
       adaptiveHeight: true,
       lazyLoad: 'ondemand',
       fade: false,
       responsive: [
       {
        breakpoint: 850,
        settings: {
        arrows: false,
        }
       }
   ]
      });
    });
</script>
<?php endif;?>