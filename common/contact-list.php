 <ul class="contact-details">
    <?php if(get_field('phone','option')):?><li><div><i class="ex-phone"></i><span>Telephone</span></div><div><a href="tel:<?php echo str_replace(' ', '', get_field('phone','option'));?>"><?php the_field('phone','option');?></a></div></li><?php endif;?>
    <?php if(get_field('mobile','option')):?><li><div><i class="ex-tablet"></i><span>Mobile</span></div><div> <a href="tel:<?php echo str_replace(' ', '', get_field('mobile','option'));?>"><?php the_field('mobile','option');?></a></div></li><?php endif;?>
    <?php if(get_field('email','option')):?><li><div><i class="ex-envelope"></i><span>Email</span></div><div> <a href="mailto: <?php the_field('email','option');?>"><?php the_field('email','option');?></a></div></li><?php endif;?>
    <?php if(get_field('fax','option')):?><li><div><i class="ex-print"></i><span>Fax</span></div><div> <?php the_field('fax','option');?></div></li><?php endif;?>
    <?php if(get_field('address','option')):?><li><div><i class="ex-location-pin"></i><span>Address</span></div><div> <?php the_field('address','option');?></div></li><?php endif;?>
    <?php if(get_field('opening_hours_simple','option')):?><li><div><i class="ex ex-clock"></i><span>Hours</span></div><div> <?php the_field('opening_hours_simple','option');?></div></li><?php endif;?>
</ul>