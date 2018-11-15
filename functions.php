<?php

require_once(get_template_directory().'/assets/functions/tinymce.php');
require_once(get_template_directory().'/assets/functions/cleanup.php');
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/inventory.php');
require_once(get_template_directory().'/assets/functions/acf.php');
require_once(get_template_directory().'/assets/functions/acfcloner.php');
require_once(get_template_directory().'/assets/functions/blog.php');
require_once(get_template_directory().'/assets/functions/min_admin.php');
require_once(get_template_directory().'/assets/functions/shortcodes.php');
require_once(get_template_directory().'/assets/functions/posttype.php');



/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* General Settings
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
add_theme_support('menus');
add_theme_support('post-thumbnails');
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Image Sizes
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
add_image_size('slider-desk', 1920, 800, true);
add_image_size('slider-tablet', 1024, 768, true);
add_image_size('slider-phone', 480, 320, true);
add_image_size('slider_image_narrow', 1920, 300, true);
add_image_size('footer_thumb', 220, 165, true);
add_image_size('gallery_thumb', 500, 500, true);
add_image_size('blog_thumb', 300, 200, true);
add_image_size('block-inline', 580, 370, true);
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Load Scripts
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
function load_scripts(){
  if (!is_admin()){
  wp_enqueue_style('mai', get_template_directory_uri() . '/assets/css/dist/main.min.css');
  wp_enqueue_style('ex-icon', 'https://s3.amazonaws.com/icomoon.io/117026/Expedite/style.css?zfr9bx');
  //wp_enqueue_style('client-icon', ''); 
  wp_enqueue_script('jquery','http://code.jquery.com/jquery-1.8.0.min.js');
  wp_enqueue_script('match',get_template_directory_uri() .'/assets/js/jquery.matchHeight.js');
  wp_enqueue_script('slick',get_template_directory_uri() .'/assets/slick/slick.min.js');
  wp_enqueue_script('veno',get_template_directory_uri() .'/assets/venobox/venobox.min.js');
  wp_enqueue_script('tab',get_template_directory_uri() .'/assets/js/responsiveTabs.js');
  wp_enqueue_script('g-map','https://maps.googleapis.com/maps/api/js?key=AIzaSyDzbBbgx-H-QcIr9GKr8ExhWonNJIamGBE');
  wp_enqueue_script('acf-map',get_template_directory_uri() .'/assets/js/acf-map.js');
  wp_enqueue_script('popup',get_template_directory_uri() .'/assets/js/jquery.firstVisitPopup.js');
  wp_enqueue_script('glo',get_template_directory_uri() .'/assets/js/global.js');
  }
}
add_action('get_header', 'load_scripts');
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Responsive Slider and Backgrounds
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */

add_filter( 'gform_confirmation_anchor', '__return_true' );  



function responsive_background($class = '', $image){
    $output ='
     <style>
     .' . $class . '{
      background-image: url('. $image['sizes']['slider-desk'] . ');
     }
     @media (max-width: 1024px) {
     .' . $class . ' {
      background-image: url(' . $image['sizes']['slider-tablet'] . ');
    }
    }
    @media (max-width: 480px) {
     .' . $class . ' {
       background-image: url(' . $image['sizes']['slider-phone'] . ');
    }
  }
  </style>';
   $string = preg_replace('/\s+/', '', $output);
   return $string;
}




function my_acf_load_field( $field ) {
    global $_wp_additional_image_sizes;
    $field['choices'] = array();
    $field['choices']['full'] =  'Default'; 
    foreach($_wp_additional_image_sizes as $key => $image){
      $field['choices'][$key] =  $image['width'] . 'px - ' .  $image['height'] . 'px';
    }
    return $field;
}
add_filter('acf/load_field/name=image_size', 'my_acf_load_field');








// Register a testimonial ACF Block
if( function_exists('acf_register_block') ) {
	
	$result = acf_register_block(array(
		'name'				=> 'testimonial',
		'title'				=> __('Testimonial'),
		'description'		=> __('A custom testimonial block.'),
		'render_callback'	=> 'my_testimonial_block_html'
		//'category'		=> '',
		//'icon'			=> '',
		//'keywords'		=> array(),
	));
}

// Callback to render the testimonial ACF Block
function my_testimonial_block_html() {
	
	// vars
	$testimonial = get_field('testimonial');
	$author = get_field('author');
	$avatar = get_field('avatar');
	
	?>
	<blockquote class="testimonial">
	    <p><?php echo $testimonial; ?></p>
	    <cite>
	    	<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>" />
	    	<span><?php echo $author; ?></span>
	    </cite>
	</blockquote>
	<?php
}