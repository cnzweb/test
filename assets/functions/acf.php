<?php

/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* ACF Setting
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Sitewide Options');
}
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Speed up acf...
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
add_filter('acf/settings/remove_wp_meta_box', '__return_true');


add_action('admin_head', 'admin_styles');
function admin_styles() {
    ?>
	<style>
    .acf-fc-popup a[data-layout="slider"]{
        /* display: none; */
    }

	.ex-small-wys .acf-editor-wrap iframe {
			height: auto !important;
			min-height: 150px;
	}
    .ex-small-wys .wp-editor-area{
         	height: auto !important;
			min-height: 150px;
    }
	</style>
	<?php
}


function debug_row(){
  return  '<p style="padding: 1rem;margin:0;background-color: #ccc; text-align:center">' . ucfirst(get_row_layout()) . ' ~ ' . get_sub_field("markup") . '.php</p>';
}
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDzbBbgx-H-QcIr9GKr8ExhWonNJIamGBE';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>