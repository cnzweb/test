<header class="header">
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