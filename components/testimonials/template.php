<?php
$heading_type    = get_sub_field('heading_type');
$item_width      = get_sub_field('item_width');
$style           = get_sub_field('style');
$markup          = get_sub_field('markup');
$bg_image        = get_sub_field('background_image');
?>
<section class="testimonial testimonial-<?php echo $style;?>">
<?php if($bg_image):?>
 <?php echo responsive_background('testimonial',$bg_image);?>
<?php endif;?>
<div class="testimonial-bg">
    <?php if (get_sub_field('show_intro') == 1):?>
    <div class="container testimonial-intro">
        <div class="row">
            <div class="col-md-12">
            <<?php echo $heading_type; ?> class="testimonial-intro-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>

             <?php if (get_sub_field('show_intro_description') == 1):?><?php the_sub_field('intro'); ?><?php endif;?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container">
        <div class="row">
        <?php if ( have_rows('testimonial_items')) : ?>
         <div class="col<?php echo $item_width; ?>">
         <div class="testimonial-slider">
        <?php while (have_rows('testimonial_items')) : the_row();?>
            <?php include('template-partials/' . $markup . '.php');?>
        <?php endwhile; ?>
        </div>
        </div>
        <?php endif;?>
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
    jQuery(document).ready(function($){
      $('.testimonial-slider').slick({
       dots: true,
       infinite: true,
       autoplay: false,
       slidesToShow: 1,
       arrows: true,
       adaptiveHeight: true,
       fade: false
      });
    });
</script>