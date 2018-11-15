<ul class="social-icons icon-circle icon-rotate list-unstyled list-inline">
    <?php if(get_field('facebook_url','option')):?><li><a href="<?php the_field('facebook_url','option');?>" rel="nofollow" target="_blank"><i class="ex ex-facebook"></i></a></li> <?php endif;?>
    <?php if(get_field('twitter_url','option')):?><li><a href="<?php the_field('twitter_url','option');?>" rel="nofollow" target="_blank"><i class="ex  ex-twitter"></i></a></li><?php endif;?>
    <?php if(get_field('youtube_url','option')):?><li><a href="<?php the_field('youtube_url','option');?>" rel="nofollow" target="_blank"><i class="ex  ex-youtube"></i></a></li><?php endif;?>
    <?php if(get_field('instagram_url','option')):?><li><a href="<?php the_field('instagram_url','option');?>"  rel="nofollow" target="_blank"><i class="ex  ex-instagram"></i></a> </li><?php endif;?>
    <?php if(get_field('linkedin_url','option')):?><li><a href="<?php the_field('linkedin_url','option');?>"  rel="nofollow" target="_blank"><i class="ex ex-linkedin"></i></a> </li><?php endif;?>
    <?php if(get_field('google_plus_url','option')):?><li><a href="<?php the_field('google_plus_url','option');?>"><i class="ex ex-googleplus"></i></a></li><?php endif;?>
    <?php if(get_field('vimeo_url','option')):?><li><a href="<?php the_field('vimeo_url','option');?>" rel="nofollow" target="_blank"><i class="ex ex-vimeo"></i></a></li><?php endif;?>
</ul>