<?php
// Loop over the ACF flexible fields on this page and render component

//print_r(get_field('components'));
?>
<?php if( have_rows('components') ): ?>
	<?php while(have_rows('components') ): the_row(); ?>
			<?php if(locate_template('components/' . get_row_layout() . '/template.php') != ''):?>
            <?php //echo debug_row();?>
            <?php include(get_row_layout() .'/template.php'); ?>
            <?php  else:?>
             <!-- If we can't find the file in either theme, fail gracefully -->
            <?php endif;?>
	<?php endwhile; ?>
<?php endif; ?>