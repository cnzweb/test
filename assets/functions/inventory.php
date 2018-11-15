<?php
// Register inventory CPT
function register_inventory_cpt(){
	// creating (registering) the custom type
	  register_post_type( 'alchemy_inventory', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		 // let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Inventory', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Inventory Item', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Inventory Items', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Inventory Item', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Inventory Items', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Inventory Item', 'jointswp'), /* New Display Title */
			'view_item' => __('View Inventory Item', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Inventory Item', 'jointswp'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the post type for inventory items', 'jointswp' ), /* Custom Type Description */
			'public' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => false,
			'menu_position' => 22,
			'menu_icon' => 'dashicons-text',
			'has_archive' => false,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'author', 'custom-fields')
		 )
	);
}

// adding the function to the Wordpress init
add_action( 'init', 'register_inventory_cpt');
// Load this into our flexible content field called 'components'
add_filter('acf/load_field/name=components', 'alchemy_acf_inventory');

// Function to remove inventory from inventory CPT
function alchemy_acf_inventory($field) {

	// Get post type
              $post_id = get_the_ID();
    //print_r($field);

	$post_type = get_post_type($post_id);

	// Only run this code if we on the inventory post type
	// We want to prevent the inventory field from showing
	if($post_type == 'alchemy_inventory') {

		// Search the layouts array for a filed with the name of inventory & store the key
		$key = array_search('inventory', array_column($field['layouts'], 'name'));

		// Remove the inventory from the array based on the key
		unset($field['layouts'][$key]);

		// Return the field
		return $field;

	} else {

		// Return the field (not modified)
		return $field;

	}
}
if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
        $array = array();
        foreach ($input as $value) {
            if ( ! isset($value[$columnKey])) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            }
            else {
                if ( ! isset($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if ( ! is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}
?>