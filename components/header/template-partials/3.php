<header class="header">
<div class="header-top">
 <div class="container">
    <div class="row">
        <div class="col-md-9">
            <ul class="header-contact-details">
                <?php if(get_field('phone','option')):?><li>Phone: <a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><?php the_field('phone','option');?></a></li><?php endif;?>
                <?php if(get_field('email','option')):?><li>Email: <a href="mailto: <?php the_field('email','option');?>"><?php the_field('email','option');?></a></li><?php endif;?>
           </ul>
        </div>
        <div class="col-md-3">
            <ul class="header-social-icons">
                <?php if(get_field('facebook_url','option')):?><li><a href="<?php the_field('facebook_url','option');?>"><i class="ex-facebook"></i></a></li> <?php endif;?>
                <?php if(get_field('twitter_url','option')):?><li><a href="<?php the_field('twitter_url','option');?>"><i class="ex-twitter"></i></a></li><?php endif;?>
                <?php if(get_field('youtube_url','option')):?><li><a href="<?php the_field('youtube_url','option');?>"><i class="ex-youtube"></i></a></li><?php endif;?>
                <?php if(get_field('instagram_url','option')):?><li><a href="<?php the_field('instagram_url','option');?>"><i class="ex-instagram"></i></a> </li><?php endif;?>
                <?php if(get_field('vimeo_url','option')):?><li><a href="<?php the_field('vimeo_url','option');?>"><i class="ex-vimeo"></i></a></li><?php endif;?>
                <?php if(get_field('phone','option')):?><li class="hidden-md hidden-lg"><a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><i class="ex-phone"></i></a></li><?php endif;?>
                <?php if(get_field('email','option')):?><li class="hidden-md hidden-lg"><a href="mailto: <?php the_field('email','option');?>"><i class="ex-envelope"></i></a></li><?php endif;?>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="header-bottom">
 <div class="container">
    <div class="row">
        <div class="col-md-12">
         <div class="header-bottom-lnp">
         <a href="<?php echo home_url(); ?>" class="header-bottom-lnp-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"  alt="<?php the_field('business_name','option');?>" id="header-logo"></a>
         <nav  class="header-bottom-lnp-nav"><?php echo expedite_top_nav();?></nav>
         <ul class="header-bottom-lnp-contacts">
            <?php if(get_field('phone','option')):?><li><i class="ex-phone"></i><a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><?php the_field('phone','option');?></a></li><?php endif;?>
         </ul>
        </div>
        </div>
    </div>
</div>
</div>
</header>