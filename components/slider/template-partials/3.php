   <div class="carousel">
    <?php if (have_rows('slider_items')) : ?>
        <?php while (have_rows('slider_items')) : the_row();?>
        <?php if($image = get_sub_field('image')):?>
        <div class="slider-skinny" style="background-image: url(<?php echo $image['sizes']['slider-desk']; ?>);">
        <div class="slider-bg">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col<?php echo $content_width;?>">
                           <div class="content-bg">
                                <?php if(function_exists('yoast_breadcrumb')):?>
                                <?php yoast_breadcrumb('<p class="breadcrumbs">','</p>');?>
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