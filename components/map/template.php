<?php
$style = get_sub_field('style');
?>
<section class="map">
    <?php $location = get_sub_field('location');?>
    <?php if(!empty($location)):?>
    <div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif;?>
</section>