<?php
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Sidebar
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init(){
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
} 
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Custom Excerpt Length
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
function expedite_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'expedite_custom_excerpt_length', 999 );
/* ------------------------------------------------------------ *\
|* ------------------------------------------------------------ *|
|* Change Read More Link to "Read More...."
|* ------------------------------------------------------------ *|
\* ------------------------------------------------------------ */
function expedite_excerpt_more( $more ) {
    return ' ...<a href="'.get_the_permalink().'" rel="nofollow">read more</a>';
}
add_filter( 'excerpt_more', 'expedite_excerpt_more' );







?>