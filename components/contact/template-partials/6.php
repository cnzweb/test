<!-- Start Contact 6 -->
<?php $bg_image_item  = (get_sub_field('image')) ?  wp_get_attachment_image_src(get_sub_field('image'), 'large') : ''; ?>
<div class="container">
    <?php if (get_sub_field('show_intro') == 1):?>
    <div class="row contact-intro">
        <div class="col-md-12">
            <<?php echo $heading_type; ?> class="contact-heading"><?php the_sub_field('heading'); ?></<?php echo $heading_type; ?>>
            <?php the_sub_field('intro'); ?>
        </div>
    </div>
    <?php endif;?>
    <div class="row contact-image-row">
        <div class="col-md-6" style="background-image: url(<?php echo $bg_image_item[0]; ?>);">
        </div>
        <div class="col-md-6">
        <?php echo gravity_form($form_id, false, false, false, '', false );?>
        </div>
    </div>
</div>
<!-- End Contact 6 -->