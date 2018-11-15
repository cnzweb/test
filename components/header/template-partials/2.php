<header class="header">
<div class="header-top">
 <div class="container">
    <div class="row">
        <div class="col-lg-9">
            <ul class="header-contact-details">
                 <?php if(get_field('phone','option')):?><li><div><i class="ex-phone"></i><span>Telephone</span></div><div><a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><?php the_field('phone','option');?></a></div></li><?php endif;?>
                 <?php if(get_field('email','option')):?><li><div><i class="ex-envelope"></i><span>Email</span></div><div> <a href="mailto: <?php the_field('email','option');?>"><?php the_field('email','option');?></a></div></li><?php endif;?>
                 <!-- <?php if(get_field('address','option')):?><li><div><i class="ex-location-pin"></i><span>Address</span></div><div> <?php the_field('address','option');?></div></li><?php endif;?> -->
           </ul>
        </div>
        <div class="col-lg-3">
            <ul class="header-social-icons">
                <?php if(get_field('facebook_url','option')):?><li><a href="<?php the_field('facebook_url','option');?>"><i class="ex-facebook"></i></a></li> <?php endif;?>
                <?php if(get_field('twitter_url','option')):?><li><a href="<?php the_field('twitter_url','option');?>"><i class="ex-twitter"></i></a></li><?php endif;?>
                <?php if(get_field('youtube_url','option')):?><li><a href="<?php the_field('youtube_url','option');?>"><i class="ex-youtube"></i></a></li><?php endif;?>
                <?php if(get_field('instagram_url','option')):?><li><a href="<?php the_field('instagram_url','option');?>"><i class="ex-instagram"></i></a> </li><?php endif;?>
                <?php if(get_field('vimeo_url','option')):?><li><a href="<?php the_field('vimeo_url','option');?>"><i class="ex-vimeo"></i></a></li><?php endif;?>
                <?php if(get_field('phone','option')):?><li class="d-lg-none"><a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><i class="ex-phone"></i></a></li><?php endif;?>
                <?php if(get_field('email','option')):?><li class="d-lg-none"><a href="mailto: <?php the_field('email','option');?>"><i class="ex-envelope"></i></a></li><?php endif;?>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="header-bottom">
 <div class="container">
    <div class="row">
        <div class="col-md-3">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"  alt="<?php the_field('business_name','option');?>" id="header-logo"></a>
        </div>
        <div class="col-md-9">
          <nav><?php echo expedite_top_nav();?></nav>
        </div>
    </div>
</div>
</div>
</header>