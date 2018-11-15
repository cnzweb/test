<?php
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Remove Tiny MCE Buttons
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
function hide_tinymce_top($buttons)
 {
	$remove = array('alignleft','aligncenter','alignright','strikethrough','wp_more');
    return array_diff($buttons,$remove);
 }
add_filter('mce_buttons','hide_tinymce_top');
function hide_tinymce_bottom($buttons)
 {
   	$remove = array('strikethrough','forecolor','underline','alignjustify','outdent','indent','wp_help');
   	return array_diff($buttons,$remove);
 }
add_filter('mce_buttons_2','hide_tinymce_bottom');
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Hide Unused Formats in the format dropdown
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );
function tiny_mce_remove_unused_formats($init) {
	// Add block format elements you want to show in dropdown
	$init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3';
	return $init;
}
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Create a Simple Editor Bar
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */

add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{

  // Uncomment to view format of $toolbars
    /*
	echo '< pre >richard';
		print_r($toolbars);
	echo '< /pre >';
	die; */


  $toolbars['Simple'] = array();
  $toolbars['Simple'][1] = array('formatselect', 'bold' , 'italic' , 'bullist', 'numlist','blockquote','link', 'unlink','fullscreen','pastetext');
  
  unset( $toolbars['Basic' ]);
  unset( $toolbars['Full' ]);
  return $toolbars;
}
?>