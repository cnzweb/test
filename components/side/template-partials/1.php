<div class="col-md-8">
    <<?php echo $heading_type; ?> class="side-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
    <?php the_sub_field('description'); ?>
</div>
<div class="col-md-4">
    <?php if($images):?>
        <div class="side-gallery">
        <?php foreach($images as $image):?>
            <a href="<?php echo $image['sizes']['large'];?>" class="venobox side-image">
                <img src="<?php echo $image['sizes']['gallery_thumb'];?>" width="<?php echo $image['sizes']['gallery_thumb'];?>" height="<?php echo $image['sizes']['gallery_thumb-height'];?>" alt="<?php echo $image['alt'];?>" class="side-image"/>
                <div class="overlay"><span>+</span></div>
            </a>
        <?php endforeach;?>
        </div>
    <?php endif;?>
</div>