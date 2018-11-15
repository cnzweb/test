


<?php // Inventory Item Template


// Get inventory item ID
$inventory_item_id = get_sub_field('inventory_item');

// wp query to find a single inventory item
$args = array(
	'p' => $inventory_item_id,
	'post_type' => 'any',
	'posts_per_page' => '1'
);

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();

// now we are on that post, find the featured content rows that have been added to this inventory item
while (the_flexible_field('components')) {

	//echo 'I am here .... <pre><code>'. get_row_layout() .' component '. get_sub_field('layout').' </code></pre>';

	if (locate_template('components/' . get_row_layout() . '/template.php') != '') {

    //echo 'I am hereasdad';
    //echo get_row_layout();
		// If we can find the template in this theme, get the template part
		get_template_part('components/'. get_row_layout() .'/template');
	} else {
		// If we can't find the file in either theme, fail gracefully 
	}
	
}
// reset post data to get out of the inventory item
wp_reset_postdata();

endwhile;
endif;
wp_reset_postdata();

?>