<?php
// Register our meta box 
function acffc_register_meta_boxes() {
	
	// Register it on pages - on the side 
	add_meta_box( 'acffc-meta-box', __( 'Flexi Cloner', 'textdomain' ), 'acffc_my_display_callback', 'page', 'side');
 
} // register meta func 

add_action( 'add_meta_boxes', 'acffc_register_meta_boxes' );
 

// Load a meta box with a select with all of the pages this site has 
function acffc_my_display_callback( $post ){
	// Check existing posts for content
	$components =  get_field( 'components', $post->ID );
	// If we're on a new post or our existing post's content is empty
	if( $components != '' ){
		echo '<p><i>This page has existing components</i></p>';
		return;
  	} // if new post check

	// Query args to query all the pages (excluding this one )
	$args = array(
	    'post_type' => 'page',
	    'posts_per_page' => '-1',
		'orderby' => 'title',
		'post__not_in' => array($post->ID),
		'order' => 'ASC'
	);

	// The query
	$the_query = new WP_Query( $args );
	$page_array = $the_query->posts;

	// Open a select
	echo '<select id="acffc_value" name="acffc_value" style="width:100%; margin-top:5px;">';
	// Create an empty first item
	echo '<option value="0">- Select a page to clone -</option>';	
	// Loop over all of the pages  
	foreach ( $page_array as $page ) {
		
		// Create an option for each page with the ID of the page as the value 
		echo '<option value="'.$page->ID.'">'.$page->post_title.'</option>';

	}
	
	// Close the select 
	echo '</select>';
	
	// Add a nonce 
	wp_nonce_field( basename( __FILE__ ), 'acffc_post_class_nonce' );
			
}
 

// Function to run on save
function acffc_save_meta_box($post_id) {
	
	// get the post type
	$post_type = get_post_type( $post_id );

	// only run this code if we're on a page
	if($post_type == 'page') {
			
		// Get the current post ID 
		$currnet_post_id = $post_id;

		// Get the post to clone ID
		$post_to_clone_id = ( isset( $_POST['acffc_value'] ) ? sanitize_html_class( $_POST['acffc_value'] ) : '' );
		
		// Check that we have a post ID to clone 
		if( $post_to_clone_id == '' ) { 
			return;
		}

		// Check there are no flexi fields (content) already in the db for the current post
		if( get_field('components', $currnet_post_id) != '' ) { 
			return;
		}

		// Grab all the flexi fields for the selected post
		global $wpdb;
		$meta_fields = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix.'postmeta WHERE post_id = '.$post_to_clone_id, OBJECT );

		// For each field
		foreach($meta_fields as $meta_field) {

			// Define some vars
			$meta_key 	= $meta_field->meta_key;
			$meta_value = $meta_field->meta_value;

			// Ignore these keys
			$keys_to_ignore = array('_edit_last','_edit_lock','_yoast_wpseo_title','_yoast_wpseo_metadesc', '_yoast_wpseo_content_score', 'components');

			// As long as we don't want to ignore the entry
			if( !in_array ( $meta_key, $keys_to_ignore) ) {

				// Add the data to the current post (only if the key is unique)
				add_post_meta( $currnet_post_id, $meta_key, $meta_value, true);

			}// if ignored

			// If the meta key is components
			if( $meta_key == 'components' ) {

				// Unserilaise (as it'll get serialized for us down the line)
				$meta_value = maybe_unserialize($meta_value);

				// Update the seraised array that may already exist
				update_post_meta( $currnet_post_id, 'components', $meta_value);

			}// if components

		} // for each

	} // page check
}

add_action('acf/save_post', 'acffc_save_meta_box', 20);
